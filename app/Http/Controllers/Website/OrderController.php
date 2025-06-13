<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function orderPlace(Request $request)
    {
        $request->validate([
           'name' => 'required',
           'email' => 'required|email',
           'phone' => 'required',
           'delivery_address' => 'required',
        ], [
            'delivery_address.required' => 'Delivery address is required',
        ]);
    }
}
