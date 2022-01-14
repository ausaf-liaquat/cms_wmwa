@extends('Admin.layouts.master')
@section('title')
    Accounts Service users
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2>Resources <small>View All</small></h2>
            <p>Total Resources ({{ $resources->count() }})</p>

            <a class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addnew">Add new resources</a>

            <table class="table table-striped table-hover mt-3">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">File Name/Link</th>
                        <th scope="col">Resource Title</th>
                        <th scope="col">Resource Type</th>
                        <th scope="col">Category</th>
                        <th scope="col">View</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($resources as $item)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>
                                @if ($item->resource_type == 'file')
                                    {{ $item->resource_file }}
                                @elseif ($item->resource_type == 'url')
                                    {{ $item->resource_link }}
                                @else
                                    {{ $item->resource_video }}
                                @endif
                            </td>
                            <td>{{ $item->resource_title }}</td>
                            <td>{{ $item->resource_type }}</td>
                            <td>{{ $item->resource_category }}</td>
                            <td>
                                @if ($item->resource_type == 'file')
                                <a class="btn btn-primary" href="{{route('resource.download',['id'=>$item->id])}}">View</a>
                                @elseif ($item->resource_type == 'url')
                                <a class="btn btn-primary" href="{{$item->resource_link}}" target="_blank">View</a>
                                @else
                                <a class="btn btn-primary" href="{{$item->resource_video}}" target="_blank">View</a>
                                    
                                @endif
                               
                            </td>
                            <td><a class="btn btn-secondary mr-1" data-bs-toggle="modal" data-id="{{ $item->id }}"
                                    onclick='editResourceDetail(event.target)' data-bs-target="#edit" style="margin-right: 3px;">Edit</a><a
                                    class="btn btn-danger" data-bs-toggle="modal" onclick='getResourceDetail(event.target)'
                                    data-delid="{{ $item->id }}" data-bs-target="#delete">Delete</a></td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" style="text-align: center">No data found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

            <p><mark>View button will open resource in new tab or trigger download if downloadable file.</mark></p>
        </div>
    </div>

    <!-- ADD NEW MODAL -->
    <div class="modal fade" id="addnew" tabindex="-1" aria-labelledby="addnewLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="addnewLabel">Add new resource</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="addresources" enctype="multipart/form-data">
                    <div class="modal-body">
                        <p>Add a new resource by filling out the form below.</p>
                        <div class="spinner">
                            <div class="bounce1"></div>
                            <div class="bounce2"></div>
                            <div class="bounce3"></div>
                        </div>

                        @csrf
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="resource_title" id="resource_title"
                                placeholder="Enter Resource Title" required>
                            <label for="resource_title">Enter Resource Title</label>
                        </div>
                        <div class="form-floating mb-3">
                            <select class="form-select" name="resource_type" onChange="check(this);" id="resource_type"
                                aria-label="Resource Type" required>
                                <option value="">Select Resource Type</option>
                                <option value="file">File Download</option>
                                <option value="url">Link</option>
                                <option value="link">Video</option>
                            </select>
                            <label for="resource_type">Resource Types</label>
                        </div>
                        <div class="form-floating mb-3">
                            <select class="form-select" name="serviceuser_category" id="serviceuser_category"
                                aria-label="Service User Category" required>
                                <option value="">Select Resource Category</option>
                                <option value="Woman">Woman</option>
                                <option value="Man">Man</option>
                                <option value="Youth/Child">Youth/Child</option>
                                <option value="Survivor/Ambassador">Survivor/Ambassador</option>
                            </select>
                            <label for="serviceuser_category">Resource Categories</label>
                        </div>
                        <div class="input-group mb-3">
                            <input type="file" class="form-control resource_file" name="resource_file" id="resource_file"
                                aria-describedby="inputGroupFileAddon04" aria-label="Upload" hidden required>

                        </div>
                        <div class="form-floating mb-3">
                            <input type="url" class="form-control resource_url" name="resource_url" id="resource_url"
                                placeholder="Paste file URL here" hidden required>
                            <label for="resource_url" id="labelresource_url" hidden>Paste file URL here</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="url" class="form-control resource_link" name="resource_link" id="resource_link"
                                placeholder="Paste video URL here" hidden required>
                            <label for="resource_link" id="labelresource_link" hidden>Paste video URL here</label>
                        </div>

                        <p><mark>We will make it so only the relevant upload, url or video box appears depending on resource
                                type selected.</mark></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" id="btnaddresource" class="btn btn-success">Add resource</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- EDIT MODAL -->
    <div class="modal fade" id="edit" tabindex="-1" aria-labelledby="editLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="editLabel">Edit Resource</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="editresources" enctype="multipart/form-data">
                    <div class="modal-body">
                        <p>If you need to edit a resource please update the form below and press update.</p>

                        <div class="spinner">
                            <div class="bounce1"></div>
                            <div class="bounce2"></div>
                            <div class="bounce3"></div>
                        </div>

                        @csrf
                        <input type="hidden" name="editresource_id" id="editresource_id">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="editresource_title" id="editresource_title"
                                placeholder="Enter Resource Title" required>
                            <label for="editresource_title">Enter Resource Title</label>
                        </div>
                        <div class="form-floating mb-3">
                            <select class="form-select" name="editresource_type" onChange="editcheck(this);"
                                id="editresource_type" aria-label="Resource Type" required>
                                <option value="">Select Resource Type</option>
                                <option value="file">File Download</option>
                                <option value="url">Link</option>
                                <option value="link">Video</option>
                            </select>
                            <label for="editresource_type">Resource Types</label>
                        </div>
                        <div class="form-floating mb-3">
                            <select class="form-select" name="editserviceuser_category" id="editserviceuser_category"
                                aria-label="Service User Category" required>
                                <option value="">Select Resource Category</option>
                                <option value="Woman">Woman</option>
                                <option value="Man">Man</option>
                                <option value="Youth/Child">Youth/Child</option>
                                <option value="Survivor/Ambassador">Survivor/Ambassador</option>
                            </select>
                            <label for="editserviceuser_category">Resource Categories</label>
                        </div>
                        <div class="input-group mb-1">
                            <input type="file" class="form-control editresource_file" name="editresource_file"
                                id="editresource_file" aria-describedby="inputGroupFileAddon04" aria-label="Upload" hidden>
                        </div>
                        <span id="labeleditresource_file" style="font-weight:bolder" hidden></span>
                        <div class="form-floating mb-3">
                            <input type="url" class="form-control editresource_url" name="editresource_url"
                                id="editresource_url" placeholder="Paste file URL here" hidden required>
                            <label for="editresource_url" id="labeleditresource_url" hidden>Paste file URL here</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="url" class="form-control editresource_link" name="editresource_link"
                                id="editresource_link" placeholder="Paste video URL here" hidden required>
                            <label for="editresource_link" id="labeleditresource_link" hidden>Paste video URL here</label>
                        </div>
                        <p><mark>Again, we will make it so only the relevant upload, url or video box appears depending on
                                resource type.</mark></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-success">Update Resource</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- DELETE MODAL -->
    <div class="modal fade" id="delete" tabindex="-1" aria-labelledby="deleteLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="deleteLabel">Delete Resource</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('resource.delete') }}" method="get">
                    <div class="modal-body">
                        <p>WARNING you are about to delete this resource.</p>
                        <input type="hidden" name="getresource_id" id="getresource_id">
                        <fieldset disabled>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="getresource_title"
                                    placeholder="Enter Resource Title" value="Resource Title">
                                <label for="getresource_title">Enter Resource Title</label>
                            </div>
                            <div class="form-floating mb-3">
                                <select class="form-select" name="resource-type" id="getresource_type"
                                    aria-label="Resource Type">
                                    <option value="">Select Resource Type</option>
                                    <option value="file">File Download</option>
                                    <option value="url">Link</option>
                                    <option value="link">Video</option>
                                </select>
                                <label for="getresource_type">Resource Types</label>
                            </div>
                            <div class="form-floating mb-3">
                                <select class="form-select" id="getserviceuser_category"
                                    aria-label="Service User Category">
                                    <option value="">Select Resource Category</option>
                                    <option value="Woman">Woman</option>
                                    <option value="Man">Man</option>
                                    <option value="Youth/Child">Youth/Child</option>
                                    <option value="Survivor/Ambassador">Survivor/Ambassador</option>
                                </select>
                                <label for="getserviceuser_category">Resource Categories</label>
                            </div>

                        </fieldset>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Go Back</button>
                        <button type="submit" class="btn btn-danger">Delete Resource</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('extrajs')
    <script>
        function check(element) {
            var option = $(element).val();
            if (option == "file") {
                $('#resource_file').prop('hidden', false);


                $('#resource_url').prop('hidden', true)
                $('#labelresource_url').prop('hidden', true);

                $('#labelresource_link').prop('hidden', true);
                $('#resource_link').prop('hidden', true);

                $('#resource_file').prop('disabled', false);
                $('#resource_link').prop('disabled', true);
                $('#resource_url').prop('disabled', true);

                $('.resource_file').prop('required', true);
                $('.resource_url').prop('required', false);
                $('.resource_link').prop('required', false);
            } else if (option == "url") {

                $('#resource_file').prop('hidden', true);

                $('#resource_url').prop('hidden', false);
                $('#labelresource_url').prop('hidden', false);

                $('#resource_link').prop('hidden', true);
                $('#labelresource_link').prop('hidden', true);

                $('#resource_file').prop('disabled', true);
                $('#resource_url').prop('disabled', false);
                $('#resource_link').prop('disabled', true);

                $('.resource_file').prop('required', false);
                $('.resource_url').prop('required', true);
                $('.resource_link').prop('required', false);

            } else {
                $('#resource_file').prop('hidden', true);

                $('#resource_url').prop('hidden', true);
                $('#labelresource_url').prop('hidden', true);

                $('#resource_link').prop('hidden', false);
                $('#labelresource_link').prop('hidden', false);

                $('#resource_file').prop('disabled', true);
                $('#resource_url').prop('disabled', true);
                $('#resource_link').prop('disabled', false);

                $('.resource_file').prop('required', false);
                $('.resource_url').prop('required', false);
                $('.resource_link').prop('required', true);
            }
        }
    </script>
    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            // Add Practitioner
            $('#addresources').on('submit', function(event) {
                event.preventDefault();
                var form = $("#addresources");
                form.validate({
                    rules: {
                        resource_title: {

                            required: true
                        },
                    },
                    highlight: function(element) {
                        $(element).parent().addClass('has-error');
                    },
                    unhighlight: function(element) {
                        $(element).parent().removeClass('has-error');
                    },
                    errorElement: 'span',
                    errorClass: 'invalid-feedback',
                    errorPlacement: function(error, element) {
                        if (element.parent('.input-group').length) {
                            error.insertAfter(element.parent());
                        } else {
                            error.insertAfter(element);
                        }
                    }
                });
                if (form.valid() == true) {

                    $.ajax({
                        url: "{{ route('resource.store') }}",
                        method: "POST",

                        data: new FormData(this),
                        dataType: 'JSON',
                        contentType: false,
                        cache: false,
                        processData: false,

                        beforeSend: function() {
                            $('.spinner').show()
                        },
                        success: function(data) {
                            if ($.isEmptyObject(data.error)) {
                                $('#addnew').modal('hide');
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Resource added',
                                    showConfirmButton: true,
                                    timer: 2500
                                }).then((result) => {
                                    // Reload the Page
                                    location.reload();
                                });
                            } else {
                                printErrorMsg(data.error);
                            }
                        },
                        complete: function() {
                            $('.spinner').hide();
                        },
                    })
                }
            });

            function printErrorMsg(msg) {
                $(".print-error-msg").find("ul").html('');
                $(".print-error-msg").css('display', 'block');
                $.each(msg, function(key, value) {
                    $(".print-error-msg").find("ul").append('<li>' + value + '</li>');
                });
            }


        });
    </script>
    <script>
        function editcheck(element) {
            var option = $(element).val();
            if (option == "file") {
                $('#editresource_file').prop('hidden', false);
                $('#labeleditresource_file').prop('hidden', false);

                $('#editresource_url').prop('hidden', true)
                $('#labeleditresource_url').prop('hidden', true);

                $('#labeleditresource_link').prop('hidden', true);
                $('#editresource_link').prop('hidden', true);

                $('#editresource_file').prop('disabled', false);
                $('#editresource_link').prop('disabled', true);
                $('#editresource_url').prop('disabled', true);


            } else if (option == "url") {

                $('#editresource_file').prop('hidden', true);
                $('#labeleditresource_file').prop('hidden', true);

                $('#editresource_url').prop('hidden', false);
                $('#labeleditresource_url').prop('hidden', false);

                $('#editresource_link').prop('hidden', true);
                $('#labeleditresource_link').prop('hidden', true);

                $('#editresource_file').prop('disabled', true);
                $('#editresource_url').prop('disabled', false);
                $('#editresource_link').prop('disabled', true);



            } else {
                $('#editresource_file').prop('hidden', true);
                $('#labeleditresource_file').prop('hidden', true);

                $('#editresource_url').prop('hidden', true);
                $('#labeleditresource_url').prop('hidden', true);

                $('#editresource_link').prop('hidden', false);
                $('#labeleditresource_link').prop('hidden', false);

                $('#editresource_file').prop('disabled', true);
                $('#editresource_url').prop('disabled', true);
                $('#editresource_link').prop('disabled', false);


            }
        }
        // Edit Resource Details
        function editResourceDetail(e) {
            var id = $(e).data("id");
            var url = '{{ route('resource.edit', ':id') }}';
            url = url.replace(':id', id);
            $.get(url, function(data) {

                $('#editresource_title').val(data.resource_title);

                $('#editresource_type').val(data.resource_type);

                $('#editserviceuser_category').val(data.resource_category);

                $('#labeleditresource_file').html(data.resource_file);

                $('#editresource_url').val(data.resource_link);

                $('#editresource_link').val(data.resource_video);

                if (data.resource_type == "file") {
                    $('#editresource_file').prop('hidden', false);
                    $('#labeleditresource_file').prop('hidden', false);

                    $('#editresource_url').prop('hidden', true)
                    $('#labeleditresource_url').prop('hidden', true);

                    $('#labeleditresource_link').prop('hidden', true);
                    $('#editresource_link').prop('hidden', true);

                    $('#editresource_file').prop('disabled', false);
                    $('#editresource_link').prop('disabled', true);
                    $('#editresource_url').prop('disabled', true);



                } else if (data.resource_type == "url") {
                    $('#editresource_file').prop('hidden', true);
                    $('#labeleditresource_file').prop('hidden', true);

                    $('#editresource_url').prop('hidden', false);
                    $('#labeleditresource_url').prop('hidden', false);

                    $('#editresource_link').prop('hidden', true);
                    $('#labeleditresource_link').prop('hidden', true);

                    $('#editresource_file').prop('disabled', true);
                    $('#editresource_url').prop('disabled', false);
                    $('#editresource_link').prop('disabled', true);

                    $('.editresource_file').prop('required', true);
                    $('.editresource_url').prop('required', false);
                    $('.editresource_link').prop('required', false);
                } else {
                    $('#editresource_file').prop('hidden', true);
                    $('#labeleditresource_file').prop('hidden', true);

                    $('#editresource_url').prop('hidden', true);
                    $('#labeleditresource_url').prop('hidden', true);

                    $('#editresource_link').prop('hidden', false);
                    $('#labeleditresource_link').prop('hidden', false);

                    $('#editresource_file').prop('disabled', true);
                    $('#editresource_url').prop('disabled', true);
                    $('#editresource_link').prop('disabled', false);




                }

                $('#edit').modal('show');
                $('#edit').on('hidden.bs.modal', function() {
                    location.reload();
                });
            })
            $("#editresource_id").val(id);

            $('#edit').modal('show');
        }

        $('#editresources').on('submit', function(event) {
            event.preventDefault();
            var form = $("#editresources");

            $.ajax({
                url: "{{ route('resource.update') }}",
                method: "POST",

                data: new FormData(this),
                dataType: 'JSON',
                contentType: false,
                cache: false,
                processData: false,

                beforeSend: function() {
                    $('.spinner').show()
                },
                success: function(data) {
                    if ($.isEmptyObject(data.error)) {
                        $('#edit').modal('hide');
                        Swal.fire({
                            icon: 'success',
                            title: 'Resource Edited',
                            showConfirmButton: true,
                            timer: 2500
                        }).then((result) => {
                            // Reload the Page
                            location.reload();
                        });
                    } else {
                        printErrorMsg(data.error);
                    }
                },
                complete: function() {
                    $('.spinner').hide();
                },
            })

        });

        function printErrorMsg(msg) {
            $(".print-error-msg").find("ul").html('');
            $(".print-error-msg").css('display', 'block');
            $.each(msg, function(key, value) {
                $(".print-error-msg").find("ul").append('<li>' + value + '</li>');
            });
        }
    </script>
    <script>
        function getResourceDetail(e) {
            var id = $(e).data("delid");
            var url = '{{ route('resource.edit', ':id') }}';
            url = url.replace(':id', id);
            $.get(url, function(data) {

                $('#getresource_title').val(data.resource_title);

                $('#getresource_type').val(data.resource_type);

                $('#getserviceuser_category').val(data.resource_category);


                $('#delete').modal('show');
                $('#delete').on('hidden.bs.modal', function() {
                    location.reload();
                });
            })
            $("#getresource_id").val(id);

            $('#delete').modal('show');
        }
    </script>
@endsection
