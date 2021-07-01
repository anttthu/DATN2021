<?php

namespace App\Http\Controllers;

use App\HoSo;
use App\ThuTuc;
use App\LinhVuc;
use App\FileDinhKem;

class HoSoController extends Controller
{
    public function index()
    {
        $linhvuc = LinhVuc::all();
        $thutuc = ThuTuc::latest()->paginate(10);
        return view('congdan.nophoso', compact('thutuc', 'linhvuc'));
    }

    public function show(HoSo $hoso)
    {
        return view('congdan.hoso.show', compact('hoso'));
    }

    public function create(ThuTuc $thu_tuc)
    {
        $user = auth()->user();
        return view('congdan.hoso.form', compact('user', 'thu_tuc'));
    }

    public function store()
    {
        $hoso = HoSo::create(request()->all());
        if (request()->exists('files')) {
            foreach (request()->file('files') as $value) {
                $file_name = $value->getClientOriginalName();
                $file_path = $value->store("uploads/file-dinh-kem", 'public');

                FileDinhKem::create([
                    'hoso_id' => $hoso->id,
                    'file_name' => $file_name,
                    'file_path' => $file_path,
                ]);
            }
        }
        toastr()->success('Nộp hồ sơ thành công');
        return redirect('ho-so');
    }

    public function theodoi()
    {
        $hoso = HoSo::where('user_id', auth()->id())->latest()->paginate(10);
        return view('congdan.theodoihoso', compact('hoso'));
    }
}
