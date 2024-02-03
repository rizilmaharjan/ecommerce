<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        $admin = Auth::guard('admin')->user();
        echo 'welcome'.$admin->name. '<a href="'.route('admin.logout').'">Logout</a>';
        // echo 'Welcome';
    }
    public function logout(){
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');



    }
}
