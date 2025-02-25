@extends('layouts.main')

@section('title', 'Product')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Product</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Product</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex p-3">
                            <div class="mr-3">
                                <a href="{{ route('product.edit', $product->id) }}" class="btn btn-primary">Edit
                                    product</a>
                            </div>
                            <form action="{{ route('product.delete', $product->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <input type="submit" class="btn btn-danger" value="Delete">
                            </form>
                        </div>

                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <tbody>
                                <tr>
                                    <td>ID</td>
                                    <td>Title</td>
                                    <td>Description</td>
                                    <td>Content</td>
                                    <td>Image</td>
                                    <td>Price</td>
                                    <td>Count</td>
                                    <td>Category</td>
                                    <td>Tags</td>
                                    <td>Colors</td>
                                </tr>
                                <tr>
                                    <td>{{ $product->id }}</td>
                                    <td>{{ $product->title }}</td>
                                    <td>{{ $product->description }}</td>
                                    <td>{{ $product->content }}</td>
                                    <td><img src="{{ asset($product->preview_image) }}" width="200"></td>
                                    <td>{{ $product->price }}</td>
                                    <td>{{ $product->count }}</td>
                                    <td>{{ $product->category_id }}</td>
                                    <td>
                                        @foreach($product->tags as $tag)
                                            {{ $tag->title }}
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach($product->colors as $color)
                                            {{ $color->title }}
                                        @endforeach
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>

                </div>
                <!-- ./col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
