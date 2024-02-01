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
                            <li class="breadcrumb-item active">Thêm sản phẩm</li>
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
                                <h3 class="card-title">Thêm sản phẩm</h3>
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
                            <form action="{{ route('product.post') }}" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="title">Tên sản phẩm</label>
                                        <input type="text" class="form-control" id="title" placeholder="Enter name"
                                            name="title" value="{{ old('title') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="customFile">Ảnh</label>

                                        {{-- <div class="custom-file"> --}}
                                        <input type="file" class="" id="image" name="image">
                                        {{-- <label class="custom-file-label" for="image">Choose file</label> --}}
                                        {{-- </div> --}}
                                    </div>
                                    <div class="form-group">
                                        <label for="price">Giá</label>
                                        <input type="number" class="form-control" id="price" placeholder="Enter price"
                                            name="price" value="{{ old('price') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="size">Kích thước</label>
                                        <input type="text" class="form-control" id="size" placeholder="Enter size"
                                            name="size" value="{{ old('size') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="composed">Sáng tác</label>
                                        <input type="text" class="form-control" id="composed"
                                            placeholder="Enter composed" name="composed" value="{{ old('composed') }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="description">Mô tả</label>
                                        <textarea class="form-control" id="description" name="description" rows="3" placeholder="Enter ..."
                                            value="{{ old('description') }}"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="subcate">Danh mục phụ</label>
                                        <select name="sub_category_id" class="custom-select" id="subcate">
                                            @foreach ($sub_categories as $item)
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="material">Chất liệu</label>
                                        <select name="material_id" class="custom-select" id="material">
                                            @foreach ($materials as $item)
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="color">Màu sắc</label>
                                        <select name="color_id" class="custom-select" id="color">
                                            @foreach ($colors as $item)
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="tone">Tông màu</label>
                                        <select name="tone_id" class="custom-select" id="tone">
                                            @foreach ($tones as $item)
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
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
