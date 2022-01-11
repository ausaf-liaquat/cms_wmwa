@extends('User.layouts.master')
@section('title')
    User Dashboard
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2>Welcome to West Mercia Women's Aid</h2>
            <p>Here you will get your new notifications.</p>
            @forelse (Auth::user()->unreadNotifications as $item)
                <div class="alert alert-crm alert-dismissible fade show p-5 mt-5" role="alert">
                    <h3>Notifications box</h3>
                    <p><strong>{{ $item->data['message'] }}</strong> </p>

                    <a  href="{{route('user.markasread',['id'=>$item->id])}}" class="btn-close"></a>
                </div>
            @empty
                <div class="alert alert-crm alert-dismissible fade show p-5 mt-5" role="alert">
                    <h3>Notifications box</h3>
                    <p><strong>No Notification found.</strong> </p>

                    {{-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> --}}
                </div>
            @endforelse

        </div>
    </div>
@endsection
@section('extrajs')
    @if (Session::has('status'))
        <script>
            tata.success('Success', "{{ Session::get('status') }}");
        </script>
    @endif
@endsection