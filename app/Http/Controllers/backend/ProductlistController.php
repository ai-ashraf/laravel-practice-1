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
}
