<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConvertCertificateController extends Controller
{
    public function index()
    {
        return view('convert-certificate');
    }
}
