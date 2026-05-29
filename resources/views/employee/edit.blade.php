@extends('layouts.app')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">{{ __('Employee.Edit') }}</h1>
                    @if (session('status'))
                      <div class="alert alert-success">{{session('status')}}</div>
                  @endif
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header --> 
    <!-- Main content -->
    <div class="content">

      <div class="container-fluid">
        <div class="row">
          <div class="col-6 m-auto">
            <div class="card card-secondary">
              <div class="card-header">
                <h3 class="card-title">Edit Employee Information</h3>
              </div>
              <form action="{{ route('employee.update', $employee->id) }}" method="POST">
                @csrf
                @method('PUT')
                @foreach ( $employees as $employee )
                  
                  
                <div class="row card-body col-12">
                  <div class="form-group col-12">
                    <label
                        for="exampleInputEmail1">First Name
                    </label>
                        <input type="text" class="form-control g-2" id="fname" name="fname" placeholder="Enter your Firstname" require value="{{ $employee->fname}}">
                  </div>                  
                <div class="form-group col-12">
                  <label for="exampleInputPassword1">Last Name</label>
                  <input type="text" class="form-control" id="lname" name="lname" placeholder="Enter your Last Name"
                  value="{{ $employee->lname}}">
                </div>
                <div class="form-group col-12">
                    <label for="exampleInputFile">Middle Name</label>
                  <input type="text" class="form-control" id="midname" name="midname" placeholder="Enter your Middle Name"
                  value="{{ $employee->midname}}">
                </div>
                <div class="form-group col-12">
                  <label for="exampleInputEmail1">Address</label>
                  <input type="text" class="form-control" id="address" name="address" placeholder="Enter Address" value="{{ $employee->address}}">
                </div>
                <div class="form-group col-6">
                  <label for="exampleInputPassword1">Date of birth</label>
                  <input type="date" class="form-control" id="dob" name="dob" placeholder="YYYY-MM-DD" value="{{ $employee->dob}}">
                </div>
                <div class="form-group col-6">
                  <label for="exampleInputPassword1">Contact No</label>
                  <input type="text" class="form-control" id="contact" name="contact" placeholder="Enter your Contact No" value="{{ $employee->contact}}">

        <div class="container-fluid">
            <form action="{{ route('employee.update', $employee->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="fname">First Name</label>
                    <input type="text" name="fname" id="fname" class="form-control" value="{{ $employee->fname }}" required>
                </div>
                <div class="form-group">
                    <label for="lname">Last Name</label>
                    <input type="text" name="lname" id="lname" class="form-control" value="{{ $employee->lname }}" required>
                </div>
                <div class="form-group">
                    <label for="midname">Middle Name</label>
                    <input type="text" name="midname" id="midname" class="form-control" value="{{ $employee->midname }}" required>
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" name="address" id="address" class="form-control" value="{{ $employee->address }}" required>
                </div>
                <div class="form-group">
                    <label for="dob">Date of Birth</label>
                    <input type="date" name="dob" id="dob" class="form-control" value="{{ $employee->dob }}" required>

                </div>
                <div class="form-group">
                    <label for="contact">Contact No</label>
                    <input type="text" name="contact" id="contact" class="form-control" value="{{ $employee->contact }}" required>
                </div>

                @endforeach
              </form>
      

                <button type="submit" class="btn btn-primary">Update Employee</button>
                <a href="{{ route('employee.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->

@endsection