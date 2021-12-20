@extends('layouts.master')
@section('title') Register @endsection

@section('content')
    <form id="register-form" method="POST" action="{{ route('register') }}">
        @if ($errors->any())
            <div class="alert with-close alert-danger alert-dismissible fade show">
                <span class="badge rounded-pill bg-danger">Error</span>
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif
        @csrf
        <h2>Register with West Mercia Women's Aid</h2>
        <p class="mb-3">Please enter your details below and we will review your request. You will receive a
            notification
            via email once your account has been activated.</p>
        <div class="form-floating mb-3">
            <input type="text" class="form-control " id="name" placeholder="Enter Your Name" name="name" value="">
            <label for="name">Enter Your Name</label>
        </div>
        <div class="form-floating mb-3">
            <input type="email" class="form-control " id="email" placeholder="Enter Your Email Address" name="email"
                value="">
            <label for="email">Enter Your Email Address</label>
        </div>
        <div class="form-floating mb-3">
            <select class="form-select" name="role_id" id="select" aria-label="Floating label select example">
            <option value="practitioner">Practitioner</option>
            <option value="user">User</option>
            </select>
            <label for="select">Select Role</label>
        </div>

        <p class="mb-0">Please enter your password below.</p>
        <div class="form-floating mb-3">
            <input type="password" class="form-control " id="password1" placeholder="Enter your Password" name="password">
            <label for="password1">Enter your Password</label>
        </div>
        <div class="form-floating mb-4">
            <input type="password" class="form-control " id="password2" placeholder="Confirm Your Password"
                name="password_confirmation">
            <label for="password2">Confirm Your Password</label>
        </div>
        
        
        <div class="checkbox mb-4">
            <label>
                <input name="check" type="checkbox" value="signup"> Please sign me up to receive news and updates.
            </label>
        </div>
        <button class="mb-1 w-100 btn btn-primary" type="submit">Request Access</button>
        <p class="mb-3 text-muted float-start">Already have an account? <a href="{{ route('login') }}">Sign in
                here.</a></p>
    </form>
@endsection
