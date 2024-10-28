<?php

namespace App\Http\Controllers;

use App\Models\RequestModel;
use Illuminate\Http\Request;

class CertificateController extends Controller
{
    public function index($id){
        $cert = RequestModel::findOrFail($id);

        return view('admin.certificate.index', ['data'=>$cert]);
    }
}
