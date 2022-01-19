@extends('Admin.layouts.master')
@section('title')
    Accreditation Certificate Request Form
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2>Forms <small>Accreditation Certificate Request</small></h2>
            <p>Total Accounts (1)</p>

            {{-- <a class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addnew">Add new service user</a> --}}

            <table class="table table-striped table-hover mt-3">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Email Address</th>
                        <th scope="col">Details</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($certificateform as $item)
                        <tr>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->email }}</td>
                            <td><a class="btn btn-primary" data-id="{{ $item->id }}" onclick='viewform(event.target)'
                                    data-bs-toggle="modal" data-bs-target="#view">View</a></td>
                            <td><a class="btn btn-danger" data-getid="{{ $item->id }}"
                                    onclick='getdetailsviewform(event.target)' data-bs-toggle="modal"
                                    data-bs-target="#delete">Delete</a></td>
                        </tr>

                    @empty
                        <tr>
                            <td colspan="4" style="text-align: center">No data found.</td>
                        </tr>
                    @endforelse

                </tbody>
            </table>
            <p><mark>Is any other functionality required here other than viewing the form submissions?</mark></p>
        </div>
    </div>
    <!-- VIEW MODAL -->
    <div class="modal fade" id="view" tabindex="-1" aria-labelledby="viewLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-wide">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="viewLabel">View Email</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h5>Accreditation Certificate Request: <span id="viewname">,</span> <a href="#" id="viewemail"></a></h5>
                    <hr>
                    <form>
                        <fieldset disabled>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="name" placeholder="Enter Name"
                                    value="Name Surname">
                                <label for="name">Enter Name</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="email" placeholder="name@example.com"
                                    value="name@website.com">
                                <label for="email">Enter Email Address</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="phone_no" placeholder="Enter Phone no"
                                    value="Name Surname">
                                <label for="phone_no">Enter Phone no</label>
                            </div>

                            <div class="form-floating">
                                <select class="form-select" name="training" id="training" aria-label="Training" required>
                                    <option value="">Training Completed</option>
                                    <option value="Criminal Justice">Criminal Justice</option>
                                </select>
                                <label for="serviceuser_practitioner">Training</label>
                            </div>
                        </fieldset>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- DELETE MODAL -->
    <div class="modal fade" id="delete" tabindex="-1" aria-labelledby="deleteLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="deleteLabel">Delete Email</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="spinner">
                        <div class="bounce1"></div>
                        <div class="bounce2"></div>
                        <div class="bounce3"></div>
                    </div>
                    <p>WARNING you are about to delete this email.</p>
                    <form>
                        <input type="hidden" id="getid">
                        <fieldset disabled>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="getname" placeholder="Enter Name"
                                    value="Name Surname">
                                <label for="getviewname">Enter Name</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="getemail" placeholder="name@example.com"
                                    value="name@website.com">
                                <label for="getemail">Enter Email Address</label>
                            </div>
                        </fieldset>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Go Back</button>
                    <button type="button" class="btn btn-danger deleteformdetails">Delete email</button>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('extrajs')
    <script>
        function viewform(e) {
            var id = $(e).data("id");
            var url = '{{ route('viewform.certificate', ':id') }}';
            url = url.replace(':id', id);
            $.get(url, function(data) {

                $('#viewname').html(data.name + ',');

                $('#viewemail').html(data.email);

                $('#name').val(data.name);

                $('#email').val(data.email);
                $('#phone_no').val(data.phone_no);
                $('#training').val(data.training);

                $('#view').modal('show');
                $('#view').on('hidden.bs.modal', function() {
                    location.reload();
                });
            })


            $('#view').modal('show');
        }

        function getdetailsviewform(e) {
            var id = $(e).data("getid");
            var url = '{{ route('viewform.certificate', ':id') }}';
            url = url.replace(':id', id);
            $.get(url, function(data) {

                $('#getname').val(data.name);

                $('#getemail').val(data.email);
                $('#delete').modal('show');
                $('#delete').on('hidden.bs.modal', function() {
                    location.reload();
                });
            })

            $('#getid').val(id);
            $('#delete').modal('show');
        }

        $(".deleteformdetails").click(
            function(e) {
                e.preventDefault();

                var id = $("#getid").val();

                $.ajax({
                    type: "GET",
                    url: '{{ route('deleteform.certificate') }}',
                    data: {
                        id: id
                    },
                    beforeSend: function() {
                        $('.spinner').show()
                    },
                    success: function(data) {
                        $("#delete").modal("hide");
                        if ($.isEmptyObject(data.error)) {
                            Swal.fire({
                                icon: 'success',
                                title: 'Deleted successfully',
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
            }
        )
    </script>
@endsection
