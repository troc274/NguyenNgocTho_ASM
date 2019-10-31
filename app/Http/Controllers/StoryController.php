<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Husband;
use App\Wife;
use App\Wedding;
class StoryController extends Controller
{
    public function index() { 
        return view('admin.wedding.index',[
            'weddings' => Wedding::all()
        ]);
    }

    public function stepfirst() {
        return view('admin.wedding.stepfirst');
    }
    public function stepseconds(Request $request) {
        $object = $request->all();
        unset($object['_token']);
        $wife = new Wife($object);
        if($request->file('image')){
            $path = $request->file('image')->store("public/upload");
            $wife->image  = str_replace("public","storage",$path);
        }else{
            $wife->image  = "";
        }
        $wife->save();
        return view('admin.wedding.stepseconds',[
            "wife_id" => $wife->id
        ]);
        
    }
    public function stepthird(Request $request) {
        $object = $request->all();
        $wife_id = $request->wife_id;
        unset($object['_token']);
        unset($object['wife_id']);
        $husband = new Husband($object);
        if($request->file('image')){
            $path = $request->file('image')->store("public/upload");
            $husband->image  = str_replace("public","storage",$path);
        }else{
            $husband->image  = "";
        }
        $husband->save();
        return view('admin.wedding.stepthird', [
            "wife_id" => $wife_id,
            "husband_id" => $husband->id
        ]);
    }

    public function store(Request $request) {
        $object = $request->all();
        unset($object['_token']);
        $wedding = new Wedding($object);
        if($request->file('banner')){
            $path = $request->file('banner')->store("public/upload");
            $wedding->banner  = str_replace("public","storage",$path);
        }else{
            $wedding->banner  = "";
        }
        $wedding->save();
        return redirect()->route('story');
    }
    public function update(Request $request, $id) {
        
    }

    public function edit($id) { 
        
    }
    public function delete($id) { 
      $wedding = Wedding::find($id);
      $wedding->husband->delete();
      $wedding->wife->delete();
      $wedding->delete();
      return redirect()->route('story');
    }
}
