@extends('layouts.master')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Sizes</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active">Size Edit</li>
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
                            <h5 class="card-title">Edit Size</h5><br>

                            <!-- form start -->
                            <form role="form" action="{{route('sizes.update',$size->id)}}" method="post">
                                @method('PUT')
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                                        <input type="text" class="form-control" name="size" value="{{$size->size}}" placeholder="Enter size ">
                                        @if($errors->has('size'))
                                            <span class="text-danger">{{$errors->first('size')}}</span>

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
