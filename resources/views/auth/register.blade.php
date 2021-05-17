@extends('layouts.master')
@section('title') Register @endsection

@section('content')
    <div class="login-wrap">
        <div class="login-content">
            <div class="login-logo">
                <a href="#">
                    <img src="{{ asset('assets/images/icon/logo.png') }}" alt="CoolAdmin">
                </a>
            </div>
            <div class="login-form">
                @if ($errors->any())
                    <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
                        <span class="badge badge-pill badge-danger">Error</span>
                        @foreach ($errors->all() as $error)
                            <p>{{ $error }}</p>

                        @endforeach
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                @endif
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-group">
                        <label>Name</label>
                        <input class="au-input au-input--full" type="text" name="name" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <label>Email Address</label>
                        <input class="au-input au-input--full" type="email" name="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label>Password Confirmation</label>
                        <input class="au-input au-input--full" type="password" name="password_confirmation"
                            placeholder="Password Confirmation">
                    </div>
                    <div class="form-group">
                        <label>Register as</label>
                        <select name="role_id" id="select" class="au-input au-input--full form-control-lg"
                            style="width: 50%"
                            onchange="if (this.value=='user'){this.form['category'].style.visibility='visible'}else {this.form['category'].style.visibility='hidden'};">
                            <option value="practitioner">Practitioner</option>
                            <option value="user">User</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input class="au-input au-input--full" type="text" name="category" style="visibility:hidden;"
                            placeholder="Enter Category">
                    </div>

                    <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">register</button>

                </form>
                <div class="register-link">
                    <p>
                        Already have account?
                        <a href="{{ route('login') }}">Sign In</a>
                    </p>
                </div>
            </div>

        </div>
    </div>
@endsection
