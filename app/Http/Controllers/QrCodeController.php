<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QrCodeController extends Controller
{
    public function index()
    {
        return view('qrcode');
    }

    public function store(Request $request)
    {
        $link = $request->link;
        return  view('qrcode' , compact('link'));
    }
}
