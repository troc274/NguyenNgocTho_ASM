<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Take;

class TakeController extends Controller
{
    public function index() { 
        $takes =  Take::all() ;
        return view('admin.take.index')->with('takes', $takes);
    }
    public function insert() { 
        return view('admin.take.insert');
    }

    public function store(Request $request) {
        $rq = $request->all();
        unset($rq['_token']);
        $take = new Take($rq);
        if($request->file('image')){
            $path = $request->file('image')->store('public/upload');
            $take->image = str_replace("public","storage",$path);
        }
        $take->save();
        return redirect()->route('take');
    }
    public function update(Request $request, $id) {
        $take = Take::find($id)->first();
        if($request->file('image')){
            if(file_exists($take->image)){
                unlink($take->image);
            }
            $path = $request->file('image')->store('public/upload');
            $take->image = str_replace("public","storage",$path);
            
        }
        unset( $request['image']);
        unset( $request['_token']);
        foreach ($request->all() as $key => $value) {
            if($key == 'image') continue;
            $take->$key= $value;
        }
        $take->save();
        return redirect()->route('take');
    }

    public function edit($id) { 
        $take = Take::find($id);
        return view('admin.take.update')->with('take', $take);
    }
    public function delete($id) { 
        $take = Take::find($id);
        if(file_exists($take->image)){
            unlink($take->image);
        }
        $take->delete();
        return redirect()->back();
    }
}
