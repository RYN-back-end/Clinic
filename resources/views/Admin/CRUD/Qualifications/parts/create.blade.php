<form id="addForm" class="addForm" method="POST" enctype="multipart/form-data" action="{{route('Qualifications.store')}}">
    @csrf
    <div class="modal-body">
        <div class="mb-3">
            <label class="form-label">Qualification Title</label>
            <input type="text" name="text" class="form-control" placeholder="Enter Qualification Title">
        </div>
    </div>
    <div class="modal-footer">
        <button type="submit" class="btn btn-primary" id="addButton">Submit</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    </div>
</form>
