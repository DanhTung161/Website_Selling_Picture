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
                            <li class="breadcrumb-item active">Thêm người dùng</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content-header -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Thêm người dùng</h3>
                            </div>
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="{{ route('user.post') }}" method="POST">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="username">Tên đăng nhập</label>
                                        <input type="text" class="form-control" id="username"
                                            placeholder="Enter username" name="username" value="{{ old('username') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="fullname">Họ và Tên</label>
                                        <input type="text" class="form-control" id="fullname"
                                            placeholder="Enter fullname" name="fullname" value="{{ old('fullname') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Mật khẩu</label>
                                        <input type="text" class="form-control" id="password"
                                            placeholder="Enter password" name="password" value="{{ old('password') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="text" class="form-control" id="email" placeholder="Enter email"
                                            name="email" value="{{ old('email') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="role">Chức vụ</label>
                                        <select id="role" name="role" class="custom-select">
                                            <option value="User" selected>User</option>
                                            <option value="Admin">Admin</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="suspend">Đình chỉ</label>
                                        <select id="suspend" name="suspend" class="custom-select">
                                            <option value="Không đình chỉ" selected>Không đình chỉ</option>
                                            <option value="Đình chỉ">Đình chỉ</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Thêm</button>
                                </div>
                            </form>
                        </div>
                    </div>
        </section>
    </div>
@endsection
