@extends('admin.layout')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Người dùng</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('home_admin') }}">Home</a></li>
                            <li class="breadcrumb-item active">Người dùng</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content-header -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <form action="/user.post" method="post">
                                <div class="card-header">
                                    <a type="button" href="{{ route('user.create') }}"
                                        class="card-title btn btn-success">Thêm</a>
                                    <div class="card-tools">
                                        <div class="input-group input-group-sm" style="width: 150px">
                                            <input type="text" name="table_search" class="form-control float-right"
                                                placeholder="Search" />
                                            <div class="input-group-append">
                                                <button type="submit" class="btn btn-default">
                                                    <i class="fas fa-search"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Tên đăng nhập</th>
                                            <th>Họ và Tên</th>
                                            <th>Mật khẩu</th>
                                            <th>Email</th>
                                            <th>Chức vụ</th>
                                            <th>Đình chỉ</th>
                                            <th>Chức năng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $item)
                                            <tr>
                                                <td>{{ $item->id }}</td>
                                                <td>{{ $item->username }}</td>
                                                <td>{{ $item->fullname }}</td>
                                                <td>{{ $item->password }}</td>
                                                <td>{{ $item->email }}</td>
                                                <td>{{ $item->role }}</td>
                                                <td>{{ $item->suspend }}</td>
                                                <td>
                                                    <a type="button" href="{{ route('user.update', [$item->id]) }}"
                                                        class=" btn btn-warning">Edit</a>
                                                    <a type="button" href="{{ route('user.delete', [$item->id]) }}"
                                                        class=" btn btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                            @include('admin.paginate.paginate')
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
