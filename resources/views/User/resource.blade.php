@extends('User.layouts.master')
@section('title')
    Resources
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2>My Resources</h2>
            <p>Below are your downloadable resources, links and videos.</p>



            <div class="work-book mt-5">
                <h3 class="pb-0">Downloads</h3>
                <div class="list-group mb-4">
                    @forelse ($resources_file as $list)

                        <a href="{{route('resource.download',['id'=>$list->id])}}" class="list-group-item list-group-item-action  justify-content-between align-items-start">
                            <i class="bi-download float-start"></i>
                            <div class="ms-5 me-auto">
                                <div class="fw-bold">Category: {{ $list->resource_category }}</div>
                                {{ $list->resource_file }}
                            </div>
                        </a>
                    @empty
                        <a class="list-group-item list-group-item-action  justify-content-between align-items-start">
                            <i class="bi-download float-start"></i>
                            
                            <div class="ms-5 me-auto">
                                <div class="fw-bold">No Data found.</div>
                                
                            </div>
                        </a>
                    @endforelse
                </div>
                <h3 class="pb-0">Useful Links</h3>
                <div class="list-group mb-4">
                    @forelse ($resources_url as $list)
                        <a class="list-group-item list-group-item-action  justify-content-between align-items-start" href="{{$list->resource_link}}" target="_blank">
                            <i class="bi-link-45deg float-start"></i>
                            <div class="ms-5 me-auto">
                                <div class="fw-bold">Category: {{ $list->resource_category }}</div>
                                {{ $list->resource_link }}
                            </div>
                        </a>
                    @empty
                        <a class="list-group-item list-group-item-action  justify-content-between align-items-start">
                            <i class="bi-link-45deg float-start"></i>
                            
                            <div class="ms-5 me-auto">
                                <div class="fw-bold">No Data found.</div>
                                
                            </div>
                        </a>
                    @endforelse

                </div>
                <h3 class="pb-0">Videos</h3>
                <div class="list-group mb-4">
                    @forelse ($resources_video as $list)
                        <a class="list-group-item list-group-item-action  justify-content-between align-items-start" href="{{$list->resource_video}}" target="_blank">
                            <i class="bi-play-btn float-start"></i>
                            <div class="ms-5 me-auto">
                                <div class="fw-bold">Category: {{ $list->resource_category }}</div>
                                {{ $list->resource_video }}
                            </div>
                        </a>
                    @empty
                        <a data-bs-toggle="modal" data-bs-target="#send"
                            class="list-group-item list-group-item-action  justify-content-between align-items-start">
                            <i class="bi-play-btn float-start"></i>
                            <div class="ms-5 me-auto">
                                <div class="fw-bold"> No Data found.</div>
                                
                            </div>
                        </a>

                    @endforelse
                </div>
            </div>
        </div>
    </div>
@endsection
