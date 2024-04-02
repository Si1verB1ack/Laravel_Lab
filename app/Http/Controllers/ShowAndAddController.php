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
        $pro = Product::create($request->all());
        return redirect()->route('select');
    }
    public function detail(Request $request,Product $product){
        // $product = Product::find($product->id);
        return view('showandadd.detail')->with('product', $product);
    }
    public function delete(Request $request,Product $product){
        $product->delete();
        return redirect()->route('select')->with(['error' => 'Product deleted successfully']);
    }
    public function edit(Request $request,Product $product){
        $cateid = Category::all();
        return view('showandadd.edit')->with('product', $product)->with('categories', $cateid);
    }
    public function savedit(Request $request,Product $product){
        $product->name= $request->name;
        $product->description= $request->description;
        $product->price = $request->price;
        $product->QuantityInStock= $request->QuantityInStock;
        $product->CategoryID= $request->CategoryID;

        $product->save();
        return redirect()->route('select')->with(['message'=> 'Product has been updated successfully']);
    }
}
