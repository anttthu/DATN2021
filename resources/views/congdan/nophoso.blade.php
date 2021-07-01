@extends('congdan.layouts.header')
@section('conten')
    <div class="container">
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr class="text-center">
                                <th>Mã thủ tục</th>
                                <th>Tên thủ tục</th>
                                <th>Lĩnh vực</th>
                                <th>Câp thực hiện</th>
                                <th>Hành động</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($thutuc as $key => $value)
                                <tr>
                                    <td>{{ $value->mathutuc }}</td>
                                    <td>{{ $value->tenthutuc }}</td>
                                    <td>{{ $value->LinhVuc->tenlinhvuc }}</td>
                                    <td>{{ $value->CapThucHien->ten_cap }}</td>
                                    <td>
                                        <a href="/ho-so/{{ $value->id }}" class="btn btn-info">Thực hiện</a>
                                    </td>
                                </tr>

                            @endforeach
                        </tbody>
                    </table>
                    <div class="pull-right">{{ $thutuc->links() }}</div>
                </div>
            </div>
        </div>
    </div>
@endsection
