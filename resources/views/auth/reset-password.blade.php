@extends('layouts.master')
@section('title') Service User Password Reset @endsection
@section('content')
    <form id="login-form" method="POST" action="{{ route('password.update') }}">
        @if (session('status'))
            <div class="alert alert-success alert-dismissible fade show">
                <span class="badge rounded-pill bg-success">Success</span>
                {{ session('status') }}
                {{-- <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button> --}}
            </div>
        @elseif (session('error'))
            <div class="alert alert-danger alert-dismissible fade show">
                <span class="badge rounded-pill bg-danger">Error</span>
                {{ session('error') }}
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
        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">


        <h2>West Mercia Women's Aid Login</h2>
        <p class="mb-3">Please enter new password</p>
        <div class="form-floating mb-3">
            <input type="email" class="form-control " id="email" placeholder="name@example.com" name="email"
                value="{{ old('email', $request->email) }}" readonly>
            <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating mb-3">
            <input type="password" class="form-control  " id="password" placeholder="Password" name="password">
            <label for="floatingPassword">Password</label>
        </div>

        <div class="form-floating mb-3">
            <input type="password" class="form-control  " id="passwordconfirm" placeholder="Password" name="password_confirmation">
            <label for="floatingPassword">Password Confirmation</label>
        </div>

       
        <button class="mb-1 w-100 btn btn-primary" type="submit">Password Setup</button>

       
    </form>
@endsection