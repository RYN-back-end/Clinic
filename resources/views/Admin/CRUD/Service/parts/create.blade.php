<form id="addForm" class="addForm" method="POST" enctype="multipart/form-data" action="{{route('services.store')}}">
    @csrf
    <div class="modal-body">
        <div class="mb-3 h-25">
            <label class="form-label">Photo</label>
            <input type="file" class="dropify" name="image" data-default-file="{{getFile()}}"
                   accept="image/png, image/gif, image/jpeg,image/jpg, image/webp"/>
            <span class="form-text text-info">Accept Only : png, gif, jpeg, jpg, webp</span>
        </div>
        <div class="mb-3">
            <label class="form-label">Service Title</label>
            <input type="text" name="title" class="form-control" placeholder="Enter Service Title">
        </div>
        <div class="mb-3">
            <label class="form-label">Service Description</label>
            <input type="text" name="desc" class="form-control" placeholder="Enter Service Short Description">
        </div>

    </div>
    <div class="modal-footer">
        <button type="submit" class="btn btn-primary" id="addButton">Submit</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    </div>
</form>

<script>
    $('.dropify').dropify("Upload Here");
</script>
