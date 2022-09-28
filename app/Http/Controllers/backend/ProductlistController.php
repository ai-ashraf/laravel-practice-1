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
}
