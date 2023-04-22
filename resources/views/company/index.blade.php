@extends('layouts.master')
@section('content')

<style>
    body > div > div.content > div.container > nav > div.hidden.sm\:flex-1.sm\:flex.sm\:items-center.sm\:justify-between
    {
        display:none;
    }
</style>

<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Company</h2>
            </div>

            <div class="pull-right">
                
                @can('company-create')
                <a class="btn btn-success" href="{{ route('company.create') }}"> Create New Company</a>
                @endcan
            </div>
        </div>
    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


    <table class="table table-bordered mt-2">
        <tr>
            <th>Id</th>
            <th>Company Name</th>
            <th>Email</th>
            <th >Logo</th>
            <th>Website</th>
            <th width="280px">Action</th>
        </tr>

	    @foreach ($data as $item)
	    <tr>
	        <td>{{$item->id }}</td>
	        <td>{{ $item->company_name }}</td>
            <td>{{ $item->email }}</td>
            <td><img src="{{asset('uploads/logo/'.$item->image) }}" width="100px" height="100px" alt="Logo"></td>
            <td>{{ $item->website }}</td>
	        <td> 
                
                <form action="{{ route('company.destroy',$item->id) }}" method="POST">
                <a class="btn btn-info" href="{{ route('company.show',$item->id) }}">Show</a>
                @can('company-edit')
                <a class="btn btn-primary" href="{{ route('company.edit',$item->id) }}">Edit</a>
                @endcan 

                
                @csrf
                @method('DELETE')
                @can('company-delete')
                <button  class="btn btn-danger">Delete</button>
                @endcan
                </form>
	        </td>
	    </tr>
	    @endforeach
    </table>

    {{$data->links()}}
</div>

@endsection