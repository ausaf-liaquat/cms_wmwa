@extends('layouts.master')
@section('title') Forget Password @endsection
@section('content')

    <form method="POST" action="{{ route('password.email') }}">
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
        <h2>West Mercia Women's Aid Login</h2>
        <p class="mb-3">Please enter your email address and password</p>
        <div class="form-floating mb-3">
            <input type="email" class="form-control " id="email" placeholder="name@example.com" name="email"
                value="{{ old('email') }}" autofocus>
            <label for="floatingInput">Email address</label>
        </div>

        <button class="mb-1 w-100 btn btn-primary" type="submit">Email Password Reset Link</button>

    </form>


@endsection
