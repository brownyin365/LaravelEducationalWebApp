<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class StudInsertController extends Controller {
   

   public function insertform()
   {
      return view('insert');
   }
	
   
   public function insert(Request $request)
   {
    DB::table('users')->insert(array(
    'lastname'        => $request->get('lastname'),
    'major'           => $request->get('major'),
    'dob'             => $request->get('dob'),
    'applieduni'      => $request->get('applieduni'),
    
      ));
   }

   

    

}