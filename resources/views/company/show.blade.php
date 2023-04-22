@extends('layouts.master')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Company Details</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('company.index') }}"> Back</a>
            </div>
        </div>
    </div>


    <div class="row">    

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Company Id: </strong>
                {{ $company->id }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Company Name: </strong>
                {{ $company->company_name }}
            </div>
        </div>        

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Company Email: </strong>
                {{ $company->email }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Company Logo: </strong>
                <img src="{{asset('uploads/logo/'.$company->image) }}" width="100px" height="100px" alt="Logo">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Company Website: </strong>
                {{ $company->website }}
            </div>
        </div>

    </div>
</div>

    @endsection