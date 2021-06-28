<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function dashboard(){

        return view('dashboard.home');


    }
    public function add(Request $request){


        $post= Product::create([
            "name"=>$request->name,
            "description"=>$request->description,
            "price"=>$request->price,
        ]);
        return redirect('show');

    }
    public function show(Request $request)
    {
        $post=Product::whereNotNull('id');
        $post=$post->get();
        return view('show')->with('postdata',$post);

    }
    public function delete(Request $request,$id)
    {

    	Product::where('id',$id)->delete();
    	return redirect('show');
    }
    public function update(Request $request,$id)
    {

        $post=Product::where('id',$id)->first();

        return view('update')->with('post',$post);
    }
    public function saveUpdatedd(Request $request)
    {
        Product::where('id',$request->id)->update([
        'name'=>$request->name,
        'description'=>$request->description,
        'price'=>$request->price,

        ]);

        return redirect('show');
    }

}
