<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function user(){
        
        if(auth()->user()->usertype=='admin'){
            return view('admin.user');
        }
        abort(401);
    }
}
