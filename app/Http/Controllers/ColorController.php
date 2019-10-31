<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Color;

class ColorController extends Controller
{
    public function index() { 
        $colors =  Color::all() ;
        return view('admin.color.index')->with('colors', $colors);
    }

    public function store(Request $request) {
        $request->validate([
            'name' => "required|max:50",
            'code' => "required|max:10"
        ]);
        $color = new Color();
        $color->name = $request->name;
        $color->code = $request->code;
        $color->save();
        return redirect()->route('color');
    }
    public function update(Request $request, $id) {
        $request->validate([
            'name' => "required|max:50",
            'code' => "required|max:20"
        ]);
        $Color = Color::find($id);
        $Color->name = $request->name;
        $Color->code = $request->code;
        $Color->save();
        return redirect()->route('color');
    }

    public function edit($id) { 
        $color = Color::find($id);
        return view('admin.color.update')->with('color', $color);
    }
    public function delete($id) { 
        $category = Category::find($id);
        $category->delete();
        return redirect()->back();
    }
}
