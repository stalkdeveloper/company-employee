@extends('layouts.master')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <h2>Create New Employee Records</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('employee.index') }}"> Back</a>
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
    <form action="{{ route('employee.store') }}" method="POST">
    	@csrf
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>First Name:</strong>		            
                <input type="text" name="first_name"  id="first_name" class="form-control" placeholder="First Name">
            </div>
         </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Last Name:</strong>		            
                <input type="text" name="last_name"  id="last_name" class="form-control" placeholder="Last Name">
            </div>
         </div>

		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Email:</strong>
                    <input type="email" name="email"  id="email" class="form-control" placeholder="Employee Email">
		        </div>
		    </div> 

            <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Phone:</strong>
                    <input type="number" name="phone"  id="phone" class="form-control" placeholder="Enter Employee Number">
		        </div>
		    </div> 

            <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
            <label for="company_name" ><h6>Company:</h6></label>
                
               <select class="form-select" id="basicSelect" name="company_name" class="form-control" 
               onchange="if($(this).val()=='customOption')
                    {$(this).hide().prop('disabled',true);
                    $('input[name=company_name]').show().prop('disabled', false).focus();$(this).val(null);}">
                  <option value="">--Select Name--</option>
                  @foreach($companies as $company)
                  <option  value="{{$company->company_name}}">{{$company->company_name}}</option>
                  @endforeach
                  <option value="customOption" >others</option>
                  <input name="company_name"   class="form-control" style="display:none;" disabled="disabled" 
                     onblur="if($(this).val()==''){$(this).hide().prop('disabled',true);
                  $('select[name=company_name]').show().prop('disabled', false).focus();}">
               </select>
            </div>

		    <div class="col-xs-12 col-sm-12 col-md-12 mt-2" align="right">
		            <button type="submit" class="btn btn-primary">Submit</button>
		    </div>

		</div>
    </form>
</div>
@endsection