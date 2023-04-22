{{-- @extends('auth.layouts.app')
@section('content')
<div class="container-fluid">
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
            <div class="col-12 col-sm-8 col-md-6">
                <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <a href="#" class="">
                        <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>CE Record</h3>
                    </a>
                    <h3>Register</h3>
                </div>

                <div class="form-floating mb-3">
                    <input id="name" type="text" class="form-control form-control-user @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Name" autofocus>
                    <label for="floatingText">Name</label>
                    @error('name')
                            <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                            </span>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input id="email" type="email" class="form-control form-control-user @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter Email Address.">
                    <label for="floatingInput">Email address</label>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>

                <div class="form-floating mb-4">
                    <input id="password" type="password" class="form-control form-control-user @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-floating mb-4">
                    <input id="password-confirm" type="password" class="form-control form-control-user" name="password_confirmation" required autocomplete="new-password" placeholder="confirm password">
                    <label for="floatingPassword">Confirm Password</label>
                </div>

                <div class="d-flex align-items-center justify-content-between mb-4">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <a href="{{ route('password.request') }}">Forgot Password</a>
                </div>
                <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Register</button>
                <p class="text-center mb-0">Already have an Account? <a href="{{ route('login') }}">Sign In</a></p>
            </div>
        </div>
    </div>
    </form>
</div>
@endsection --}}