@extends('admin.master')
@section('content')
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <i class="t-category">All Coupon Category</i>
                        <button type="button" class="au-btn au-btn--green mb-1 float-right" data-toggle="modal" data-target="#mediumModal">
                            Add New Category
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal medium -->
        <div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="mediumModalLabel">Add New Category</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ url('admin/category') }}" method="post">
                        {{csrf_field()}}
                        <div class="modal-body">
                            @include('admin.category.form')
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Confirm</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- end modal medium -->
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive table--no-card m-b-40">
                            <table class="table table-borderless table-striped table-earning">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Slug</th>
                                    <th>Description</th>
                                    <th>Create By</th>
                                    <th>Date Create</th>
                                    <th>User ID</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($categories as $value)
                                        <tr>
                                            <td>
                                                {{ $value->name }}
                                            </td>
                                            <td>
                                                {{ $value->slug }}
                                            </td>
                                            <td>
                                                {{ $value->description }}
                                            </td>
                                            <td>
                                                {{ $value->user->name }}
                                            </td>
                                            <td>
                                                {{ $value->created_at }}
                                            </td>
                                            <td>
                                                {{ $value->user_id }}
                                            </td>
                                            <td>
                                                <input type="submit" class="" value="View">
                                                <input type="submit" class="" value="Edit">
                                                <input type="submit" class="" value="Delete">
                                            </td>
                                        </tr>
                                        @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END PAGE CONTAINER-->


@endsection