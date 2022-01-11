@extends('Admin.layouts.master')
@section('title')
    Practitioners Account
@endsection
@section('content')

    <div class="row">
        <div class="col-md-12">
            <h2>Accounts <small>Practitioners</small></h2>
            <p>Total ({{ $practitionercount }}) | Active ({{ $practitionercount }}) | Pending Requestions (0)</p>

            <a class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addnew">Add new practitioner</a>

            <table class="table table-striped table-hover mt-3">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email address</th>
                        <th scope="col">Practitioner Role</th>
                        <th scope="col">Status</th>
                        <th scope="col">Associated Service Users</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($practitioners as $item)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->category }}</td>
                            <td>Active</td>
                            <td><a class="btn btn-primary" data-bs-toggle="modal" data-accountid="{{ $item->id }}"
                                    onclick='viewaccounts(event.target)' data-bs-target="#accounts">View
                                    Accounts</a>
                            </td>
                            <td><a class="btn btn-secondary mr-1" data-bs-toggle="modal" data-id="{{ $item->id }}"
                                    onclick='editPractitionerDetail(event.target)' data-bs-target="#editpract">Edit</a><a
                                    class="btn btn-danger" data-bs-toggle="modal"
                                    onclick="getPractitionerDetail(event.target)"
                                    data-attachuser="{{ $item->users->count() }}" data-practid="{{ $item->id }}"
                                    data-bs-target="#deletepract">Delete</a></td>
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
    <div class="modal fade" id="addnew" aria-labelledby="addnewLabel">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="addnewLabel">Add new practitioner</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form id="addpractitioners">
                    <div class="modal-body">
                        <div class="alert alert-danger print-error-msg" style="display:none">
                            <ul></ul>
                        </div>
                        <div class="spinner">
                            <div class="bounce1"></div>
                            <div class="bounce2"></div>
                            <div class="bounce3"></div>
                        </div>
                        <p>Add a new practioner by filling out the form below. An email will automatically be sent to them
                            inviting them to join the WMWA system.</p>

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="practitioner_name" id="practitioner_name"
                                placeholder="Enter Name" required>
                            <label for="practitioner_name">Enter Practitioner Name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" onkeyup="duplicateEmail(this)"
                                name="practitioner_email" id="practitioner_email" placeholder="name@example.com" required>
                            <label for="practitioner_email">Enter Email Address</label>
                            <span class="text-danger mb-4 email-error" id="email-error" style="font-size: small;"></span>
                        </div>
                        <div class="form-floating mb-3">
                            <select class="form-select" name="practitioner_role" id="practitioner_role"
                                aria-label="Floating label select example" required>

                                <option value="">Select Role</option>
                                <option value="School Nurse">School Nurse</option>
                                <option value="Social Worker">Social Worker</option>
                                <option value="WMWA Internal">WMWA Internal</option>
                                <option value="Ambassador">Ambassador</option>
                            </select>
                            <label for="practitioner_role">Select Role</label>
                        </div>

                        <p><mark>Do you want an email notification sent to the practitioner? If so we need content for
                                this.</mark></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancel</button>
                        <button id="addpract" type="button" class="btn btn-success">Add practitioner</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- EDIT MODAL -->
    <div class="modal fade" id="editpract" aria-labelledby="editLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="editLabel">Edit practitioner</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="spinner">
                        <div class="bounce1"></div>
                        <div class="bounce2"></div>
                        <div class="bounce3"></div>
                    </div>
                    <p>If you need to edit a practitioner's details please update the form below and press update.</p>
                    <form>
                        <input type="hidden" name="editpractitioner_id" id="editpractitioner_id">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="editpractitioner_name" placeholder="Enter Name">
                            <label for="editpractitioner-name">Enter Practitioner Name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" onkeyup="duplicatePractitionerEmail(this)"
                                id="editpractitioner_email" placeholder="name@example.com" value="">
                            <label for="editpractitioner_email">Enter Email Address</label>
                            <span class="text-danger mb-4 email-error" id="practitioneremail-error"
                                style="font-size: small;"></span>
                        </div>
                        <div class="form-floating mb-3">
                            <select class="form-select" id="editpractitioner_role"
                                aria-label="Floating label select example">
                                <option value="">Practitioner Role</option>
                                <option value="School Nurse">School Nurse</option>
                                <option value="Social Worker">Social Worker</option>
                                <option value="WMWA Internal">WMWA Internal</option>
                                <option value="Ambassador">Ambassador</option>
                            </select>
                            <label for="editpractitioner_role">Select Role</label>
                        </div>
                    </form>
                    <p><mark>Do you want an email notification sent to the practitioner if admin update their details? If so
                            we need content for this.</mark></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" id="updatepract" onclick="updatePractitionerDetail()"
                        class="btn btn-success">Update practitioner</button>
                </div>
            </div>
        </div>
    </div>

    <!-- DELETE MODAL -->
    <div class="modal fade" id="deletepract" tabindex="-1" aria-labelledby="deleteLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="deleteLabel">Delete practitioner</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="get">
                    <div class="modal-body">
                        <p>WARNING you are about to delete this practioner.</p>

                        <input type="hidden" name="getpractitioner_id" id="getpractitioner_id">
                        <input type="hidden" name="serviceuserscount" id="serviceuserscount">
                        <fieldset disabled>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="getpractitioner_name"
                                    placeholder="Enter Name">
                                <label for="practitioner-name">Enter Practitioner Name</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="getpractitioner_email"
                                    placeholder="name@example.com">
                                <label for="practitioner-email">Enter Email Address</label>
                            </div>
                            <div class="form-floating mb-3">
                                <select class="form-select" id="getpractitioner_role"
                                    aria-label="Floating label select example">
                                    <option>Practitioner Role</option>
                                    <option value="School Nurse">School Nurse</option>
                                    <option value="Social Worker">Social Worker</option>
                                    <option value="WMWA Internal">WMWA Internal</option>
                                    <option value="Ambassador">Ambassador</option>
                                </select>
                                <label for="practitioner-role">Select Role</label>
                            </div>
                        </fieldset>

                        <p><mark>Do you want an email notification sent to the practitioner if they get removed? If so we
                                need
                                content for this.</mark></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Go Back</button>
                        <button type="submit" class="btn btn-danger delete">Delete practitioner</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- ACTIVATE MODAL -->
    <div class="modal fade" id="activate" tabindex="-1" aria-labelledby="activateLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="activateLabel">Activate practitioner account</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to activate this account?</p>
                    <form>
                        <fieldset disabled>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="practitioner-name" placeholder="Enter Name"
                                    value="Name Surname">
                                <label for="practitioner-name">Enter Practitioner Name</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="practitioner-email"
                                    placeholder="name@example.com" value="name@website.com">
                                <label for="practitioner-email">Enter Email Address</label>
                            </div>
                            <div class="form-floating mb-3">
                                <select class="form-select" id="practitioner-role"
                                    aria-label="Floating label select example">
                                    <option>Practitioner Role</option>
                                    <option value="1" selected>School Nurse</option>
                                    <option value="2">Social Worker</option>
                                    <option value="3">WMWA Internal</option>
                                    <option value="3">Ambassador</option>
                                </select>
                                <label for="practitioner-role">Select Role</label>
                            </div>
                        </fieldset>
                    </form>
                    <p><mark>Do you want an email notification sent to the practitioner if their account is activated? If so
                            we need content for this.</mark></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-warning">Activate Account</button>
                </div>
            </div>
        </div>
    </div>

    <!-- ACCOUNTS MODAL -->
    <div class="modal fade" id="accounts" tabindex="-1" aria-labelledby="accountsLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-wide modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="accountsLabel">Service user accounts associated with: <span
                            id="viewpractitioner_name"></span></h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-5">

                    <table class="table table-striped table-hover mt-3">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email address</th>
                                <th scope="col">Category</th>
                            </tr>
                        </thead>
                        <tbody id="tbody">


                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                </div>
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
            $('#addpract').click(function() {
                var form = $("#addpractitioners");
                form.validate({
                    rules: {
                        practitioner_role: {

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
                        url: "{{ route('practitioner.store') }}",
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
                                    title: 'Practitioner added',
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
                url: "{{ route('practitioner.checkEmail') }}",
                data: {
                    email: email
                },
                dataType: "json",
                success: function(res) {
                    if (res.exists) {

                        $('#email-error')
                            .css('color', 'red')
                            .html("This Email already exists!");
                            $('#email-error')
                            .prop('hidden', false);
                        $('#addpract').prop('disabled', true);

                    } else {
                        $('#email-error')
                            .prop('hidden', true);
                        $('#addpract').prop('disabled', false);;

                    }
                },
                error: function(jqXHR, exception) {

                }
            });
        }
    </script>
    <script>
        // Duplicate Email Checker
        function duplicatePractitionerEmail(element) {
            var email = $(element).val();
            $.ajax({
                type: "POST",
                url: "{{ route('practitioner.checkEmail') }}",
                data: {
                    email: email
                },
                dataType: "json",
                success: function(res) {
                    if (res.exists) {

                        $('#practitioneremail-error').html(" This Email already exists!");
                        $('#practitioneremail-error')
                            .prop('hidden', false);
                        $('#updatepract').prop('disabled', true);

                    } else {
                        $('#practitioneremail-error')
                            .prop('hidden', true);
                        $('#updatepract').prop('disabled', false);;

                    }
                },
                error: function(jqXHR, exception) {

                }
            });
        }

        // Edit Practitioner Details
        function editPractitionerDetail(e) {
            var id = $(e).data("id");
            var url = '{{ route('practitioner.edit', ':id') }}';
            url = url.replace(':id', id);
            $.get(url, function(data) {

                $('#editpractitioner_name').val(data.name);

                $('#editpractitioner_email').val(data.email);

                $('#editpractitioner_role').val(data.category);

                $('#editpract').modal('show');
                $('#editpract').on('hidden.bs.modal', function() {
                    location.reload();
                });
            })
            $("#editpractitioner_id").val(id);

            $('#editpract').modal('show');
        }

        // update Practitioner 
        function updatePractitionerDetail() {

            var id = $('#editpractitioner_id').val();
            var editpractitioner_name = $('#editpractitioner_name').val();
            var editpractitioner_role = $('#editpractitioner_role').val();
            var editpractitioner_email = $('#editpractitioner_email').val();
            var url = '{{ route('practitioner.update', ':id') }}';
            url = url.replace(':id', id);
            let _token = $('meta[name="csrf-token"]').attr('content');

            $.ajax({
                url: url,
                type: "post",
                data: {
                    editpractitioner_name: editpractitioner_name,
                    editpractitioner_role: editpractitioner_role,
                    editpractitioner_email: editpractitioner_email,
                    _token: _token
                },
                beforeSend: function() {
                    $('.spinner').show()
                },
                success: function(data) {
                    if ($.isEmptyObject(data.error)) {
                        $('#editpract').modal('hide');

                        Swal.fire({
                            icon: 'success',
                            title: 'Practitioner details updated',
                            showConfirmButton: true,
                            timer: 2500
                        }).then((result) => {
                            // Reload the Page
                            location.reload();
                        });
                    }
                    // location.reload();
                },
                beforeSend: function() {
                    $('.spinner').show()
                },
                error: function(response) {
                    $('#statusError').text(response.responseJSON.errors);
                }
            });
        }
    </script>
    <script>
        // Delete Practitioner Details
        function getPractitionerDetail(e) {
            var id = $(e).data("practid");
            var count = $(e).data("attachuser");
            var url = '{{ route('practitioner.edit', ':id') }}';
            url = url.replace(':id', id);
            $.get(url, function(data) {

                $('#getpractitioner_name').val(data.name);

                $('#getpractitioner_email').val(data.email);

                $('#getpractitioner_role').val(data.category);

                $('#deletepract').modal('show');

            })
            $("#getpractitioner_id").val(id);
            $("#serviceuserscount").val(count);
            $('#deletepract').modal('show');
        }

        // View Service User Accounts Attached to Practitioner
        function viewaccounts(e) {
            var id = $(e).data("accountid");

            var url = '{{ route('practitioner.viewaccounts', ':id') }}';
            url = url.replace(':id', id);
            $.get(url, function(data) {

                $('#viewpractitioner_name').html(data.practitioner_viewaccounts.name);

                if (!$.trim(data.practitioner_viewaccounts.users)) {
                    $("#tbody").empty();
                    $("#tbody").append("<tr><td class='text-center' colspan='4'>No Data Found.</td></tr>");
                    $('#accounts').modal('show');

                } else {
                    $("#tbody").empty();

                    $.each(data.practitioner_viewaccounts.users, function(i, val) {


                        $("#tbody").append("<tr><td>" + (i + 1) + "</td><td>" + val.name +
                            "</td><td>" + val.email + "</td><td>" + val.category + "</td></tr>");
                    })

                    $('#accounts').modal('show');

                }

            })

        }

        $(".delete").click(function(e) {
            e.preventDefault();

            var id = $("#getpractitioner_id").val();
            var count = $("#serviceuserscount").val();

            $("#deletepract").modal("hide");
            Swal.fire({
                title: "Are you sure?",
                text: (count >= 1) ? "This Practitioner is attached to " + count + " Service User." :
                    "Once deleted, you will not be able to recover",
                icon: "warning",
                showCancelButton: true,



                confirmButtonText: "Yes, delete it!",
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        type: "GET",
                        url: '{{ route('practitioner.delete') }}',
                        data: {
                            id: id
                        },
                        success: function(data) {
                            if ($.isEmptyObject(data.error)) {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Practitioner Deleted successfully',
                                    showConfirmButton: true,
                                    timer: 2500
                                }).then((result) => {
                                    // Reload the Page
                                    location.reload();
                                });
                            }
                        }
                    });

                }
            });


        });
    </script>
@endsection
