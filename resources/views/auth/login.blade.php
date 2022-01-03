@extends('layouts.master')
@section('title') Login @endsection
@section('content')
    <form id="login-form" method="POST" action="{{ route('login') }}">
        @if (session('status'))
            <div class="alert alert-success alert-dismissible fade show">
                <span class="badge rounded-pill bg-success">Success</span>
                {{ session('status') }}
                {{-- <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button> --}}
            </div>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <span class="badge rounded-pill bg-danger">Error</span>
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
                {{-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> --}}
            </div>
        @endif
        @csrf
        <h2>West Mercia Women's Aid User Login</h2>
        <p class="mb-3">Please enter your email address and password</p>
        <div class="form-floating mb-3">
            <input type="email" class="form-control " id="email" placeholder="name@example.com" name="email" value="{{old('email')}}" autofocus>
            <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating mb-3">
            <input type="password" class="form-control  " id="password" placeholder="Password" name="password">
            <label for="floatingPassword">Password</label>
        </div>

        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me" name="remember"> Remember me
            </label>
        </div>
        <button class="mb-1 w-100 btn btn-primary" type="submit">Login</button>
        {{-- @if (Route::has('password.request')) --}}
            <p class="mb-3 text-muted float-start"><a href="{{ route('password.request') }}">Forgotten your password?</a>
            </p>
        {{-- @endif --}}
        {{-- <p class="mb-3 text-muted float-end">No account? <a href="{{ route("register") }}">Regsiter Here.</a></p> --}}
    </form>
@endsection
