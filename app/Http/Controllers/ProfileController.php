<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Image;


class ProfileController extends Controller
{
    public function Profile(Request $request)
    {
        if(Auth::check())
        {
            $data = Auth::user();
            return view('profile')->with('data', $data);
        }
        else
        {
            return redirect()->route('login');
        }
    }
    public function dashboard()
    {
        if(Auth::check())
        {
        return view('dashboard.home');
        }
        else
        {
        return redirect()->route('login');
        }
    }

    public function update(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $user = Auth::user();
        $image =   $request->file('image');
        $avatarName = $user->id.'_soengsouy'.time().'.'.request()->	image->getClientOriginalExtension();
        Image::make($image)->resize(300, 300)->save(public_path('/image/' . $avatarName));
        $request->image->storeAs('image',$avatarName);
        $user->image = $avatarName;
        $user->save();
        return back()->with('success');
    }

}

