<form id="updateForm" class="updateForm" method="POST" enctype="multipart/form-data" action="{{route('Qualifications.update',$row->id)}}">
    @csrf
    @method('PUT')
    <div class="modal-body">
        <input type="hidden" value="{{$row->id}}" name="id">
        <div class="mb-3">
            <label class="form-label">Qualification Title</label>
            <input type="text" name="text" class="form-control" placeholder="Enter title of the Qualification" value="{{$row->text}}">
        </div>

    </div>
    <div class="modal-footer">
        <button type="submit" class="btn btn-success" id="updateButton">Update</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    </div>
</form>
