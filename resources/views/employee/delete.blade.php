@extends('layouts.app')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Delete Employee') }}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <p>Are you sure you want to delete this employee?</p>
            <a href="#" class="btn btn-danger">Yes, Delete</a>
            <a href="#" class="btn btn-secondary">No, Cancel</a>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->  
@endsection