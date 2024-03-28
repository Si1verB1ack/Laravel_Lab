<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ShowAndAddController extends Controller
{
    public function select(){
        $product = Product::all();
        return view('showandadd.select')->with('products', $product);
    }
    public function add(){
        $cateid = Category::all();
        return view('showandadd.add')->with('categories', $cateid);
    }
    public function save(Request $request){
        $product = Product::create($request->all());
        return redirect('select');
    }
}
