<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Content;
use App\Product;
use App\Photo;
use App\Category;
use App\Take;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $content  = Content::where("section","service")->get();
        $photos  = Content::where('section','photo')->orderBy('id','desc')->get();
        return view('admin.home.index', [
            'service'=>$content,
            'photos' => $photos,
        ]);
    }
    public function view()
    {
        $product = [];
        $title = [];
        foreach (Category::limit(4)->get() as $key => $value) {
            $title[ $key] = $value->name;
            $Object = Product::where('category_id', $value->id)->orderBy('id','desc')->limit(8)->get();
            $product[$key] =  $Object;
        }
        $content  = Content::where("section","service")->get();
        $photos  = Content::where('section','photo')->orderBy('id','desc')->get();
        $takes  = Take::orderBy('id','desc')->limit(3)->get();
        return view('index', [
            "content" => $content,
            "product" => $product,  
            'title' => $title,
            "photos" => $photos,
            "takes" => $takes,
        ]);
    }
    public function photo(Request $request)
    {
        foreach ($request->file('photo') as $key => $value) {
            $path = $value->store('public');
            $path = str_replace('public','storage',$path );
            $photo = new Content();
            $photo->section = "photo";
            $photo->content = $path;
            $photo->save();
        }
        return redirect()->route('home.index');
    }
    public function delete_photo($id)
    {
       $content = Content::find($id);
       if(file_exists($content->content)){
            unlink($content->content);
        }
        $content->delete();
        return  redirect()->back();
    }

    public function service(Request $request)
    {
        $content = $request->all();
        unset($content['_token']);
        foreach ($content as $key => $value) {
            $item = Content::where(['section'=> 'service', "name" => $key]);
            $item->update(['content'=> $value]);
        }
        return  redirect()->back();
    }

    // product 
    public function product($id) {
        $products = Product::where('category_id', $id)->get();
        $category = Category::find($id);
        if($category != null){
            $title = $category->name;
        }else{
            $title = "Không có danh mục hiện tại";
        }
        $menu = Category::limit(4)->get();
        return view('product', [
            'products'=> $products,
            'title' => $title,
            'menu' => $menu
            ]);
    }
    public function comming() { 
        $menu = Category::limit(4)->get();
        return view('comming')->with('menu', $menu);
    }
    public function take() { 
        $menu = Category::limit(4)->get();
        $take = Take::get();
        return view('take')->with('take', $take)->with('menu', $menu);
    }
    public function detail($id) { 
        $menu = Category::limit(4)->get();
        $product = Product::find($id);
        $more = Product::where('category_id', $product->category_id)->limit(4)->get();
        return view('detail')->with('product', $product)->with('menu', $menu)->with('more',$more);
    }
    public function takes($id) { 
        $menu = Category::limit(4)->get();
        $take = Take::find($id);
        $more = Take::orderBy('id','desc')->limit(3)->get();
        return view('takes')->with('take', $take)->with('menu', $menu)->with('more',$more);
    }
 }
