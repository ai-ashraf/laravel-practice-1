<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductlistController extends Controller
{
    public function productlist()
    {
        $products = Product::all();
        return view('admin.productlist' , compact('products'));
    }
    public function productshow($id)
    {
        $products = Product::find($id);
        return view('admin.productshow' , compact('products'));
    }
    public function create()
    {

        return view('admin.productcreate');
    }
    public function edit($id)
    {
        $products = Product::find($id);

        return view('admin.productedit' , compact('products'));
    }

    public function update(Request  $request , $id)
    {
        
        $products = Product::find($id);

        $data = [
            'product_name' => $request->product_name,
            'product_price' => $request->product_price,
            'product_details' => $request->product_details,
            // 'product_picture' => $request->product_picture
        ];

        $products->update($data);

        return redirect()
        ->route('productlist')
        ->withMessage('Updated Succesfully');
    }
    public function store(Request  $request)
    {
        $data = [
            'product_name' => $request->product_name,
            'product_price' => $request->product_price,
            'product_details' => $request->product_details,
            'product_picture' => $request->product_picture
        ];

        Product::create($data);

        return redirect()
        ->route('productlist')
        ->withMessage('Created Succesfully');
    }

    public function destroy($id)
    {
        $products = Product::find($id);
        $products->delete();
        return redirect()
        ->route('productlist')
        ->withMessage('Deleted Succesfully');
        
    }

    public function trash()
    {
        $products = Product::onlyTrashed()->get();
        return view('admin.producttrash' , compact('products'));
    }

    public function restore($id)
    {
        $products = Product::onlyTrashed()->find($id);
        // dd($products);
        $products->restore();
        return redirect()
        ->route('trashlist')
        ->withMessage('Restored Succesfully');
        
    }
    public function delete($id)
    {
        $products = Product::onlyTrashed()->find($id);
        // dd($products);
        $products->forceDelete();
        return redirect()
        ->route('trashlist')
        ->withMessage('Deleted Succesfully');
        
    }
}
