<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class admincontroller extends Controller
{
    public function checkUserRole(Request $request)
    {
        $user = $request->user();
        if($user->hasRole('admin')){
            return redirect()->route('admin-dashboard');
        } else {
            return redirect()->route('dashboard');
        }
    }
}
