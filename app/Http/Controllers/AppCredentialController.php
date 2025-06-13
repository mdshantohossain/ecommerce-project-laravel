<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppCredentialController extends Controller
{
    public function index()
    {
        return view('admin.credential.index');
    }
}
