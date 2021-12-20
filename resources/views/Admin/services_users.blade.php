@extends('Admin.layouts.master')
@section('title')
    Accounts Service users
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2>Accounts <small>Service Users</small></h2>
            <p>Total Accounts (4)</p>

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
                    <tr>
                        <th scope="row">0001</th>
                        <td>Name Surname</td>
                        <td>name@website.com</td>
                        <td>Woman</td>
                        <td>Name Surname</td>
                        <td><a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#accounts">View</a> <a
                                class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#accounts">Send</a></td>
                        <td><a class="btn btn-secondary mr-1" data-bs-toggle="modal" data-bs-target="#edit">Edit</a><a
                                class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete">Delete</a></td>
                    </tr>
                    <tr>
                        <th scope="row">0002</th>
                        <td>Name Surname</td>
                        <td>name@website.com</td>
                        <td>Man</td>
                        <td>Name Surname</td>
                        <td><a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#accounts">View</a> <a
                                class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#accounts">Send</a></td>
                        <td><a class="btn btn-secondary mr-1" data-bs-toggle="modal" data-bs-target="#edit">Edit</a><a
                                class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete">Delete</a></td>
                    </tr>
                    <tr>
                        <th scope="row">0003</th>
                        <td>Name Surname</td>
                        <td>name@website.com</td>
                        <td>Youth/Child</td>
                        <td>Name Surname</td>
                        <td><a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#accounts">View</a> <a
                                class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#accounts">Send</a></td>
                        <td><a class="btn btn-secondary mr-1" data-bs-toggle="modal" data-bs-target="#edit">Edit</a><a
                                class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete">Delete</a></td>
                    </tr>
                    <tr>
                        <th scope="row">0004</th>
                        <td>Name Surname</td>
                        <td>name@website.com</td>
                        <td>Survivor/Ambassador</td>
                        <td>Name Surname</td>
                        <td><a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#accounts">View</a> <a
                                class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#accounts">Send</a></td>
                        <td><a class="btn btn-secondary mr-1" data-bs-toggle="modal" data-bs-target="#edit">Edit</a><a
                                class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete">Delete</a></td>
                    </tr>
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
                <div class="modal-body">
                    <p>Add a new service user by filling out the form below. An email will automatically be sent to them
                        inviting them to join the WMWA system.</p>
                    <form>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="service-user-name" placeholder="Enter Name">
                            <label for="service-user-name">Enter Name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="service-user-email"
                                placeholder="name@example.com">
                            <label for="service-user-email">Enter Email Address</label>
                        </div>
                        <div class="form-floating mb-3">
                            <select class="form-select" id="service-user-cat" aria-label="Service User Category">
                                <option selected>Category</option>
                                <option value="1">Woman</option>
                                <option value="2">Man</option>
                                <option value="3">Youth/Child</option>
                                <option value="3">Survivor/Ambassador</option>
                            </select>
                            <label for="service-user-cat">Select Category</label>
                        </div>
                        <div class="form-floating mb-3">
                            <select class="form-select" id="service-user-practitioner"
                                aria-label="Associated Practitioner">
                                <option selected>Assign Practitioner</option>
                                <option value="1">Name Surname</option>
                                <option value="2">Name Surname</option>
                                <option value="3">Name Surname</option>
                                <option value="3">Name Surname</option>
                            </select>
                            <label for="service-user-practitioner">Select Practitioner</label>
                        </div>
                    </form>
                    <p><mark>Do you want an email notification sent to the service user? If so we need content for
                            this.</mark></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-success">Add service user</button>
                </div>
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
                    <p>If you need to edit a service user's details please update the form below and press update.</p>
                    <form>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="service-user-name" placeholder="Enter Name"
                                value="Name Surname">
                            <label for="service-user-name">Enter Name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="service-user-email"
                                placeholder="name@example.com" value="name@website.com">
                            <label for="service-user-email">Enter Email Address</label>
                        </div>
                        <div class="form-floating mb-3">
                            <select class="form-select" id="service-user-cat" aria-label="Service User Category">
                                <option>Category</option>
                                <option value="1" selected>Woman</option>
                                <option value="2">Man</option>
                                <option value="3">Youth/Child</option>
                                <option value="3">Survivor/Ambassador</option>
                            </select>
                            <label for="service-user-cat">Select Category</label>
                        </div>
                        <div class="form-floating mb-3">
                            <select class="form-select" id="service-user-practitioner"
                                aria-label="Associated Practitioner">
                                <option>Assign Practitioner</option>
                                <option value="1" selected>Name Surname</option>
                                <option value="2">Name Surname</option>
                                <option value="3">Name Surname</option>
                                <option value="3">Name Surname</option>
                            </select>
                            <label for="service-user-practitioner">Select Practitioner</label>
                        </div>
                    </form>
                    <p><mark>Do you want an email notification sent to the service user if admin update their details? If so
                            we need content for this.</mark></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-success">Update service user</button>
                </div>
            </div>
        </div>
    </div>

    <!-- DELETE MODAL -->
    <div class="modal fade" id="delete" tabindex="-1" aria-labelledby="deleteLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="deleteLabel">Delete Service User</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>WARNING you are about to delete this service user.</p>
                    <form>
                        <fieldset disabled>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="service-user-name" placeholder="Enter Name"
                                    value="Name Surname">
                                <label for="service-user-name">Enter Name</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="service-user-email"
                                    placeholder="name@example.com" value="name@website.com">
                                <label for="service-user-email">Enter Email Address</label>
                            </div>
                            <div class="form-floating mb-3">
                                <select class="form-select" id="service-user-cat" aria-label="Service User Category">
                                    <option>Category</option>
                                    <option value="1" selected>Woman</option>
                                    <option value="2">Man</option>
                                    <option value="3">Youth/Child</option>
                                    <option value="3">Survivor/Ambassador</option>
                                </select>
                                <label for="service-user-cat">Select Category</label>
                            </div>
                            <div class="form-floating mb-3">
                                <select class="form-select" id="service-user-practitioner"
                                    aria-label="Associated Practitioner">
                                    <option>Assign Practitioner</option>
                                    <option value="1" selected>Name Surname</option>
                                    <option value="2">Name Surname</option>
                                    <option value="3">Name Surname</option>
                                    <option value="3">Name Surname</option>
                                </select>
                                <label for="service-user-practitioner">Select Practitioner</label>
                            </div>
                        </fieldset>
                    </form>
                    <p><mark>Do you want an email notification sent to the serivce user if they get removed? If so we need
                            content for this.</mark></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Go Back</button>
                    <button type="button" class="btn btn-danger">Delete practitioner</button>
                </div>
            </div>
        </div>
    </div>


@endsection
