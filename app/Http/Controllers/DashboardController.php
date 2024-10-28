<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class DashboardController extends Controller
{
    public function index(){
        $user = Auth::user();

        if($user->roles[0]->name == "Admin"){
            return redirect(route('admin.dashboard'));
        }
        return view('dashboard', ['user' => $user]);
    }

}
