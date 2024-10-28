<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\RequestModel;

class RequestController extends Controller
{
    function request_view($id){
        $req = RequestModel::findOrFail($id);
        //return dd($req);
        if(Auth::user()->roles[0]->name == 'Admin'){
            return view('admin.application.request.view', ['data' => $req]);
        }
        return view('application.request.view', ['data' => $req]);
    }
}
