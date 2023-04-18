@extends('Admin.Layout.app')
@section('title')
    Qualifications
@endsection
@section('pageName')
    Qualifications
@endsection
@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-sm-4">
                            <h4 class="card-title">Qualifications Data</h4>
                            <p class="card-title-desc">
                                Add Your Qualifications and Education information
                            </p>
                        </div>

                        <div class="col-sm-8">
                            <div class="text-sm-end">
                                <button type="button" id="addBtn"
                                        class="btn btn-success btn-rounded waves-effect waves-light mb-2 me-2"><i
                                        class="mdi mdi-plus me-1"></i> Add New
                                </button>

                                <button type="button" id="editSectionBtn" data-bs-toggle="modal" data-bs-target="#editSectionModal"
                                        class="btn btn-primary btn-rounded waves-effect waves-light mb-2 me-2"><i
                                        class="mdi mdi-book-edit me-1"></i> Edit Section
                                </button>

                            </div>
                        </div>
                    </div>

                    <table id="main-datatable" class="table table-bordered dt-responsive nowrap w-100">
                        <thead class="table-light">
                        <tr>
                            <th>ID</th>
                            <th>title</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                    </table>

                </div>
            </div>
        </div>
    </div>

    <!--  Large modal example -->
    <div class="modal fade bs-example-modal-lg mainModal" id="editOrCreate" data-bs-backdrop="static"
         data-bs-keyboard="false"
         tabindex="-1" role="dialog" aria-labelledby="mainModal" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><span id="operationType"></span> Qualification</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="modal-body">

                </div>
            </div>
        </div>
    </div>


    <!-- EDIT Section Modal -->
    <div class="modal fade bs-example-modal-lg" id="editSectionModal" data-bs-backdrop="static" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Section</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('editQualificationSection')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                <div class="modal-body">
                    <div class="mb-3 h-25">
                        <label class="form-label">Photo</label>
                        <input type="file" class="dropify" name="qualification_image" data-default-file="{{getFile(($sectionData['qualification_image']) ?? '')}}"
                               accept="image/png, image/gif, image/jpeg,image/jpg, image/webp"/>
                        <span class="form-text text-info">Accept Only : png, gif, jpeg, jpg, webp</span>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Section Text</label>
                        <input type="text" name="qualification_desc" class="form-control" placeholder="Enter Text of the Section" value="{{($sectionData->qualification_desc) ?? ''}}">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success" id="updateSectionButton">Save Change</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
                </form>
            </div>
        </div>
    </div>

@endsection
@section('dashboard-js')
    <script>
        $('.dropify').dropify("Upload Here");
    </script>
    <script>
        // Show Data Using YAJRA
        var columns = [
            {data: 'id', name: 'id'},
            {data: 'text', name: 'text'},
            {data: 'actions', name: 'actions'},
        ];
    </script>
    @include('Admin.Layout.inc.yajraHelper',['url'=>'Qualifications']);
@endsection


