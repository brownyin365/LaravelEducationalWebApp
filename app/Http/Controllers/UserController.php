<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Image;

class UserController extends Controller
{
    public function profile()
    {
    	return view('profile', array('user' => Auth::user()) );
    }

    public function update_avatar(Request $request)
    {
    	//user upload avatar handler
    	if($request->hasFile('avatar'))
    	{
    		$avatar = $request->file('avatar');
    		$filename = time() . '.' . $avatar->getClientOriginalExtension();
    		Image::make($avatar)->resize(300, 300)->save( public_path('/uploads/avatars/' . $filename));
    		$user = Auth::user();
    		$user->avatar = $filename;
    		$user->save();
    	}

    	return view('profile', array('user' => Auth::user()) );
    }
    
    /*public function create()
    {
        $user = new User();
        return View::make('user.edit', compact('user'));
    }

    public function edit($id)
    {
        $user = User::find($id);
        return View::make('user.edit', compact('user'));
    }
    */

    public function scholarship()
    {
        return view('scholarship');
    }

    
}
