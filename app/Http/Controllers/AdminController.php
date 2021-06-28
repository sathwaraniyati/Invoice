<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

use App\Models\User;

class AdminController extends Controller
{


    public function login()
    {
        if(Auth::check())
        {
            return redirect()->route('dashboard');
        }
        return view('login');
    }


    public function adminLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
        $email = $request->email;
        $password = $request->password;

        if(Auth::attempt(['email' => $email, 'password' => $password]))
        {
            return redirect()->route('dashboard');
        }

    }
    public function register()
    {
        if(Auth::check())
        {
            return redirect()->route('dashboard');
        }
        return view('register');
    }

    public function postRegister(Request $request)
    {

         $request->validate([
            'name' => 'required|min:2',
            'email' => 'required|min:5|email|unique:users',
            'password' => 'required|min:5',

        ]);
        $input = $request->all();

        $inputArray = array(
            'name' => $request->name,
            'email' =>$request->email,
            'password' => Hash::make($request->password)


        );
        $user = User::create($inputArray);

      return redirect()->route('login')->with('success', 'User Registered Sucessfully');

    }
    public function logout()
    {
        Auth::logout();
        Session::flush();
        return redirect()->route('login')->with('success', 'Logout Success');
    }



    public function showprofile(Request $request)
    {
        $postt=User::whereNotNull('id');
        $postt=$postt->get();
        return view('showprofile')->with('postdata',$postt);

    }

    public function updateprofile(Request $request,$id)
    {
        //get the data of this id from db
        $postt=User::where('id',$id)->first();
        //print he data
        /*dd($post);*/
        //Pass thid data to update view
        return view('updateprofile')->with('postt',$postt);
    }
    public function saveUpdated(Request $request)
    {
        //update row
        User::where('id',$request->id)->update([
        'name'=>$request->name,
        'email'=>$request->email


        ]);
        //redirect to table
        return redirect('showprofile');
    }




}
