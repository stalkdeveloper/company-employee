@extends('auth.layouts.app')
@section('content')
    <!-- Sign In Start -->
    <div class="container-fluid">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6">
                    <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <a href="#" class="">
                            <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>CE Record</h3>
                        </a>
                        <h3>Login In</h3>
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
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <div class="form-check">
                            <input class="custom-control-input" type="checkbox" name="remember" id="customCheck" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <a href="{{ route('password.request') }}">Forgot Password</a>
                    </div>
                    <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Login</button>
                {{-- </form> --}}
                    <p class="text-center mb-0">Don't have an Account? <a href="{{('register')}}">Sign Up</a></p>
                </div>
            </div>
        </div>
    </form>
    </div>
    <!-- Sign In End -->
@endsection