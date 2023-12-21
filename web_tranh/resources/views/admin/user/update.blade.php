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
                            <li class="breadcrumb-item active">Sửa người dùng</li>
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
                                <h3 class="card-title">Sửa người dùng</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="{{ route('user.put') }}" method="POST">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="name">Tên đăng nhập</label>
                                        <input type="text" class="form-control" id="username"
                                            placeholder="Enter username" name="username" value="{{ $user->username }}">
                                        <input type="text" value="{{ $user->id }}" name="id" hidden>
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Họ và Tên</label>
                                        <input type="text" class="form-control" id="fullname"
                                            placeholder="Enter fullname" name="fullname" value="{{ $user->fullname }}">
                                        <input type="text" value="{{ $user->id }}" name="id" hidden>
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Mật khẩu</label>
                                        <input type="text" class="form-control" id="password"
                                            placeholder="Enter password" name="password" value="{{ $user->password }}">
                                        <input type="text" value="{{ $user->id }}" name="id" hidden>
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Email</label>
                                        <input type="text" class="form-control" id="email" placeholder="Enter email"
                                            name="email" value="{{ $user->email }}">
                                        <input type="text" value="{{ $user->id }}" name="id" hidden>
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Chức vụ</label>
                                        <select value="{{ $user->role }}" id="role" name="role"
                                            class="form-select" aria-label="Default select example">
                                            <option value="Admin" selected>Admin</option>
                                            <option value="User">User</option>

                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Đình chỉ</label>
                                        <select value="{{ $user->suspend }}" id="suspend" name="suspend"
                                            class="form-select" aria-label="Default select example">
                                            <option value="Đình chỉ" selected>Đình chỉ</option>
                                            <option value="Không đình chỉ">Không đình chỉ</option>

                                        </select>
                                    </div>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Sửa</button>
                                </div>
                            </form>
                        </div>
                    </div>
        </section>
    </div>
@endsection
