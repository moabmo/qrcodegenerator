<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QRCodeController extends Controller
{
    public function index()
    {
        return view('qrcode');
    }

    public function generate(Request $request)
    {
        $request->validate([
            'text' => 'required|string',
        ]);

        $text = $request->input('text', 'Hello, QR Code!');

        $qrcode = QrCode::size(200)->generate($text);

        return view('qrcode', compact('qrcode', 'text'));
    }
}
