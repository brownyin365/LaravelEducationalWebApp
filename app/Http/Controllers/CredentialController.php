<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Credentials;
use App\User;
use DB;


class CredentialController extends Controller
{
    public function save(Request $request)
    {
    	$user = User::create($request->all());
    	return redirect()->route('profile');
    }



}
