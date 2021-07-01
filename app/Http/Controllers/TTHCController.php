<?php

namespace App\Http\Controllers;

use App\ThuTuc;
use App\LinhVuc;

class TTHCController extends Controller
{
    public function index()
    {
        $linhvuc = LinhVuc::all();
        $thutuc = ThuTuc::latest()->paginate(10);
        if (request('tenthutuc') != '' || request('linhvuc_id') != '') {
            if (request('linhvuc_id') != '') {
                $thutuc = ThuTuc::where('tenthutuc', 'like', '%' . request('tenthutuc') . '%')->where('id_linhvuc', request('linhvuc_id'))->latest()->paginate(10);
            } else {
                $thutuc = ThuTuc::where('tenthutuc', 'like', '%' . request('tenthutuc') . '%')->latest()->paginate(10);
            }
        }
        return view('congdan.tthc', compact('thutuc', 'linhvuc'));
    }

    public function show(ThuTuc $thu_tuc)
    {
        return view('congdan.chi_tiet_tthc', compact('thu_tuc'));
    }
}
