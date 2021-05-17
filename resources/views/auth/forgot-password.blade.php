@extends('layouts.master')
@section('title') Login @endsection
@section('content')
    <div class="page-content--bge5">
        <div class="login-wrap">
            <div class="login-content">
                <div class="login-logo">
                    <a href="#">
                        <img src="{{ asset('assets/images/icon/logo.png') }}" alt="CoolAdmin">
                    </a>
                </div>
                <div class="login-form">
                    @if (session('status'))
                        <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                            <span class="badge badge-pill badge-success">Success</span>
                            {{ session('status') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                    @endif
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
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="form-group">
                            <label>Email Address</label>
                            <input class="au-input au-input--full" type="email" name="email" placeholder="Email">
                        </div>
                        <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">{{ __('Email Password Reset Link') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection



