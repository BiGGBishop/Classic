@extends('layouts.main')

@section('title', 'Product edit')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Product Edit</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Product Edit</li>
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
                <form action="{{ route('product.update', $product->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    <div class="form-group">
                        <input type="text" value="{{ old('title', $product->title) }}" name="title" class="form-control"
                               placeholder="Title">
                        @error('title')
                        <span class="text-xs text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="text" value="{{ old('description', $product->description) }}" name="description"
                               class="form-control" placeholder="Description">
                        @error('description')
                        <span class="text-xs text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <textarea name="content" class="form-control" cols="30" rows="10"
                                  placeholder="Content">{{ old('content', $product->content) }}</textarea>
                        @error('content')
                        <span class="text-xs text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="number" value="{{ old('price', $product->price) }}" name="price"
                               class="form-control" placeholder="Price">
                        @error('price')
                        <span class="text-xs text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="number" value="{{ old('count', $product->count) }}" name="count"
                               class="form-control" placeholder="Count">
                        @error('count')
                        <span class="text-xs text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        @if(isset($product->preview_image))
                            <img src="{{ asset($product->preview_image) }}" width="200">
                        @endif
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="custom-file">
                                <input name="preview_image" type="file" class="custom-file-input" id="exampleInputFile">
                                <label class="custom-file-label" for="exampleInputFile">Choose image</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text">Upload</span>
                            </div>
                        </div>
                        @error('preview_image')
                        <span class="text-xs text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <select name="category_id " class="form-control select2" style="width: 100%;">
                            <option>Change category</option>
                            @foreach($categories as $category)
                                <option {{ old('category_id', $category->id) == $category->id ? 'selected' : '' }} value="{{ $category->id }}">{{ $category->title }}</option>
                            @endforeach
                        </select>
                        @error('category_id')
                        <span class="text-xs text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <select name="tags[]" class="tags" multiple="multiple" data-placeholder="Select a tag"
                                style="width: 100%;" tabindex="-1" aria-hidden="true">
                            @foreach($tags as $tag)
                                <option {{ old('tags[]', $tag->id) == $tag->id ? 'selected' : '' }} value="{{ $tag->id }}">{{ $tag->title }}</option>
                            @endforeach
                        </select>
                        @error('tags[]')
                        <span class="text-xs text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <select name="colors[]" class="colors" multiple="multiple" data-placeholder="Select a color"
                                style="width: 100%;" tabindex="-1" aria-hidden="true">
                            @foreach($colors as $color)
                                <option {{ old('colors[]', $color->id) == $color->id ? 'selected' : '' }} value="{{ $color->id }}">{{ $color->title }}</option>
                            @endforeach
                        </select>
                        @error('colors[]')
                        <span class="text-xs text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Edit">
                    </div>
                </form>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
