<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 use App\Product;

class MainController extends Controller
{
    //

    public function search(){
            $a = Product::take(3)->get();
           
            return view('landing', compact('a'));
    }

    public function addproduct(){
        return view('addproduct');
    }

    public function aaddproduct(Request $request){
        
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
     
        return redirect()->route('search');
    }

    public function listing(){
        $a = Product::all();
        $b = Product::count();
         
        
        return view('listing', compact('a','b'));
    }

    public function help(){
        return view('help');
    }
    public function donate(){
        return view('donate');
    }
    

}
