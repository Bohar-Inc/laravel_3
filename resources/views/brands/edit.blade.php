@extends('layouts.master')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Brands</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active">Brand Edit</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">

                    <div class="card card-primary card-outline">
                        <div class="card-body">
                            <h5 class="card-title">Edit Brand</h5><br>

                            <!-- form start -->
                            <form role="form" action="{{route('brands.update',$brand->id)}}" method="post">
                                @method('PUT')
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                                        <input type="text" class="form-control" name="name" value="{{$brand->name}}" placeholder="Enter brand name">
                                        @if($errors->has('name'))
                                            <span class="text-danger">{{$errors->first('name')}}</span>

                                        @endif
                                    </div>

                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-save"></i>Update</button>
                                </div>
                                <!-- /.card-footer -->
                            </form>
                        </div>
                    </div><!-- /.card -->
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection
