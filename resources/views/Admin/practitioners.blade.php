@extends('Admin.layouts.master')
@section('title')
    Practitioners Account
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2>Accounts <small>Practitioners</small></h2>
            <p>Total (4) | Active (3) | Pending Requestions (1)</p>

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
                    <tr>
                        <th scope="row">0001</th>
                        <td>Name Surname</td>
                        <td>name@website.com</td>
                        <td>School Nurse</td>
                        <td>Active</td>
                        <td><a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#accounts">View Accounts</a>
                        </td>
                        <td><a class="btn btn-secondary mr-1" data-bs-toggle="modal" data-bs-target="#edit">Edit</a><a
                                class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete">Delete</a></td>
                    </tr>
                    <tr>
                        <th scope="row">0002</th>
                        <td>Name Surname</td>
                        <td>name@website.com</td>
                        <td>Social Worker</td>
                        <td>Active</td>
                        <td><a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#accounts">View Accounts</a>
                        </td>
                        <td><a class="btn btn-secondary mr-1" data-bs-toggle="modal" data-bs-target="#edit">Edit</a><a
                                class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete">Delete</a></td>
                    </tr>
                    <tr>
                        <th scope="row">0003</th>
                        <td>Name Surname</td>
                        <td>name@website.com</td>
                        <td>WMWA Internal</td>
                        <td>Active</td>
                        <td><a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#accounts">View Accounts</a>
                        </td>
                        <td><a class="btn btn-secondary mr-1" data-bs-toggle="modal" data-bs-target="#edit">Edit</a><a
                                class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete">Delete</a></td>
                    </tr>
                    <tr>
                        <th scope="row">0004</th>
                        <td>Name Surname</td>
                        <td>name@website.com</td>
                        <td>Ambassador</td>
                        <td>Pending</td>
                        <td><a class="btn btn-primary disabled" aria-disabled="true" role="button">View Accounts</a></td>
                        <td><a class="btn btn-warning mr-1" data-bs-toggle="modal" data-bs-target="#activate">Activate</a><a
                                class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete">Delete</a></td>
                    </tr>
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
                        <p>Add a new practioner by filling out the form below. An email will automatically be sent to them
                            inviting them to join the WMWA system.</p>

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="practitioner_name" id="practitioner_name"
                                placeholder="Enter Name" required>
                            <label for="practitioner_name">Enter Practitioner Name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" name="practitioner_email" id="practitioner_email"
                                placeholder="name@example.com" required>
                            <label for="practitioner_email">Enter Email Address</label>
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
    <div class="modal fade" id="edit" aria-labelledby="editLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="editLabel">Edit practitioner</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>If you need to edit a practitioner's details please update the form below and press update.</p>
                    <form>
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
                    </form>
                    <p><mark>Do you want an email notification sent to the practitioner if admin update their details? If so
                            we need content for this.</mark></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-success">Update practitioner</button>
                </div>
            </div>
        </div>
    </div>

    <!-- DELETE MODAL -->
    <div class="modal fade" id="delete" tabindex="-1" aria-labelledby="deleteLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="deleteLabel">Delete practitioner</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>WARNING you are about to delete this practioner.</p>
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
                    <p><mark>Do you want an email notification sent to the practitioner if they get removed? If so we need
                            content for this.</mark></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Go Back</button>
                    <button type="button" class="btn btn-danger">Delete practitioner</button>
                </div>
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
                    <h4 class="modal-title" id="accountsLabel">Service user accounts associated with: << practitioner
                            name>></h4>
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
                        <tbody>
                            <tr>
                                <th scope="row">0001</th>
                                <td>Name Surname</td>
                                <td>name@website.com</td>
                                <td>Woman</td>
                            </tr>
                            <tr>
                                <th scope="row">0002</th>
                                <td>Name Surname</td>
                                <td>name@website.com</td>
                                <td>Man</td>
                            </tr>
                            <tr>
                                <th scope="row">0003</th>
                                <td>Name Surname</td>
                                <td>name@website.com</td>
                                <td>Youth/Child</td>
                            </tr>
                            <tr>
                                <th scope="row">0004</th>
                                <td>Name Surname</td>
                                <td>name@website.com</td>
                                <td>Survivor/Ambassador</td>
                            </tr>
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
                    })
                }
            });

            function printErrorMsg (msg) {
            $(".print-error-msg").find("ul").html('');
            $(".print-error-msg").css('display','block');
            $.each( msg, function( key, value ) {
                $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
            });
        }
        });
    </script>
@endsection
