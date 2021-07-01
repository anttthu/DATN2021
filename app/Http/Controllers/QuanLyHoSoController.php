<?php

namespace App\Http\Controllers;

use App\HoSo;
use App\TrangThaiHoSo;

class QuanLyHoSoController extends Controller
{
    public function index()
    {
        $hoso = HoSo::latest()->paginate(10);
        return view('admin.hoso.index', compact('hoso'));
    }

    public function edit(HoSo $quan_ly_ho_so)
    {
        if (auth()->user()->role_id == 1) {
            return back();
        }
        $hoso = $quan_ly_ho_so;
        $trang_thai = collect([]);
        if (auth()->user()->role_id == 2) {
            if ($hoso->trangthaihoso_id == 4) {
                $trang_thai = TrangThaiHoSo::where('id', 5)->get();
            }
        } elseif (auth()->user()->role_id == 3) {
            $trang_thai_ids = [$hoso->trangthaihoso_id, $hoso->trangthaihoso_id + 1];
            $trang_thai = TrangThaiHoSo::whereIn('id', $trang_thai_ids)->whereNotIn('id', [5])->get();
            if ($hoso->trangthaihoso_id == 1) {
                $trang_thai = TrangThaiHoSo::whereIn('id', [1, 2, 3])->get();
            }
            if ($hoso->trangthaihoso_id == 4) {
                $trang_thai = collect([]);
            }
            if ($hoso->trangthaihoso_id == 5 || $hoso->trangthaihoso_id == 7) {
                $trang_thai = TrangThaiHoSo::whereIn('id', [6, 7])->get();
            }
        }

        return view('admin.hoso.edit', compact('hoso', 'trang_thai'));
    }

    public function update(HoSo $quan_ly_ho_so)
    {
        $quan_ly_ho_so->update(request()->all());
        toastr()->success('Cập nhật hồ sơ thành công');
        return redirect()->route('quan-ly-ho-so.index');
    }
}
