@extends('layouts.master')
@section('content')

<div class="container">
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit New User</h2>
        </div>

        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
        </div>
    </div>
</div>


@if (count($errors) > 0)

  <div class="alert alert-danger">
    <strong>Sorry,</strong> Please fill all the blank.<br><br>
    <ul>
       @foreach ($errors->all() as $error)
         <li>{{ $error }}</li>
       @endforeach
    </ul>
  </div>

@endif

<form action="{{ route('users.update', $user->id) }}" method="POST">
    @csrf
        @method('PUT')

<div class="row">    
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            <input type="text" name="name" id="name"  class="form-control" placeholder="Name" value={{$user->name}}>
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Email:</strong>
            <input type="email" name="email" id="email" class="form-control" placeholder="User Email Update" value={{$user->email}}>
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Password:</strong>
            <input type="password" name="password" id="password" class="form-control" placeholder="Password">
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Confirm Password:</strong>
            <input type="confirm-password" name="confirm-password" id="confirm-password" class="form-control" placeholder="Confirm Password">
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Role:</strong>
            <select class="form-control" name="roles[]">
                <option selected="selected" disabled>Please Select..!!</option>
                     @foreach ($roles as $role)
                           <option value="{{ $role }}">{{ $role}}</option>
                     @endforeach
             </select>
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 mt-2" align="right">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>

</div>

</form>
</div>

@endsection