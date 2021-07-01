<?php

namespace App\Http\Controllers;

use App\LinhVuc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class LinhVucController extends Controller
{
    public function index()
    {
        $linhvuc = LinhVuc::paginate(5);
        return view('admin.linhvuc.list', compact('linhvuc'));
    }

    public function create()
    {
        return view('admin.linhvuc.create');
    }

    public function store(Request $request)
    {
        // lấy giá trị linh vục
        $allRequest = $request->all();
        $malinhvuc = $allRequest['malinhvuc'];
        $tenlinhvuc = $allRequest['tenlinhvuc'];
        $mota = $allRequest['mota'];
        $dataInsertToDatabase = array(
            'malinhvuc' => $malinhvuc,
            'tenlinhvuc' => $tenlinhvuc,
            'mota' => $mota,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        );
        // chèn inster vào bảng
        $insertData = DB::table('linh_vucs')->insert($dataInsertToDatabase);
        // if ($insertData) {
        //     Session::flash('success', 'Thêm mới thành công!');
        // } else {
        //     Session::flash('error', 'Thêm thất bại!');
        // }
        toastr()->success('Tạo lĩnh vực thành công');
        return redirect()->route('LinhVuc.index');
    }

    public function edit($id)
    {
        $linhvuc= LinhVuc::find($id);
        return response()->json($linhvuc, 200);
    }

    public function update(Request $request, $id)
    {
        $linhvuc= LinhVuc::find($id);
        $linhvuc->update(
            [
                'malinhvuc' => $request->malinhvuc,
                'tenlinhvuc' => $request->tenlinhvuc,
                'mota' =>$request->mota
            ]
        );
        toastr()->success('Cập nhật thành công');
        return 1;
    }

    public function destroy($id)
    {
        $linhvuc= LinhVuc::find($id);
        $linhvuc->delete();
        return response()->json(['success' => 'Xóa thành công']);
    }
}
