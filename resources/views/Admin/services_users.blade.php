@extends('Admin.layouts.master')
@section('title')
    Accounts Service users
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2>Accounts <small>Service Users</small></h2>
            <p>Total Accounts ({{ $serviceuserscount }})</p>

            <a class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addnew">Add new service user</a>

            <table class="table table-striped table-hover mt-3">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email address</th>
                        <th scope="col">Category</th>
                        <th scope="col">Associated Practitioner</th>
                        <th scope="col">Workbooks</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($serviceusers as $item)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->category }}</td>
                            <td>{{ !empty($item->practitioner) ? $item->practitioner->name : 'N/A' }}</td>
                            <td>
                                {{-- @if ($item->shareworkbook->status=='completed') --}}
                                    <a class="btn btn-primary"
                                        href="#">View</a>

                                {{-- @endif --}}
                                <a class="btn btn-primary" onclick='sendworkbook(event.target)' data-bs-toggle="modal"
                                    data-sendid="{{ $item->id }}" data-sendemail="{{ $item->email }}"
                                    data-userid="{{ $item->id }}" data-bs-target="#send">Send
                                </a>

                            </td>
                            <td><a class="btn btn-secondary mr-1" data-bs-toggle="modal" data-id="{{ $item->id }}"
                                    onclick='editServiceUserDetail(event.target)' data-bs-target="#edit">Edit</a><a
                                    class="btn btn-danger" data-bs-toggle="modal"
                                    onclick='getPractitionerDetail(event.target)' data-serviceuserid="{{ $item->id }}"
                                    data-bs-target="#deletemodal">Delete</a></td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" style="text-align: center;font-weight:bold">No data found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <!-- ADD NEW MODAL -->
    <div class="modal fade" id="addnew" tabindex="-1" aria-labelledby="addnewLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="addnewLabel">Add new service user</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="form_serviceuser">
                    <div class="modal-body">
                        <div class="alert alert-danger print-error-msg" style="display:none">
                            <ul></ul>
                        </div>
                        <div class="spinner">
                            <div class="bounce1"></div>
                            <div class="bounce2"></div>
                            <div class="bounce3"></div>
                        </div>
                        <p>Add a new service user by filling out the form below. An email will automatically be sent to them
                            inviting them to join the WMWA system.</p>

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="serviceuser_name" id="serviceuser_name"
                                placeholder="Enter Name" required>
                            <label for="serviceuser_name">Enter Name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" name="serviceuser_email"
                                onkeyup="duplicateEmail(this)" id="serviceuser_email" placeholder="name@example.com"
                                required>
                            <label for="serviceuser_email">Enter Email Address</label>
                            <span class="text-danger mb-4 email-error" id="addserviceuser_error"
                                style="font-size: small;"></span>
                        </div>
                        <div class="form-floating mb-3">
                            <select class="form-select" name="serviceuser_category" id="serviceuser_category"
                                aria-label="Service User Category" required>
                                <option value="">Category</option>
                                <option value="Woman">Woman</option>
                                <option value="Man">Man</option>
                                <option value="Youth/Child">Youth/Child</option>
                                <option value="Survivor/Ambassador">Survivor/Ambassador</option>
                            </select>
                            <label for="serviceuser_category">Select Category</label>
                        </div>
                        <div class="form-floating mb-3">
                            <select class="form-select" name="serviceuser_practitioner" id="serviceuser_practitioner"
                                aria-label="Associated Practitioner" required>
                                <option value="">Assign Practitioner</option>
                                @forelse ($practitioners as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @empty
                                    <option value="">No result found.</option>
                                @endforelse
                            </select>
                            <label for="serviceuser_practitioner">Select Practitioner</label>
                        </div>
                        <p><mark>Do you want an email notification sent to the service user? If so we need content for
                                this.</mark></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancel</button>
                        <button id="addserviceuser" type="button" class="btn btn-success">Add service user</button>
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
                    <h4 class="modal-title" id="editLabel">Edit Service User</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="alert alert-danger print-error-msg" style="display:none">
                        <ul></ul>
                    </div>
                    <div class="spinner">
                        <div class="bounce1"></div>
                        <div class="bounce2"></div>
                        <div class="bounce3"></div>
                    </div>
                    <p>If you need to edit a service user's details please update the form below and press update.</p>
                    <form>
                        <input type="hidden" name="editserviceuser_id" id="editserviceuser_id">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="editserviceuser_name" placeholder="Enter Name"
                                value="Name Surname">
                            <label for="editserviceuser_name">Enter Name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="editserviceuser_email"
                                placeholder="name@example.com" onkeyup="duplicateServiceUserEmail(this)" value="">
                            <label for="editserviceuser_email">Enter Email Address</label>
                            <span class="text-danger mb-4 email-error" id="editserviceuser_error"
                                style="font-size: small;"></span>
                        </div>
                        <div class="form-floating mb-3">
                            <select class="form-select" id="editserviceuser_category" aria-label="Service User Category">
                                <option value="">Category</option>
                                <option value="Woman" selected>Woman</option>
                                <option value="Man">Man</option>
                                <option value="Youth/Child">Youth/Child</option>
                                <option value="Survivor/Ambassador">Survivor/Ambassador</option>
                            </select>
                            <label for="editserviceuser_category">Select Category</label>
                        </div>
                        <div class="form-floating mb-3">
                            <select class="form-select" id="editserviceuser_practitioner"
                                aria-label="Associated Practitioner">
                                <option value="">Assign Practitioner</option>
                                @forelse ($practitioners as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @empty
                                    <option value="">No result found.</option>
                                @endforelse
                            </select>
                            <label for="editserviceuser_practitioner">Select Practitioner</label>
                        </div>
                    </form>
                    <p><mark>Do you want an email notification sent to the service user if admin update their details? If so
                            we need content for this.</mark></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-success" onclick="updateServiceUserDetail()"
                        id="updateserviceuser">Update service user</button>
                </div>
            </div>
        </div>
    </div>

    <!-- DELETE MODAL -->
    <div class="modal fade" id="deletemodal" tabindex="-1" aria-labelledby="deleteLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="deleteLabel">Delete Service User</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="get">
                    <div class="modal-body">
                        <div class="alert alert-danger print-error-msg" style="display:none">
                            <ul></ul>
                        </div>
                        <div class="spinner">
                            <div class="bounce1"></div>
                            <div class="bounce2"></div>
                            <div class="bounce3"></div>
                        </div>
                        <p>WARNING you are about to delete this service user.</p>
                        <input type="hidden" name="getserviceuser_id" id="getserviceuser_id">
                        <fieldset disabled>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="getserviceuser_name" placeholder="Enter Name"
                                    value="Name Surname">
                                <label for="getserviceuser_name">Enter Name</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="getserviceuser_email"
                                    placeholder="name@example.com" value="name@website.com">
                                <label for="getserviceuser_email">Enter Email Address</label>
                            </div>
                            <div class="form-floating mb-3">
                                <select class="form-select" id="getserviceuser_category"
                                    aria-label="Service User Category">
                                    <option value="">Category</option>
                                    <option value="Woman" selected>Woman</option>
                                    <option value="Man">Man</option>
                                    <option value="Youth/Child">Youth/Child</option>
                                    <option value="Survivor/Ambassador">Survivor/Ambassador</option>
                                </select>
                                <label for="getserviceuser_category">Select Category</label>
                            </div>
                            <div class="form-floating mb-3">
                                <select class="form-select" id="getserviceuser_practitioner"
                                    aria-label="Associated Practitioner">

                                    @forelse ($practitioners as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @empty
                                        <option value="">No result found.</option>
                                    @endforelse
                                </select>
                                <label for="getserviceuser_practitioner">Select Practitioner</label>
                            </div>
                        </fieldset>

                        <p><mark>Do you want an email notification sent to the serivce user if they get removed? If so we
                                need
                                content for this.</mark></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Go Back</button>
                        <button type="button" class="btn btn-danger deleteserviceuser">Delete Service User</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- SEND MODAL -->
    <div class="modal fade" id="send" tabindex="-1" aria-labelledby="sendLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="sendLabel">Send Workbook Topic</h4><br>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="sendform">
                    <div class="modal-body">
                        <p>Sending workbook to: <strong> <span id="sendserviceuser_email"></span></strong></p>

                        @csrf
                        <div class="alert alert-danger print-error-msg" style="display:none">
                            <ul></ul>
                        </div>
                        <div class="spinner">
                            <div class="bounce1"></div>
                            <div class="bounce2"></div>
                            <div class="bounce3"></div>
                        </div>
                        <input type="hidden" name="workbook_id" value="1">
                        <input type="hidden" name="sendserviceuser_id" id="sendserviceuser_id">
                        <div class="form-floating mb-3">
                            <select class="form-select" id="send_workbook" aria-label="Workbook">
                                <option value="1" selected>Youth Workbook</option>
                            </select>
                            <label for="send_workbook">Please Select workbook</label>
                        </div>
                        <div class="chapters mb-3">
                            @foreach ($topic as $item)
                                <div class="form-check">
                                    <input class="form-check-input check" type="checkbox" name="check[]"
                                        value="{{ $item->id }}" id="check{{ $item->id }}">
                                    <label class="form-check-label" for="check{{ $item->id }}">
                                        {{ $item->topic_title }}
                                    </label>
                                </div>
                            @endforeach

                        </div>
                        <p><mark>The chapters will automatically update based on the workbook selected.</mark></p>
                        <div class="form-floating mb-3">
                            <textarea class="form-control" placeholder="Leave a comment here" name="practitionernotes"
                                id="practnotes" style="height: 200px"></textarea>
                            <label for="floatingTextarea2">Your Message</label>
                        </div>

                        <p><mark>Do you want an email notification sent to the service user? If so we need content for
                                this.</mark></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-success" onclick="shareWorkbook()">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
@section('extrajs')
    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            // Add Practitioner
            $('#addserviceuser').click(function() {
                var form = $("#form_serviceuser");
                form.validate({
                    rules: {
                        serviceuser_category: {

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
                        url: "{{ route('serviceuser.store') }}",
                        method: "POST",

                        data: form.serialize(),
                        dataType: 'JSON',
                        beforeSend: function() {
                            $('.spinner').show()
                        },
                        success: function(data) {
                            if ($.isEmptyObject(data.error)) {
                                $('#addnew').modal('hide');
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Service User added',
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
        // Duplicate Email Checker
        function duplicateEmail(element) {
            var email = $(element).val();
            $.ajax({
                type: "POST",
                url: "{{ route('serviceuser.checkEmail') }}",
                data: {
                    email: email
                },
                dataType: "json",
                success: function(res) {
                    if (res.exists) {

                        $('#addserviceuser_error')
                            .css('color', 'red')
                            .html("This Email already exists!");
                        $('#addserviceuser_error')
                            .prop('hidden', false);
                        $('#addserviceuser').prop('disabled', true);

                    } else {
                        // $('#email-error')
                        //     .css('display', 'none')
                        $('#addserviceuser_error')
                            .prop('hidden', true);
                        $('#addserviceuser').prop('disabled', false);;

                    }
                },
                error: function(jqXHR, exception) {

                }
            });
        }
    </script>
    <script>
        // Duplicate Email Checker
        function duplicateServiceUserEmail(element) {
            var email = $(element).val();
            $.ajax({
                type: "POST",
                url: "{{ route('serviceuser.checkEmail') }}",
                data: {
                    email: email
                },
                dataType: "json",
                success: function(res) {
                    if (res.exists) {

                        $('#editserviceuser_error')
                            .css('color', 'red')
                            .html("This Email already exists!");
                        $('#editserviceuser_error')
                            .prop('hidden', false);
                        $('#updateserviceuser').prop('disabled', true);

                    } else {
                        $('#editserviceuser_error')
                            .prop('hidden', true);
                        $('#updateserviceuser').prop('disabled', false);;

                    }
                },
                error: function(jqXHR, exception) {

                }
            });
        }

        // Edit ServiceUser Details
        function editServiceUserDetail(e) {
            var id = $(e).data("id");
            var url = '{{ route('serviceuser.edit', ':id') }}';
            url = url.replace(':id', id);
            $.get(url, function(data) {

                $('#editserviceuser_name').val(data.name);

                $('#editserviceuser_email').val(data.email);

                $('#editserviceuser_category').val(data.category);

                $('#editserviceuser_practitioner').val(data.practitioner_id);

                $('#edit').modal('show');
                $('#edit').on('hidden.bs.modal', function() {
                    location.reload();
                });
            })
            $("#editserviceuser_id").val(id);

            $('#edit').modal('show');
        }

        // update ServiceUser 
        function updateServiceUserDetail() {

            var id = $('#editserviceuser_id').val();
            var editserviceuser_name = $('#editserviceuser_name').val();
            var editserviceuser_category = $('#editserviceuser_category').val();
            var editserviceuser_email = $('#editserviceuser_email').val();
            var editserviceuser_practitioner = $('#editserviceuser_practitioner').val();
            var url = '{{ route('serviceuser.update', ':id') }}';
            url = url.replace(':id', id);
            let _token = $('meta[name="csrf-token"]').attr('content');

            $.ajax({
                url: url,
                type: "post",
                data: {
                    editserviceuser_name: editserviceuser_name,
                    editserviceuser_category: editserviceuser_category,
                    editserviceuser_email: editserviceuser_email,
                    editserviceuser_practitioner: editserviceuser_practitioner,
                    _token: _token
                },
                beforeSend: function() {
                    $('.spinner').show()
                },
                success: function(data) {
                    if ($.isEmptyObject(data.error)) {
                        $('#edit').modal('hide');

                        Swal.fire({
                            icon: 'success',
                            title: 'ServiceUser details updated',
                            showConfirmButton: true,
                            timer: 2800
                        }).then((result) => {
                            // Reload the Page
                            location.reload();
                        });
                    }
                    // location.reload();
                },
                afterSend: function() {
                    $('.spinner').hide()
                },
                error: function(response) {
                    $('#statusError').text(response.responseJSON.errors);
                }
            });
        }
    </script>
    <script>
        // Delete ServiceUser Details
        function getPractitionerDetail(e) {
            var id = $(e).data("serviceuserid");
            var url = '{{ route('serviceuser.edit', ':id') }}';
            url = url.replace(':id', id);
            $.get(url, function(data) {

                $('#getserviceuser_name').val(data.name);

                $('#getserviceuser_email').val(data.email);

                $('#getserviceuser_category').val(data.category);

                $('#delete').modal('show');
                $('#delete').on('hidden.bs.modal', function() {
                    location.reload();
                });
            })
            $("#getserviceuser_id").val(id);

            $('#delete').modal('show');
        }
    </script>
    <script>
        function sendworkbook(e) {
            var id = $(e).data("sendid");
            var email = $(e).data("sendemail");
            $("#sendserviceuser_id").val(id);
            $("#sendserviceuser_email").html(email);
            $('#send').modal('show');
        }
    </script>
    <script>
        function shareWorkbook() {
            // var form = $("#sendform");
            // $("#sendform").validate();
            // if (form.valid() == true) {
            var serviceuser_id = $('#sendserviceuser_id').val();
            var send_workbook = $('#send_workbook').val();
            var workbook_topic = $('#workbook_topic').val();
            var url = '{{ route('serviceuser.workbook') }}';
            let _token = $('meta[name="csrf-token"]').attr('content');
            var chekedValue = [];
            $('.check:checked').each(function() {
                chekedValue.push($(this).val());
            })
            var notes = $('#practnotes').val();

            $.ajax({
                url: url,
                type: "post",
                data: {
                    sendserviceuser_id: serviceuser_id,
                    send_workbook: send_workbook,
                    workbook_topic: workbook_topic,
                    check: chekedValue,
                    practitionernotes: notes,
                    _token: _token
                },
                beforeSend: function() {
                    $('.spinner').show()
                },
                success: function(data) {
                    $('#send').modal('hide');
                    if (data.success) {
                        tata.success('Success', data.success, {
                            // onClose: location.reload()
                        })
                    } else if (data.error) {
                        tata.error('Error', data.error, {
                            // onClose: location.reload()
                        })
                    }
                },
                complete: function() {
                    $('.spinner').hide();
                },
                error: function(response) {
                    $('#statusError').text(response.responseJSON.errors);
                }
            });

        }

        
        $(".deleteserviceuser").click(function(e) {
            e.preventDefault();

            var id = $("#getserviceuser_id").val();
            // var count = $("#serviceuserscount").val();

          

            // $("#deletemodal").modal("hide");
            // Swal.fire({
            //     title: "Are you sure?",
            //     text: "Once deleted, you will not be able to recover",
            //     icon: "warning",
            //     showCancelButton: true,



            //     confirmButtonText: "Yes, delete it!",
            // }).then((result) => {
            //     if (result.value) {
                    $.ajax({
                        type: "GET",
                        url: '{{ route('serviceuser.delete') }}',
                        data: {
                            id: id
                        },
                        beforeSend: function() {
                    $('.spinner').show()
                },
                        success: function(data) {
                            $("#deletemodal").modal("hide");
                            if ($.isEmptyObject(data.error)) {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Service User Deleted successfully',
                                    showConfirmButton: true,
                                    timer: 2500
                                }).then((result) => {
                                    // Reload the Page
                                    location.reload();
                                });
                            }
                        },
                        afterSend: function() {
                    $('.spinner').hide()
                },
                    });

            //     }
            // });


        });
    </script>
@endsection
