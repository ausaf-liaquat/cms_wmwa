@extends('Admin.layouts.master')
@section('title')
    Practitioners Account
@endsection
@section('content')
    <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- USER DATA-->
                        <div class="user-data m-b-30">
                            <h3 class="title-3 m-b-30">
                                <i class="zmdi zmdi-account-calendar"></i>Accounts Practitioners
                            </h3>

                            <div class="table-responsive table-data">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <td>
                                                <label class="au-checkbox">
                                                    <input type="checkbox">
                                                    <span class="au-checkmark"></span>
                                                </label>
                                            </td>
                                            <td>ID</td>
                                            <td>Name</td>
                                            <td>Email Address</td>
                                            <td>Category</td>
                                            <td>Associated Users</td>
                                            <td>Edit</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <label class="au-checkbox">
                                                    <input type="checkbox">
                                                    <span class="au-checkmark"></span>
                                                </label>
                                            </td>
                                            <td>
                                                <div class="table-data__info">
                                                    <h6>lori lynch</h6>
                                                    <span>
                                                        <a href="#">johndoe@gmail.com</a>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="role admin">admin</span>
                                            </td>
                                            <td>
                                                <div class="rs-select2--trans rs-select2--sm">
                                                    <select class="js-select2" name="property">
                                                        <option selected="selected">Full Control</option>
                                                        <option value="">Post</option>
                                                        <option value="">Watch</option>
                                                    </select>
                                                    <div class="dropDownSelect2"></div>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="more">
                                                    <i class="zmdi zmdi-more"></i>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="au-checkbox">
                                                    <input type="checkbox" checked="checked">
                                                    <span class="au-checkmark"></span>
                                                </label>
                                            </td>
                                            <td>
                                                <div class="table-data__info">
                                                    <h6>lori lynch</h6>
                                                    <span>
                                                        <a href="#">johndoe@gmail.com</a>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="role user">user</span>
                                            </td>
                                            <td>
                                                <div class="rs-select2--trans rs-select2--sm">
                                                    <select class="js-select2" name="property">
                                                        <option value="">Full Control</option>
                                                        <option value="" selected="selected">Post</option>
                                                        <option value="">Watch</option>
                                                    </select>
                                                    <div class="dropDownSelect2"></div>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="more">
                                                    <i class="zmdi zmdi-more"></i>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="au-checkbox">
                                                    <input type="checkbox">
                                                    <span class="au-checkmark"></span>
                                                </label>
                                            </td>
                                            <td>
                                                <div class="table-data__info">
                                                    <h6>lori lynch</h6>
                                                    <span>
                                                        <a href="#">johndoe@gmail.com</a>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="role user">user</span>
                                            </td>
                                            <td>
                                                <div class="rs-select2--trans rs-select2--sm">
                                                    <select class="js-select2" name="property">
                                                        <option value="">Full Control</option>
                                                        <option value="" selected="selected">Post</option>
                                                        <option value="">Watch</option>
                                                    </select>
                                                    <div class="dropDownSelect2"></div>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="more">
                                                    <i class="zmdi zmdi-more"></i>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="au-checkbox">
                                                    <input type="checkbox">
                                                    <span class="au-checkmark"></span>
                                                </label>
                                            </td>
                                            <td>
                                                <div class="table-data__info">
                                                    <h6>lori lynch</h6>
                                                    <span>
                                                        <a href="#">johndoe@gmail.com</a>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="role member">member</span>
                                            </td>
                                            <td>
                                                <div class="rs-select2--trans rs-select2--sm">
                                                    <select class="js-select2" name="property">
                                                        <option selected="selected">Full Control</option>
                                                        <option value="">Post</option>
                                                        <option value="">Watch</option>
                                                    </select>
                                                    <div class="dropDownSelect2"></div>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="more">
                                                    <i class="zmdi zmdi-more"></i>
                                                </span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="user-data__footer">
                                <button class="au-btn au-btn-load">load more</button>
                            </div>
                        </div>
                        <!-- END USER DATA-->
                    </div>
                </div>

            </div>
        </div>
    </div>


@endsection
