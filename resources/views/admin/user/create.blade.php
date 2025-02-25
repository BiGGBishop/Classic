@extends('layouts.main')

@section('title', 'User create')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">User Create</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">User create</li>
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
                <form action="{{ route('user.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="name" value="{{ old('name') }}" class="form-control"
                               placeholder="Name">
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" value="{{ old('email') }}" class="form-control"
                               placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password_confirmation" class="form-control"
                               placeholder="Password Confirm">
                    </div>
                    <div class="form-group">
                        <input type="text" name="surname" value="{{ old('surname') }}" class="form-control"
                               placeholder="Surname">
                    </div>
                    <div class="form-group">
                        <input type="text" name="age" value="{{ old('age') }}" class="form-control" placeholder="Age">
                    </div>
                    <div class="form-group">
                        <input type="text" name="address" value="{{ old('address') }}" class="form-control"
                               placeholder="Address">
                    </div>
                    <div class="form-group">
                        <select name="gender" class="custom-select form-control" id="exampleSelectBorder">
                            <option disabled selected>Gender</option>
                            <option {{ old('gender') == 0 ? ' selected' : '' }} value="0">Men</option>
                            <option {{ old('gender') == 1 ? ' selected' : '' }} value="1">Women</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Add">
                    </div>
                </form>
                <!-- ./col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
