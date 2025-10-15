@extends('layouts.admin.master')
@section('title', 'Service List')


@section('_styles')
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.bootstrap5.min.css">

<style>
    .profile .profile-edit img {
        max-width: 120px;
    }

    #profile_photo_src {
        max-width: 120px;
    }

    .profile-edit {
        max-width: 120px;
    }

    .preserveLines {
        white-space: pre-wrap;
    }

</style>
@endsection





@section('content')

<main id="main" class="main">
    <div class="pagetitle">
        <h1>{{ $title }}</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">{{ $br1 }}</a></li>
                <li class="breadcrumb-item active">{{ $br2 }}</li>
            </ol>
        </nav>
    </div>
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Daftar Layanan</h5>

                        <table class='table table-bordered display' id="example" style="width:100%; font-size:11pt!important;">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama - Deskripsi</th>
                                    <th>Cover</th>
                                    <th>Content</th>
                                    <th width="10%">Aksi</th>
                                </tr>
                            </thead>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('admin.services._modal')


</main>




@endsection


@section('_scripts')

<!-- Styles -->
{{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" /> --}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />
<!-- Or for RTL support -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.rtl.min.css" />

<!-- Scripts -->
{{-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script> --}}
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>





<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.bootstrap5.min.js"></script>

<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.colVis.min.js"></script>


<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://upload-widget.cloudinary.com/global/all.js" type="text/javascript"></script>


<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    // Cover
    var coverWidget = cloudinary.createUploadWidget({
        cloudName: 'dezj1x6xp'
        , uploadPreset: 'pandanviewmandeh'
        , theme: 'minimal'
        , multiple: false
        , max_file_size: 10048576
        , background: "white"
        , quality: 20
    }, (error, result) => {
        if (!error && result && result.event === "success") {
            console.log('Info Arsip Masuk: ', result.info);
            var linklogo = result.info.secure_url;
            $('#new-cover_image_url').val(linklogo);

            $('#cover_image_url_btn').hide();

            $('.show-cover-box').show();
            $('#preview-cover').attr("src", linklogo);

        }
    });

    document.getElementById("cover_image_url_btn").addEventListener("click", function() {
        coverWidget.open();
    }, false);

    // Content
    var contentWidget = cloudinary.createUploadWidget({
        cloudName: 'dezj1x6xp'
        , uploadPreset: 'pandanviewmandeh'
        , theme: 'minimal'
        , multiple: false
        , max_file_size: 10048576
        , background: "white"
        , quality: 20
    }, (error, result) => {
        if (!error && result && result.event === "success") {
            console.log('Info Arsip Masuk: ', result.info);
            var linklogo = result.info.secure_url;
            $('#new-content_image_url').val(linklogo);

            $('#content_image_url_btn').hide();

            $('.show-content-box').show();
            $('#preview-content').attr("src", linklogo);

        }
    });

    document.getElementById("content_image_url_btn").addEventListener("click", function() {
        contentWidget.open();
    }, false);

    $('.select2').select2({
        theme: 'bootstrap-5'
        , dropdownParent: $("#tambahGroup")
    , });

    $("#select2insidemodal").select2({
        dropdownParent: $("#myModal")
    });




    var table = $('#example').DataTable({
        orderable: false
        , sort: false
        , order: false
        , lengthChange: false
        , responsive: false
        , scrollX: true
        , autoWidth: false
        , lengthMenu: [
            [10, 25, 50, -1]
            , ['10 rows', '25 rows', '50 rows', 'Show all']
        ]
        , iDisplayLength: 50
        , buttons: [
            'pageLength', {
                text: '<i class="fa fa-plus-circle"></i> Tambah'
                , attr: {
                    'title': 'Import Data'
                    , 'data-bs-original-title': 'Import Data'
                    , 'data-bs-target': '#tambahGroup'
                    , 'data-bs-toggle': 'modal'
                    , 'data-bs-backdrop': 'static'
                    , 'data-bs-keyboard': 'false'
                    , 'data-bs-title': 'Tambah Layanan Baru'
                    , 'data-title': 'Tambah Layanan Baru'
                    , 'type': 'button'
                    , 'id': 'addBtn'
                    , 'class': 'btn btn-primary'
                }
                , action: function(e, dt, node, config) {
                    // alert('Button activated');
                }
            }, {
                text: '<i class="fa fa-refresh"></i>  Reload'
                , attr: {
                    'title': 'Refresh Table'
                    , 'class': 'btn btn-warning'
                }
                , action: function(e, dt, node, config) {
                    dt.ajax.reload(null, false);
                    $('#example').block({
                        message: `Loading...`
                    });
                    setTimeout(function() {
                        $('#example').unblock();
                    }, 1500);
                }
            }
        ]
        , initComplete: function(e, dt, node, config) {

        }
        , columns: [{
            data: 'DT_RowIndex'
            , name: 'DT_RowIndex'
            , className: 'text-center'
        }, {
            data: 'name-description'
            , name: 'name-description'
        , }, {
            data: 'cover'
            , name: 'cover'
            , className: 'text-center align-middle'
        }, {
            data: 'content'
            , name: 'content'
            , className: 'text-center align-middle'
        }, {
            data: 'action'
            , name: 'action'
            , className: 'text-center align-middle'
        }, ]
    });


    $(document).ready(function() {
        table.ajax.url('/information/services').load();
        console.log('mana neeee');

        table.buttons().container()
            .appendTo('#example_wrapper .col-md-6:eq(0)');

        $('.toggle-sidebar-btn').on('click', function() {
            setTimeout(function() {
                table.columns.adjust();
            }, 500);
        });

        $(document).on('click', '#viewBtn', function(e) {
            var data = table.row($(this).parents('tr')).data();
            console.log(data);
            jemaahTbl.clear().draw();
            jemaahTbl.ajax.url('/group-contact/fetch/' + data.id_service).load();
            $('#judul-dalem').html(data.nama);
            $('#deksripsi-dalem').html(data.deskripsi);
            $('#tipe-dalem').html(data.tipe);

        });




        $(document).on("click", "#addBtn", function() {
            var title = $(this).data('title');
            $("#judul-modal").html(title);
            $("#id_service").val('');
            $('#nama').prop('disabled', false);
            $('#deskripsi').prop('disabled', false);
            $('#tipe').prop('disabled', false);
            $('#nama').val('');
            $('#slug').val('');
            $('#next_url').val('');
            $('#deskripsi').val('');
            $('#featured').val('no').trigger('change');
            $('#listed').val('yes').trigger('change');

            $('#cover_image_url_btn').show();
            // $('.show-cover-box-edit').hide();

            $('#content_image_url_btn').show();
            // $('.show-content-box-edit').hide();

            $('#new-cover_image_url_').val('');
            $('#new-content_image_url_').val('');

            $('.show-cover-box').hide();
            $('#preview-cover').attr("src", '');

            $('.show-content-box').hide();
            $('#preview-content').attr("src", '');


        });

        $(document).on("click", "#editBtn", function() {
            $("#judul-modal").html('Edit Data Group');
            var data = table.row($(this).parents('tr')).data();
            console.log(data);
            $("#id_service").val(data.id_service);

            $('#nama').val(data.name);
            $('#title_id').val(data.title_id);
            $('#title_en').val(data.title_en);
            $('#slug').val(data.slug);
            $('#next_url').val(data.next_url);
            $('#deskripsi').val(data.description);
            $('#featured').val(data.featured).trigger('change');
            $('#listed').val(data.listed).trigger('change');

            $('#nama').prop('disabled', false);
            $('#deskripsi').prop('disabled', false);


            $('#new-cover_image_url').val(data.cover_image_url);
            $('#cover_image_url_btn').hide();
            $('.show-cover-box').show();
            $('#preview-cover').attr("src", data.cover_image_url);

            $('#new-content_image_url').val(data.content_image_url);
            $('#content_image_url_btn').hide();
            $('.show-content-box').show();
            $('#preview-content').attr("src", data.content_image_url);

        });


    });

    $("#submitGroupBtn").on("click", function(event) {
        event.preventDefault();

        $('.modalBox').block({
            message: null
        });

        $('#submitGroupBtn').prop("disabled", true);

        var formdata = $("#groupForm").serialize(); // here $(this) refere to the form its submitting
        console.log(formdata);

        url = $('#groupForm').attr('action');
        $.ajax({
            type: 'POST'
            , url: url
            , data: formdata, // here $(this) refers to the ajax object not form
            dataType: 'json', // let's set the expected response format
            success: function(data) {
                setTimeout(function() {
                    $('#submitGroupBtn').prop("disabled", false);
                    $('.modalBox').unblock();
                    console.log(data);
                    if (data.success == 'yeah') {
                        $('#tambahGroup').modal('hide');
                        table.ajax.reload(null, false);
                        Swal.fire(
                            'Great!', 'Data sukses di update!', 'success'
                        );
                    } else {
                        Swal.fire(
                            'Error!', data.message, 'error'
                        );
                    }


                }, 1500);

            }
            , error: function(err) {
                if (err.status == 422) { // when status code is 422, it's a validation issue
                    console.log(err.responseJSON);
                    // you can loop through the errors object and show it to the user
                    console.warn(err.responseJSON.errors);
                    // display errors on each form field
                    $('.ajax-invalid').remove();
                    $.each(err.responseJSON.errors, function(i, error) {
                        var el = $(document).find('[name="' + i + '"]');
                        el.after($('<span class="ajax-invalid" style="color: red;">' +
                            error[0] + '</span>'));
                    });
                } else if (err.status == 403) {
                    Swal.fire(
                        'Unauthorized!', 'You are unauthorized to do the action', 'warning'
                    );

                }
            }
        });



    });

    $(document).on('click', '#retry-cover-btn', function(e) {
        $('#cover_image_url_btn').show();
        $('.show-cover-box').hide();
    });

    $(document).on('click', '#retry-cover-btn-edit', function(e) {
        $('#cover_image_url_btn-edit').show();
        $('.show-cover-box-edit').hide();
    });

    $(document).on('click', '#retry-content-btn', function(e) {
        $('#content_image_url_btn').show();
        $('.show-content-box').hide();
    });

    $(document).on('click', '#retry-content-btn-edit', function(e) {
        $('#content_image_url_btn-edit').show();
        $('.show-content-box-edit').hide();
    });

</script>
@endsection
