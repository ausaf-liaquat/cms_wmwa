@extends('Admin.layouts.master')
@section('title')
    Accounts Service users
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2>Resources <small>View All</small></h2>
            <p>Total Resources (6)</p>

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
                    <tr>
                        <th scope="row">0001</th>
                        <td>Egestas_Ornare_Venenatis.pdf</td>
                        <td>PDF Title</td>
                        <td>File: PDF</td>
                        <td>Women</td>
                        <td><a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#accounts">View</a></td>
                        <td><a class="btn btn-secondary mr-1" data-bs-toggle="modal" data-bs-target="#edit">Edit</a><a
                                class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete">Delete</a></td>
                    </tr>
                    <tr>
                        <th scope="row">0002</th>
                        <td>https://youtu.be/7yoLkV3cURU</td>
                        <td>Video Title</td>
                        <td>Youtube Video</td>
                        <td>Men</td>
                        <td><a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#accounts">View</a></td>
                        <td><a class="btn btn-secondary mr-1" data-bs-toggle="modal" data-bs-target="#edit">Edit</a><a
                                class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete">Delete</a></td>
                    </tr>
                    <tr>
                        <th scope="row">0003</th>
                        <td>Inceptos_Vulputate_Nullam.doc</td>
                        <td>Word Doc Title</td>
                        <td>File: Word Doc</td>
                        <td>Youth/Child</td>
                        <td><a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#accounts">View</a></td>
                        <td><a class="btn btn-secondary mr-1" data-bs-toggle="modal" data-bs-target="#edit">Edit</a><a
                                class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete">Delete</a></td>
                    </tr>
                    <tr>
                        <th scope="row">0004</th>
                        <td>https://www.westmerciawomensaid.org/link</td>
                        <td>Link Title</td>
                        <td>Link</td>
                        <td>Survivor/Amassador</td>
                        <td><a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#accounts">View</a></td>
                        <td><a class="btn btn-secondary mr-1" data-bs-toggle="modal" data-bs-target="#edit">Edit</a><a
                                class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete">Delete</a></td>
                    </tr>
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
                <div class="modal-body">
                    <p>Add a new resource by filling out the form below.</p>

                    <form>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="resource-title"
                                placeholder="Enter Resource Title">
                            <label for="resource-title">Enter Resource Title</label>
                        </div>
                        <div class="form-floating mb-3">
                            <select class="form-select" name="resource-type" id="resource-type"
                                aria-label="Resource Type">
                                <option selected>Select Resource Type</option>
                                <option value="file">File Download</option>
                                <option value="link">Link</option>
                                <option value="video">Video</option>
                            </select>
                            <label for="resource-type">Resource Types</label>
                        </div>
                        <div class="form-floating mb-3">
                            <select class="form-select" id="service-user-cat" aria-label="Service User Category">
                                <option selected>Select Resource Category</option>
                                <option value="1">Woman</option>
                                <option value="2">Man</option>
                                <option value="3">Youth/Child</option>
                                <option value="3">Survivor/Ambassador</option>
                            </select>
                            <label for="service-user-cat">Resource Categories</label>
                        </div>
                        <div class="input-group mb-3">
                            <input type="file" class="form-control" id="inputGroupFile04"
                                aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                        </div>
                        <div class="form-floating mb-3">
                            <input type="url" class="form-control" id="resouce-url"
                                placeholder="https://www.westmerciawomensaid.org">
                            <label for="resouce-url">Paste file URL here</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="url" class="form-control" id="resouce-link" placeholder="https://www.youtu.be">
                            <label for="resouce-link">Paste video URL here</label>
                        </div>
                    </form>
                    <p><mark>We will make it so only the relevant upload, url or video box appears depending on resource
                            type selected.</mark></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-success">Add resource</button>
                </div>
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
                <div class="modal-body">
                    <p>If you need to edit a resource please update the form below and press update.</p>
                    <form>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="resource-title" placeholder="Enter Resource Title"
                                value="Resource Title">
                            <label for="resource-title">Enter Resource Title</label>
                        </div>
                        <div class="form-floating mb-3">
                            <select class="form-select" name="resource-type" id="resource-type"
                                aria-label="Resource Type">
                                <option>Select Resource Type</option>
                                <option value="file" selected>File Download</option>
                                <option value="link">Link</option>
                                <option value="video">Video</option>
                            </select>
                            <label for="resource-type">Resource Types</label>
                        </div>
                        <div class="form-floating mb-3">
                            <select class="form-select" id="service-user-cat" aria-label="Service User Category">
                                <option>Select Resource Category</option>
                                <option value="1" selected>Woman</option>
                                <option value="2">Man</option>
                                <option value="3">Youth/Child</option>
                                <option value="3">Survivor/Ambassador</option>
                            </select>
                            <label for="service-user-cat">Resource Categories</label>
                        </div>
                        <div class="input-group mb-3">
                            <input type="file" class="form-control" id="inputGroupFile04" aria-label="Upload">
                        </div>
                        <div class="form-floating mb-3">
                            <input type="url" class="form-control" id="resouce-url"
                                placeholder="https://www.westmerciawomensaid.org"
                                value="https://www.westmerciawomensaid.org">
                            <label for="resouce-url">Paste file URL here</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="url" class="form-control" id="resouce-link" placeholder="https://www.youtu.be"
                                value="https://www.youtu.be/abc123">
                            <label for="resouce-link">Paste video URL here</label>
                        </div>
                    </form>
                    <p><mark>Again, we will make it so only the relevant upload, url or video box appears depending on
                            resource type.</mark></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-success">Update Resource</button>
                </div>
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
                <div class="modal-body">
                    <p>WARNING you are about to delete this resource.</p>
                    <form>
                        <fieldset disabled>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="resource-title"
                                    placeholder="Enter Resource Title" value="Resource Title">
                                <label for="resource-title">Enter Resource Title</label>
                            </div>
                            <div class="form-floating mb-3">
                                <select class="form-select" name="resource-type" id="resource-type"
                                    aria-label="Resource Type">
                                    <option>Select Resource Type</option>
                                    <option value="file" selected>File Download</option>
                                    <option value="link">Link</option>
                                    <option value="video">Video</option>
                                </select>
                                <label for="resource-type">Resource Types</label>
                            </div>
                            <div class="form-floating mb-3">
                                <select class="form-select" id="service-user-cat" aria-label="Service User Category">
                                    <option>Select Resource Category</option>
                                    <option value="1" selected>Woman</option>
                                    <option value="2">Man</option>
                                    <option value="3">Youth/Child</option>
                                    <option value="3">Survivor/Ambassador</option>
                                </select>
                                <label for="service-user-cat">Resource Categories</label>
                            </div>
                    </form>
                    </fieldset>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Go Back</button>
                    <button type="button" class="btn btn-danger">Delete Resource</button>
                </div>
            </div>
        </div>
    </div>
@endsection
