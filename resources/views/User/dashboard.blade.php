@extends('User.layouts.master')
@section('title')
    User Dashboard
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2>Welcome to West Mercia Women's Aid</h2>
            <p>Here you will get your new notifications.</p>
            <div class="alert alert-crm alert-dismissible fade show p-5 mt-5" role="alert">
                <h3>Notifications box</h3>
                @forelse (Auth::user()->unreadNotifications as $item)
                    @if ($item->type == 'App\Notifications\PractitionerUpdatedUserDetails' || $item->type == 'App\Notifications\ServiceUserDetailsUpdated')
                        <p><a href="{{ route('serviceuser.accountdetails') }}"> <i class="bi bi-person-check"
                                    style="font-size: 2rem;color: #6e659e;"></i> {{ $item->data['message'] }}</a> </p>
                    @elseif($item->type == 'App\Notifications\WorkbookSent')

                        <p><a href="{{ route('serviceuser.myworkbook') }}"> <i class="bi bi-journal-plus"
                                    style="font-size: 2rem;color: #6e659e;"></i> {{ $item->data['message'] }}</a> </p>
                    @endif

                    <a href="{{ route('user.markasread') }}" class="btn-close"></a>

                @empty

                    <p><i class="bi bi-bell" style="font-size: 2rem;color: #6e659e;"></i> No Notification found.</p>
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
