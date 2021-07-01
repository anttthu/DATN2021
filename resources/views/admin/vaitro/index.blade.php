@extends('admin.layouts.master')

@section('title')
    Danh sách vai trò
@endsection

@section('content')
    <div class="page-header">
        <h4>Quản lý vai trò</h4>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Vai Trò</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tên vai trò</th>
                            @if (auth()->user()->isAdmin())
                                <th>Thao tác</th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($roles as $key => $value)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $value->name }}</td>
                                @if (auth()->user()->isAdmin())
                                    <td>
                                        <a href="{{ route('vai-tro.edit', ['vai_tro' => $value->id]) }}">
                                            <button class="btn btn-primary edit" type="button">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                        </a>

                                        <button class="btn btn-danger" type="button" data-toggle="modal"
                                            data-target="#delete{{ $value->id }}">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>

                                        <div class="modal fade" id="delete{{ $value->id }}" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Bạn có muốn xoá ?
                                                        </h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form
                                                            action="{{ route('vai-tro.destroy', ['vai_tro' => $value->id]) }}"
                                                            method="post">
                                                            @csrf
                                                            @method('delete')
                                                            <div class="modal-body d-flex justify-content-center">
                                                                <button type="submit"
                                                                    class="btn btn-success mr-3">Có</button>
                                                                <button class="btn btn-secondary" type="button"
                                                                    data-dismiss="modal">Không</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                @endif
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="pull-right">{{ $roles->links() }}</div>
            </div>
        </div>
    </div>
@endsection
