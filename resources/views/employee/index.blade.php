@extends('layouts.master')
@section('content')

<style>
    body > div > div.content > div.container.mt-4 > nav > div.hidden.sm\:flex-1.sm\:flex.sm\:items-center.sm\:justify-between
    {
        display: none;
    }
</style>

<div class="container mt-4">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Company Employee</h2>
            </div>

            <div class="pull-right">
                
                @can('employee-create')
                <a class="btn btn-success" href="{{ route('employee.create') }}"> Create New Employee</a>
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
            <th>First Name</th>
            <th>Last Name</th>
            <th >Email</th>
            <th>Phone</th>
            <th>Company</th>
            <th width="280px">Action</th>
        </tr>

	    @foreach ($data as $item)
	    <tr>
	        <td>{{$item->id }}</td>
	        <td>{{ $item->first_name }}</td>
            <td>{{ $item->last_name }}</td>
            <td>{{ $item->email }}</td>
            <td>{{ $item->phone }}</td>
            <td>{{ $item->company_name }}</td>
	        <td> 
                
                <form action="{{ route('employee.destroy',$item->id) }}" method="POST">
                <a class="btn btn-info" href="{{ route('employee.show',$item->id) }}">Show</a>
                @can('employee-edit')
                <a class="btn btn-primary" href="{{ route('employee.edit',$item->id) }}">Edit</a>
                @endcan 

                
                @csrf
                @method('DELETE')
                @can('employee-delete')
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