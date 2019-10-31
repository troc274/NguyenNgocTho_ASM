<?php
namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index() { 
        $categories =  Category::all() ;
        return view('admin.category.index')->with('categories', $categories);
    }

    public function store(Request $request) {
        $request->validate([
            'name' => "required|max:50"
        ]);
        $category = new Category();
        $category->name = $request->name;
        $category->save();
        return redirect()->route('category');
    }
    public function update(Request $request) {
        $request->validate([
            'name' => "required|max:50"
        ]);
        $category = Category::find($request->id);
        $category->name = $request->name;
        $category->save();
        return redirect()->route('category');
    }

    public function edit($id) { 
        $category = Category::find($id);
        $categories = Category::all();
        return view('admin.category.index')->with('category', $category)->with('categories', $categories);
    }
    public function delete($id) { 
        $category = Category::find($id);
        $category->delete();
        return redirect()->back();
    }
}
