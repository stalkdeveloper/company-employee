@extends('layouts.master')
@section('content')

<div class="container mt-4">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Company Employee Details</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('employee.index') }}"> Back</a>
            </div>
        </div>
    </div>


    <div class="row">    

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Employee Id:</strong>
                {{ $employee->id }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>First Name:</strong>
                {{ $employee->first_name }}
            </div>
        </div>  
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Last Name:</strong>
                {{ $employee->last_name }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Employee Email:</strong>
                {{ $employee->email }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Employee Contact No.:</strong>
                {{ $employee->phone }}
            </div>
        </div>

    </div>
</div>

@endsection