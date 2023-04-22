@extends('layouts.master')
@section('content')

<div class="container">
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Role</h2>
        </div>

        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('roles.index') }}"> Back</a>
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

<form action="{{ route('roles.update', $role->id) }}" method="POST">
    @csrf
        @method('PUT')

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            <input type="text" name="name" class="form-control" placeholder="Name" value="{{$role->name}}">
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Permission:</strong>
            <br>
            @forelse($permission as $value)
                <label for="permission">{{$value->name}}</label>
                    <input type="checkbox" name="permission[]" id="permission"  value="{{$value->id}}">
             @empty
             <p>Edit Permission</p>
            @endforelse
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 mt-2" align="right">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>

</form>
</div>

@endsection