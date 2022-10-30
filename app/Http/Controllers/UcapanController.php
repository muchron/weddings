<?php

namespace App\Http\Controllers;

use App\Models\Ucapan;
use Illuminate\Http\Request;

class UcapanController extends Controller
{
    public function store(Request $request)
    {
        $ucapan = Ucapan::create($request->all());

        if (!$ucapan) {
            return response()->json('Gagal mengirim ucapan');
        } else {
            return response()->json('Berhasil mengirim ucapan');
        }
    }
    public function index()
    {
        $ucapan = Ucapan::orderBy('created_at', 'DESC')->get();

        if (!$ucapan) {
            return response()->json('Gagal mengambil data ucapan');
        } else {
            return response()->json($ucapan);
        }
    }
}
