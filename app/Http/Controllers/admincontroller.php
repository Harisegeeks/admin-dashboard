<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Show the admin dashboard.
     */
    public function index()
    {
        return view('admin');
    }

    public function checkUserRole(Request $request)
    {
        $user = $request->user();
        if($user->hasRole('admin')){
            return redirect()->route('admin');
        } else {
            return redirect()->route('dashboard');
        }
    }
}
