@extends('Admin.Layout.app')
@section('title')
    Contact us
@endsection
@section('pageName')
    Contact us
@endsection
@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-sm-4">
                            <h4 class="card-title">Contacts Data</h4>
                            <p class="card-title-desc">

                            </p>
                        </div>

                        <div class="col-sm-8">
                            <div class="text-sm-end">
                            </div>
                        </div>
                    </div>

                    <table id="main-datatable" class="table table-bordered dt-responsive nowrap w-100">
                        <thead class="table-light">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Message</th>
                            <th>Created at</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                    </table>

                </div>
            </div>
        </div>
    </div>

    <!--  Large modal example -->
    <div class="modal fade bs-example-modal-lg mainModal" id="editOrCreate" data-bs-backdrop="static" data-bs-keyboard="false"
         tabindex="-1" role="dialog" aria-labelledby="mainModal" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><span id="operationType"></span> Admin</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="modal-body">

                </div>
            </div>
        </div>
    </div>


@endsection
@section('dashboard-js')
    <script>
        // Show Data Using YAJRA
        var columns = [
            {data: 'id', name: 'id'},
            {data: 'name', name: 'name'},
            {data: 'phone_number', name: 'phone_number'},
            {data: 'email', name: 'email'},
            {data: 'message', name: 'message'},
            {data: 'created_at', name: 'created_at' },
            {data: 'actions', name: 'actions'},
        ];
    </script>
    @include('Admin.Layout.inc.yajraHelper',['url'=>'contacts']);

@endsection


