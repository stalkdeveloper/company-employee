@extends('layouts.master')
@section('content')

<style>
    body > div > div.content > div.container.mt-4 > div > div.col-xs-12.col-sm-12.col-md-12 > div:nth-child(1) > div.card-body > nav > div.hidden.sm\:flex-1.sm\:flex.sm\:items-center.sm\:justify-between
    {
        display:none;
    }
    body > div > div.content > div.container.mt-4 > div > div.col-xs-12.col-sm-12.col-md-12 > div.card.mt-4 > div.card-body > nav > div.hidden.sm\:flex-1.sm\:flex.sm\:items-center.sm\:justify-between
    {
        display: none;
    }
</style>

<div class="container mt-4">
    <div class="row">
        <div class="col-sm">
            <div class="card bg-Secondary text-dark mb-4">
                <div class="card-body">
                    Total Company
                    <h2> {{$company}} </h2>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a href="{{ route('company.index') }}" class="small text-black stretched-link"> Company Data.!!</a>
                    <div class="small text-white">
                        <i class="fas fa-angle-right"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm">
            <div class="card bg-Secondary text-dark mb-4">
                <div class="card-body">
                    Total Employee 
                    <h2>{{$employee}}</h2>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a href="{{ route('employee.index') }}" class="small text-black stretched-link">Company Employee Data.!!</a>
                    <div class="small text-white">
                        <i class="fas fa-angle-right"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm">
            <div class="card bg-Secondary text-dark mb-4">
                <div class="card-body">
                    Total Users
                    <h2>{{$users}}</h2>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a href="/" class="small text-black stretched-link">You are the also user.!!</a>
                    <div class="small text-white">
                        <i class="fas fa-angle-right"></i>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="card">
                <div class="card-header">{{ __('All Company Data') }}</div>
                
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>Id</th>    
                            <th>Company Name</th>
                            <th>Email</th>
                            <th>Logo</th>
                            <th>Website</th>
                            <th width="200px">Action</th>
                        </tr>
                
                        @foreach ($companies as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->company_name }}</td>
                            <td>{{ $item->email }}</td>
                            <td><img src="{{asset('uploads/logo/'.$item->image) }}" width="100px" height="100px" alt="Logo"></td>
                            <td>{{ $item->website }}</td>
                            <td>            
                                <a class="btn btn-info" href="{{ route('company.show',$item->id) }}">Show</a>
                                @can('company-edit')
                                <a class="btn btn-primary" href="{{ route('company.edit',$item->id) }}">Edit</a>
                                @endcan 
                                
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    {{$companies->links()}}
                </div>
            </div>

            {{--  --}}
            <hr>
            <div class="card mt-4">
                <div class="card-header">{{ __('All Employee Data') }}</div>
                
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>Id</th>    
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>email</th>
                            <th>Phone</th>
                            <th>Company Name</th>
                            <th width="200px">Action</th>
                        </tr>
                
                        @foreach ($employees as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->first_name }}</td>
                            <td>{{ $item->last_name }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->phone }}</td>
                            <td>{{ $item->company_name }}</td>
                            <td>            
                                <a class="btn btn-info" href="{{ route('employee.show',$item->id) }}">Show</a>
                                @can('employee-edit')
                                <a class="btn btn-primary" href="{{ route('employee.edit',$item->id) }}">Edit</a>
                                @endcan 
                                
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    {{$employees->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
