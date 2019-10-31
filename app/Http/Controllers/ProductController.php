<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Product;
use App\Category;
use App\Photo;
use App\Color;

class ProductController extends Controller
{
    public function index() { 
        $products =  Product::all() ;
        return view('admin.product.index')->with('products', $products);
    }
    public function insert() { 
        return view('admin.product.form', [
            'colors'=>Color::all(),
            'categories'=> Category::all()
        ]);
    }
    public function store(Request $request) {
        $request->validate([
            'name' => "required|max:100",
            'image' => "required|mimes:jpeg,png,jpg",
            'category_id' => "required|integer",
            'color_id' => "required|integer",
            'amount' => "required|integer",
        ]);
        $path = $request->file('image')->store('public/upload');
        $product = new Product(); 
        $product->name = $request->name; 
        $product->slug = str_replace(" ", "-", $request->name); 
        $product->amount = $request->amount; 
        $product->sale = $request->sale;
        $product->color_id = $request->color_id;
        $product->category_id = $request->category_id;
        $product->image = str_replace("public","storage",$path);
        $product->save();
        foreach($request->file('albums') as $image){
            $url = $image->store("public/upload");
            $photo = new Photo();
            $photo->image = str_replace("public",'storage', $url);
            $photo->product_id = $product->id;
            $photo->index = false;
            $photo->save();
        }
        return redirect()->route('product');
    }
    
    public function update(Request $request,$id) {
        $request->validate([
            'name' => "required|max:100",
            'category_id' => "required|integer",
            'color_id' => "required|integer",
            'image' => "mimes:jpeg,png,jpg",
            'amount' => "required|integer",
        ]);
        $product = Product::find($id);
        $product->name = $request->name; 
        $product->slug = str_replace(" ", "-", $request->name); 
        $product->amount = $request->amount; 
        $product->sale = $request->sale;
        $product->color_id = $request->color_id;
        $product->category_id = $request->category_id;
        if($request->file('image')){
            $path = $request->file('image')->store('public/upload');
            $product->image = str_replace("public","storage",$path);
        };
        $product->save();
        if($request->file('albums')){
            foreach( $product->photos as $photo ){
                try {
                    unlink($photo->image);
                    $photo->delete();
                } catch (\Throwable $th) {
                }
            }
            foreach($request->file('albums') as $image){
                $url = $image->store("public/upload");
                $photo = new Photo();
                $photo->image = str_replace("public",'storage', $url);
                $photo->product_id = $product->id;
                $photo->index = false;
                $photo->save();
            }
        }
        return redirect()->route('product');
    }

    public function edit($id) { 
        $product =  Product::find($id);
        return view('admin.product.edit',[
            'colors'=>Color::all(),
            'categories'=> Category::all(),
            'product' =>  $product,
            'albums' =>  $product->photos,
        ]);
    }
    public function delete($id) { 
        $product = product::find($id);
        foreach ($product->photos as $photo) {
            unlink($photo->image);
            $photo->delete();
        }
        $product->delete();
        return redirect()->back();
    }
}
