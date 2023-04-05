<script>

    var loader = `<div class="linear-background">
                            <div class="inter-crop"></div>
                            <div class="inter-right--top"></div>
                            <div class="inter-right--bottom"></div>
                        </div>`;

    // show data using yajra
    async function showData(routeOfShow, columns) {
        $('#main-datatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: routeOfShow,
            columns: columns,
            order: [
                [0, "DESC"]
            ],
            "language": {
                "sProcessing": "Loading...",
                "sLengthMenu": "Show _MENU_ records",
                "sZeroRecords": "There is no data",
                "sInfo": "Show _START_ To  _END_ From _TOTAL_ record",
                "sInfoEmpty": "There is no data",
                "sInfoFiltered": "to search",
                "sSearch": "Search  :  ",
                "oPaginate": {
                    "sPrevious": "Previous",
                    "sNext": "Next",
                },
                buttons: {
                    copyTitle: 'Copied To Clipboard <i class="fa fa-check-circle text-success"></i>',
                    copySuccess: {
                        1: "1 Row Has Copied",
                        _: "Copied %d Rows Successfully"
                    },
                }
            },

            dom: 'Bfrtip',
            buttons: [
                {
                    extend: 'copy',
                    text: 'copy',
                },
                {
                    extend: 'print',
                    text: 'print',
                },
                {
                    extend: 'excel',
                    text: 'excel',
                },
                {
                    extend: 'pdf',
                    text: 'PDF',
                },
                {
                    extend: 'colvis',
                    text: 'show',
                    className: 'btn-primary'
                },
            ]
        });
    }


    // Show Add Modal
    function showAddModal(routeOfShow){
        $(document).on('click', '#addBtn', function () {
            $('#modal-body').html(loader)
            $('#operationType').text('Add');
            $('#editOrCreate').modal('show')
            setTimeout(function () {
                $('#modal-body').load(routeOfShow)
            }, 500)
        });
    }

    // Create New Data By Ajax
    function addScript(){
        $(document).on('submit', 'Form#addForm', function (e) {
            e.preventDefault();
            var formData = new FormData(this);
            var url = $('#addForm').attr('action');
            $.ajax({
                url: url,
                type: 'POST',
                data: formData,
                beforeSend: function () {
                    $('#addButton').html('<span style="margin-right: 4px;">Loading</span><i class="bx bx-loader bx-spin"></i>');
                },
                success: function (data) {
                    if (data.status == 200) {
                        $('#main-dataTable').DataTable().ajax.reload();
                        // show custom message or use the default
                        toastr.success((data.message) ?? 'Data Added Successfully');
                    } else
                        toastr.error('Oops .. There is an error');
                    $('#addButton').html(`Submit`).attr('disabled', false);
                    $('#editOrCreate').modal('hide')
                },
                error: function (data) {
                    if (data.status === 500) {
                        toastr.error('Oops .. There is an error');
                    } else if (data.status === 422) {
                        var errors = $.parseJSON(data.responseText);
                        $.each(errors, function (key, value) {
                            if ($.isPlainObject(value)) {
                                $.each(value, function (key, value) {
                                    toastr.error(value);
                                });
                            }
                        });
                    } else
                        toastr.error('Oops .. There is an error');
                    $('#addButton').html(`Submit`).attr('disabled', false);
                },//end error method

                cache: false,
                contentType: false,
                processData: false
            });
        });
    }




</script>
