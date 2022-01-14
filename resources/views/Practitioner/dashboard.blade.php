@extends('Practitioner.layouts.master')
@section('title')
    Practitioner Dashboard
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2>Welcome to West Mercia Women's Aid Practitioner Portal</h2>
            <p>Here you will get your new notifications.</p>
            <div class="alert alert-crm alert-dismissible fade show p-5 mt-5" role="alert">
                <h3>Notifications box</h3>
                @forelse (Auth::user()->unreadNotifications as $item)

                    <p> <a href="{{route('practitioner.accountdetails')}}"> <i class="bi bi-person-check" style="font-size: 2rem;color: #6e659e;" ></i>{{ $item->data['message'] }}</a></p>

                    <a href="{{ route('practitioner.markasread') }}" class="btn-close"></a>

                @empty

                    <p><i class="bi bi-bell" style="font-size: 2rem;color: #6e659e;"></i> <a href="">No Notification found.</a>  </p>

                    {{-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> --}}

                @endforelse
            </div>
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
