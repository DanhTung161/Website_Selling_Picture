@extends('admin.layout')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Sản phẩm</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('home_admin') }}">Home</a></li>
                            <li class="breadcrumb-item active">Sản phẩm</li>
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
                            <form action="/product.post" method="post">
                                <div class="card-header">
                                    <a type="button" href="{{ route('product.create') }}"
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
                                            <th>Tên sản phẩm</th>
                                            <th>Ảnh</th>
                                            <th>Giá</th>
                                            <th>Kích thước</th>
                                            <th>Sáng tác</th>
                                            <th>Mô tả</th>
                                            <th>Chức năng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $item)
                                            <tr>
                                                <td>{{ $item->id }}</td>
                                                <td>{{ $item->title }}</td>
                                                <td><img src="{{ asset($item->image) }}"
                                                        style="max-height:100px; max-width:100px" alt=""></td>
                                                <td>{{ $item->price }}</td>
                                                <td>{{ $item->size }}</td>
                                                <td>{{ $item->composed }}</td>
                                                <td>{{ $item->description }}</td>
                                                <td>
                                                    <a type="button" href="{{ route('product.update', [$item->id]) }}"
                                                        class=" btn btn-warning">Edit</a>
                                                    <a type="button" href="{{ route('product.delete', [$item->id]) }}"
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
