<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
function random_code($limit)
{
    return substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, $limit);
}
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function aproduct(){
        return view('aproduct');
    }

    public function aaproduct(Request $request){
        
        $check = \File::extension($request->file);
        $uni =  random_code(15);
        $a = new Product();
        $a->name = $request->name;
        $a->description = $request->description;
        $a->location = $request->location;
        $a->district = $request->district;
        $a->image_url = $uni.'.png';
        $fname = $uni.'.png';
        $file = $request->file('file');
        $request->file->move(public_path('images'), $fname);
        $a->save();
     
        return redirect()->back();
    }

    public function mproduct(){
        
        $a = Product::all();
        return view('mproduct', compact('a'));
    }

    public function delproduct($id){
        $a = Product::where('id', '=', $id);
        $a->delete();
           return redirect('/mproduct');
        return $id;
    }
}
