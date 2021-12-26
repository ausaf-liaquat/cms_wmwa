@extends('Practitioner.layouts.master')
@section('title')
    Account Details
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="spinner">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
            <form id="practitioner_form">
                <input type="hidden" name="id" id="id" value="{{ Auth::user()->id }}">
                <h2>Account Details</h2>
                <p class="mb-3">Below are your account details, if anything is incorrect you can update them here.
                </p>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control " id="practitioner_name" placeholder="Enter Your Name"
                                name="name" value="{{ $practitioner->name }}">
                            <label for="practitioner_name">Enter Your Name</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control " id="practitioner_email"
                                onkeyup="duplicatePractitionerEmail(this)" placeholder="Enter Your Email Address"
                                name="email" value="{{ $practitioner->email }}">
                            <label for="practitioner_email">Enter Your Email Address</label>
                            <span class="text-danger mb-4 email-error" id="practitioneremail-error"
                                style="font-size: small;"></span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-floating mb-3">
                            <select class="form-select" id="practitioner_role"
                                aria-label="Floating label select example">
                                <option value="">Practitioner Role</option>
                                <option value="School Nurse">School Nurse</option>
                                <option value="Social Worker">Social Worker</option>
                                <option value="WMWA Internal">WMWA Internal</option>
                                <option value="Ambassador">Ambassador</option>
                            </select>
                            <label for="practitioner_role">Select Role</label>
                        </div>
                    </div>
                </div>
                <p class="mb-0">You can update your password below. <span style="font-size: 12px">(If there is no
                        change, leave it blank.)</span></p>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control " id="practitioner_password"
                                onkeyup="minpasswordcheck(this)" placeholder="Enter your Password" name="password"
                                autocomplete="new-password">
                            <label for="practitioner_password">Enter new Password</label>
                            <span class="text-danger mb-4 minpassword-error" id="minpassword_error"
                                style="font-size: small;"> </span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating mb-4">
                            <input type="password" class="form-control" id="practitioner_confirmpassword"
                                onkeyup="passwordcheck(this)" placeholder="Confirm Your Password"
                                name="password_confirmation" autocomplete="new-password">
                            <label for="practitioner_confirmpassword">Confirm new Password</label>
                            <span class="text-danger mb-4 password-error" id="practitionerpassword_error"
                                style="font-size: small;"> </span>
                        </div>
                    </div>
                </div>
                <button class="mb-1 btn btn-primary" id="updatepract" onclick="updatePractitionerDetail()"
                    type="button">Update Account</button>
            </form>
        </div>
    </div>
@endsection
@section('extrajs')
    <script>
        $("#practitioner_form :input").change(function() {
            $("#practitioner_form").data("changed", true);
        });


        var id = $("#id").val();
        var url = '{{ route('practitioner.edit', ':id') }}';
        url = url.replace(':id', id);
        $.get(url, function(data) {
            $('#practitioner_role').val(data.category);
        });

        function passwordcheck(element) {
            var confirm_password = $(element).val();
            if ($('#practitioner_password').val() == confirm_password) {
                $('#practitionerpassword_error').prop('hidden', true);
                $('#updatepract').prop('disabled', false);
            } else {
                $('#practitionerpassword_error').html("Password do not match.");
                $('#practitionerpassword_error').prop('hidden', false);
                $('#updatepract').prop('disabled', true);

            }
        };

        function minpasswordcheck(element) {
            var minpass = 8;
            var password = $(element).val();
            if (password.length < minpass) {
                $('#minpassword_error').html("Minimum password length is 8.");
                $('#minpassword_error').prop('hidden', false);
                $('#updatepract').prop('disabled', true);
            } else {
                $('#minpassword_error').prop('hidden', true);
                $('#updatepract').prop('disabled', false);
            }
        };
    </script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
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
                        $('#updatepract').prop('disabled', false);

                    }
                },
                error: function(jqXHR, exception) {

                }
            });
        }

        // update Practitioner 
        function updatePractitionerDetail() {

            var id = $('#editpractitioner_id').val();
            var practitioner_name = $('#practitioner_name').val();
            var practitioner_role = $('#practitioner_role').val();
            var practitioner_email = $('#practitioner_email').val();
            var practitioner_password = $('#practitioner_password').val();
            var url = '{{ route('practitioner.accountedit', ':id') }}';
            url = url.replace(':id', id);
            let _token = $('meta[name="csrf-token"]').attr('content');

            if ($("#practitioner_form").data("changed")) {
                $.ajax({
                    url: url,
                    type: "post",
                    data: {
                        practitioner_name: practitioner_name,
                        practitioner_role: practitioner_role,
                        practitioner_email: practitioner_email,
                        practitioner_password: practitioner_password,
                        _token: _token
                    },
                    beforeSend: function() {
                        $('.spinner').show()
                    },
                    success: function(data) {

                        $('#editpract').modal('hide');

                        tata.success('Success', 'Account details updated successfully', {
                            onClose: location.reload()
                        })
                        // location.reload();
                    },
                    afterSend: function() {
                        $('.spinner').hide()
                    },
                    error: function(response) {
                        $('#statusError').text(response.responseJSON.errors);
                    }
                });
            } else {
                tata.info('info', 'Nothing change')
            }
        }
    </script>
@endsection
