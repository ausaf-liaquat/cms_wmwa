@extends('Practitioner.layouts.master')
@section('title')
    Resources
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2>My Resources</h2>
            <p>Below are your downloadable resources, click a resource to send to a service user.</p>

            <p><mark>Resources only available dependant on category of user in the accouts > service users tab</mark></p>

            <div class="work-book mt-5">
                <h3 class="pb-0">Downloads</h3>
                <div class="list-group mb-4">
                    @foreach ($resources_file as $list)

                        <a data-bs-toggle="modal" data-bs-target="#send"
                            class="list-group-item list-group-item-action  justify-content-between align-items-start">
                            <i class="bi-download float-start"></i>
                            <div class="ms-5 me-auto">
                                <div class="fw-bold">Category: {{ $list->resource_category }}</div>
                                Resource title tellus ac cursus commodo, tortor mauris condimentum nibh.
                            </div>
                        </a>

                    @endforeach
                </div>
                <h3 class="pb-0">Useful Links</h3>
                <div class="list-group mb-4">
                    @foreach ($resources_url as $list)
                    <a data-bs-toggle="modal" data-bs-target="#send"
                        class="list-group-item list-group-item-action  justify-content-between align-items-start">
                        <i class="bi-link-45deg float-start"></i>
                        <div class="ms-5 me-auto">
                            <div class="fw-bold">Category: {{$list->resource_category}}</div>
                            http://www.google.com
                        </div>
                    </a>
                    @endforeach
                    
                </div>
                <h3 class="pb-0">Videos</h3>
                <div class="list-group mb-4">
                    @foreach ($resources_video as $list)
                    <a data-bs-toggle="modal" data-bs-target="#send"
                        class="list-group-item list-group-item-action  justify-content-between align-items-start">
                        <i class="bi-play-btn float-start"></i>
                        <div class="ms-5 me-auto">
                            <div class="fw-bold">Category: {{$list->resource_category}}</div>
                            Resource title tellus ac cursus commodo, tortor mauris condimentum nibh.
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
