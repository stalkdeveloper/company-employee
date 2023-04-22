<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-light navbar-light">
        <a href="#" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>Menu</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="{{asset('admin/img/user.jpg')}}" alt="" style="width: 40px; height: 40px;">
                <div class="bg-success rounded-circle border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">{{ Auth::user()->name }}</h6>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="{{ route('dashboard') }}" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Manage Users</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{ route('users.index') }}" class="dropdown-item">Manage Users</a>
                    <a href="{{ route('roles.index') }}" class="dropdown-item">Manage Roles</a>
                </div>
            </div>

            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>CE Manage</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{ route('company.index') }}" class="dropdown-item">Company Manage</a>
                    <a href="{{ route('employee.index') }}" class="dropdown-item">Employee Manage</a>
                </div>
            </div>
        </div>
    </nav>
</div>