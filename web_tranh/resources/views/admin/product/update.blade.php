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
                            <li class="breadcrumb-item active">Sửa sản phẩm</li>
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
                                <h3 class="card-title">Sửa sản phẩm</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="{{ route('product.put') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="title">Tên sản phẩm</label>
                                        <input type="text" class="form-control" id="title" placeholder="Enter title"
                                            name="title" value="{{ $product->title }}">
                                        <input type="text" value="{{ $product->id }}" name="id" hidden>
                                    </div>
                                    <div class="form-group">
                                        <label for="customFile">Ảnh</label>
                                        <input type="file" name="image" id="customFile">
                                    </div>
                                    <div class="form-group">
                                        <label for="price">Giá</label>
                                        <input type="text" class="form-control" id="price" placeholder="Enter price"
                                            name="price" value="{{ $product->price }}">
                                        <input type="text" class="form-control" value="{{ $product->id }}"
                                            name="id" hidden>
                                    </div>
                                    <div class="form-group">
                                        <label for="size">Kích thước</label>
                                        <input type="text" class="form-control" id="size" placeholder="Enter size"
                                            name="size" value="{{ $product->size }}">
                                        <input type="text" class="form-control" value="{{ $product->id }}"
                                            name="id" hidden>
                                    </div>
                                    <div class="form-group">
                                        <label for="composed">Tác giả</label>
                                        <input type="text" class="form-control" id="composed"
                                            placeholder="Enter composed" name="composed" value="{{ $product->composed }}">
                                        <input type="text" class="form-control" value="{{ $product->id }}"
                                            name="id" hidden>
                                    </div>

                                    <div class="form-group">
                                        <label for="description">Mô tả</label>
                                        <textarea class="form-control" id="description" name="description" rows="3" placeholder="Enter ...">{{ $product->description }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="sub_category">sub_category</label>
                                        <select name="sub_category_id" class="custom-select" id="sub_category">
                                            @foreach ($sub as $item)
                                                <option value="{{ $item->id }}" name="id"
                                                    @if ($item->id == $product->sub_category_id) selected @endif>{{ $item->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="material">material</label>
                                        <select name="material_id" class="custom-select" id="material">
                                            @foreach ($mater as $item)
                                                <option value="{{ $item->id }}" name="id"
                                                    @if ($item->id == $product->material_id) selected @endif>{{ $item->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="color">color</label>
                                        <select name="color_id" class="custom-select" id="color">
                                            @foreach ($col as $item)
                                                <option value="{{ $item->id }}"
                                                    @if ($item->id == $product->color_id) selected @endif>{{ $item->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="tone">tone</label>
                                        <select name="tone_id" class="custom-select" id="tone">
                                            @foreach ($ton as $item)
                                                <option value="{{ $item->id }}"
                                                    @if ($item->id == $product->tone_id) selected @endif>{{ $item->name }}
                                                </option>
                                            @endforeach
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
