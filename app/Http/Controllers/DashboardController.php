<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Employee;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $employee = Employee::count();
        $users = User::count();
        $company = Company::count();
        $employees = Employee::latest()->paginate(10);
        $companies = Company::latest()->paginate(10);
        return view('dashboard', compact('employee', 'company', 'users', 'companies', 'employees'));
    }
}
