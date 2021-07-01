<?php

namespace App\Http\Controllers;

use App\ThuTuc;
use App\BieuMau;
use App\LinhVuc;
use App\CapThucHien;
use Illuminate\Support\Facades\File;
use App\Http\Requests\StoreThuTucRequest;

class ThuTucController extends Controller
{
    public function index()
    {
        $thutuc = ThuTuc::latest()->paginate(5);
        return view('admin.thutuc.list', compact('thutuc'));
    }

    public function create()
    {
        $linhvuc = LinhVuc::all();
        $cap = CapThucHien::all();
        return view('admin.thutuc.create', compact('linhvuc', 'cap'));
    }

    public function store(StoreThuTucRequest $request)
    {
        $thutuc = ThuTuc::create($request->validated());
        if (request()->exists('files')) {
            foreach (request()->file('files') as $value) {
                $file_name = $value->getClientOriginalName();
                $file_path = $value->store("uploads/bieu_mau", 'public');

                BieuMau::create([
                    'id_thutuc' => $thutuc->id,
                    'file_name' => $file_name,
                    'file_path' => $file_path,
                ]);
            }
        }
        toastr()->success('Tạo thủ tục thành công');
        return redirect()->route('thu-tuc.index');
    }

    public function edit(ThuTuc $thu_tuc)
    {
        $linhvuc = LinhVuc::all();
        $cap = CapThucHien::all();
        return view('admin.thutuc.edit', compact('linhvuc', 'cap', 'thu_tuc'));
    }

    public function update(StoreThuTucRequest $request, ThuTuc $thu_tuc)
    {
        $thu_tuc->update($request->validated());
        if (request()->exists('files')) {
            //xoa cac file bieu mau cu
            foreach ($thu_tuc->BieuMau as $value) {
                File::delete($value->file_path);
                $value->delete();
            }

            foreach (request()->file('files') as $value) {
                $file_name = $value->getClientOriginalName();
                $file = $value;
                $file_path = $file->store("uploads/bieu_mau", 'public');

                BieuMau::create([
                    'id_thutuc' => $thu_tuc->id,
                    'file_name' => $file_name,
                    'file_path' => $file_path,
                ]);
            }
        }
        toastr()->success('Cập nhật thủ tục thành công');
        return redirect()->route('thu-tuc.index');
    }

    public function destroy(ThuTuc $thu_tuc)
    {
        foreach ($thu_tuc->BieuMau as $value) {
            File::delete($value->file_path);
            $value->delete();
        }
        $thu_tuc->delete();
        toastr()->success('Xoá thủ tục thành công');
        return redirect()->route('thu-tuc.index');
    }
}
