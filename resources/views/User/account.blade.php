@extends('User.layouts.master')
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
            <form id="serviceuser_form">
                <input type="hidden" name="id" id="id" value="{{ Auth::user()->id }}">
                <h2>Account Details</h2>
                <p class="mb-3">Below are your account details, if anything is incorrect you can update them here.
                </p>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control " id="serviceuser_name" placeholder="Enter Your Name"
                                name="name" value="{{ $serviceuser->name }}">
                            <label for="serviceuser_name">Enter Your Name</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control " id="serviceuser_email"
                                onkeyup="duplicateserviceuserEmail(this)" placeholder="Enter Your Email Address"
                                name="email" value="{{ $serviceuser->email }}">
                            <label for="serviceuser_email">Enter Your Email Address</label>
                            <span class="text-danger mb-4 email-error" id="serviceuseremail-error"
                                style="font-size: small;"></span>
                        </div>
                    </div>
                    <input type="hidden" name="serviceuser_role" id="serviceuser_role" value="{{$serviceuser->category}}">
                    {{-- <fieldset disabled> --}}
                    <div class="col-md-4">
                        <div class="form-floating mb-3">
                            <select class="form-select" id="serviceuser_role" aria-label="Floating label select example"
                                disabled>
                                <option value="{{ $serviceuser->category }}">{{ $serviceuser->category }}</option>
                                <option value="School Nurse">School Nurse</option>
                                <option value="Social Worker">Social Worker</option>
                                <option value="WMWA Internal">WMWA Internal</option>
                                <option value="Ambassador">Ambassador</option>
                            </select>
                            <label for="serviceuser_role">Select Role</label>
                        </div>
                    </div>
                    {{-- </fieldset> --}}
                </div>
                <p class="mb-0">You can update your password below. <span style="font-size: 12px">(If there is no
                        change, leave it blank.)</span></p>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control " id="serviceuser_password"
                                onkeyup="minpasswordcheck(this)" placeholder="Enter your Password" name="password"
                                autocomplete="new-password">
                            <label for="serviceuser_password">Enter new Password</label>
                            <span class="text-danger mb-4 minpassword-error" id="minpassword_error"
                                style="font-size: small;"> </span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating mb-4">
                            <input type="password" class="form-control" id="serviceuser_confirmpassword"
                                onkeyup="passwordcheck(this)" placeholder="Confirm Your Password"
                                name="password_confirmation" autocomplete="new-password">
                            <label for="serviceuser_confirmpassword">Confirm new Password</label>
                            <span class="text-danger mb-4 password-error" id="serviceuserpassword_error"
                                style="font-size: small;"> </span>
                        </div>
                    </div>
                </div>
                <button class="mb-1 btn btn-primary" id="updateServiceuser" onclick="updateserviceuserDetail()"
                    type="button">Update Account</button>
            </form>
        </div>
    </div>
@endsection
@section('extrajs')
    <script>
        $("#serviceuser_form :input").change(function() {
            $("#serviceuser_form").data("changed", true);
        });


        var id = $("#id").val();
        var url = '{{ route('serviceuser.edit', ':id') }}';
        url = url.replace(':id', id);
        $.get(url, function(data) {
            $('#serviceuser_role').val(data.category);
        });

        function passwordcheck(element) {
            var confirm_password = $(element).val();
            if ($('#serviceuser_password').val() == confirm_password) {
                $('#serviceuserpassword_error').prop('hidden', true);
                $('#updateServiceuser').prop('disabled', false);
            } else {
                $('#serviceuserpassword_error').html("Password do not match.");
                $('#serviceuserpassword_error').prop('hidden', false);
                $('#updateServiceuser').prop('disabled', true);

            }
        };

        function minpasswordcheck(element) {
            var minpass = 8;
            var password = $(element).val();
            if (password.length < minpass) {
                $('#minpassword_error').html("Minimum password length is 8.");
                $('#minpassword_error').prop('hidden', false);
                $('#updateServiceuser').prop('disabled', true);
            } else {
                $('#minpassword_error').prop('hidden', true);
                $('#updateServiceuser').prop('disabled', false);
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
        function duplicateserviceuserEmail(element) {
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
                        $('#serviceuseremail-error').html(" This Email already exists!");
                        $('#serviceuseremail-error')
                            .prop('hidden', false);
                        $('#updateServiceuser').prop('disabled', true);

                    } else {

                        $('#serviceuseremail-error')
                            .prop('hidden', true);
                        $('#updateServiceuser').prop('disabled', false);

                    }
                },
                error: function(jqXHR, exception) {

                }
            });
        }

        // update serviceuser 
        function updateserviceuserDetail() {

            var id = $('#editserviceuser_id').val();
            var serviceuser_name = $('#serviceuser_name').val();
            var serviceuser_role = $('#serviceuser_role').val();
            var serviceuser_email = $('#serviceuser_email').val();
            var serviceuser_password = $('#serviceuser_password').val();
            var url = '{{ route('serviceuser.accountedit', ':id') }}';
            url = url.replace(':id', id);
            let _token = $('meta[name="csrf-token"]').attr('content');

            if ($("#serviceuser_form").data("changed")) {
                $.ajax({
                    url: url,
                    type: "post",
                    data: {
                        serviceuser_name: serviceuser_name,
                        serviceuser_role: serviceuser_role,
                        serviceuser_email: serviceuser_email,
                        serviceuser_password: serviceuser_password,
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
