@extends('layouts.master')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <h2>Create New</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('company.index') }}"> Back</a>
            </div>
        </div>
    </div>


    @if ($errors->any())

        <div class="alert alert-danger">
            <strong>Sorry,</strong> Please fill all the blank.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('company.store') }}" enctype="multipart/form-data" method="POST">
    	@csrf
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Company Name:</strong>		            
                <input type="text" name="company_name"  id="company_name" class="form-control" value="{{old('company_name')}}" placeholder="Company Name">
            </div>
        </div>

		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Email:</strong>
                    <input type="email" name="email"  id="email" class="form-control" value="{{old('email')}}" placeholder="Company Name Email">
		        </div>
		    </div> 

            <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Logo:</strong>
                    <input accept="image/*" type="file" placeholder="Upload company logo" id="image" class="form-control" name="image" value="{{old('image')}}">
		        </div>
		    </div> 

            <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Website:</strong>
                    <input type="url" name="website"  id="website" class="form-control" value="{{old('website')}}" placeholder="Enter Company Website URL">
		        </div>
		    </div> 

		    <div class="col-xs-12 col-sm-12 col-md-12 mt-2" align="right">
		            <button type="submit" class="btn btn-primary">Submit</button>
		    </div>

		</div>
    </form>
</div>
@endsection