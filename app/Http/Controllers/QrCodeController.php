<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use PDF;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

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

    public function pdf(Request $request)
    {
        $qrCode = base64_encode(QrCode::size(150)->generate( $request->link));
        $pdf = PDF::loadView('pdf', compact('qrCode'));
        return $pdf->download('itsolutionstuff.pdf');

    }
}
