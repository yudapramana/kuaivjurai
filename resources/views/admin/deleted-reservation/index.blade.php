@extends('layouts.admin.master')
@section('title', $title)


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

    .form-label {
        font-weight: bold;
    }

    table td {
        position: relative;
    }

    table td input {
        position: absolute;
        display: block;
        top: 0;
        left: 0;
        margin: 0;
        height: 100% !important;
        width: 100%;
        border-radius: 0 !important;
        border: none;
        padding: 10px;
        box-sizing: border-box;
    }

    .dataTables_scrollHeadInner,
    .table {
        width: 100% !important
    }

    table.dataTable th {
        font-size: 0.8em !important;
    }

    table.dataTable td {
        font-size: 0.8em !important;
    }

    table.dataTable tr.dtrg-level-0 td {
        font-size: 0.8em !important;
    }

    tr.group,
    tr.group:hover {
        background-color: #ddd !important;
    }

    .bolderfont {
        font-weight: bold;
    }

    .table>:not(caption)>*>* {
        padding-top: 0 !important;
        padding-right: 0.5em;
        padding-bottom: 0 !important;
        padding-left: 0.5em;
        background-color: var(--bs-table-bg);
        border-bottom-width: 1px;
        box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);
    }

    .tbl_foot {
        font-size: larger !important;
    }

    .select2 {
        width: 100% !important;
    }

    .select2-selection {
        overflow: hidden;
    }

    .select2-selection__rendered {
        white-space: normal;
        word-break: break-all;
    }

</style>
@endsection





@section('content')

<main id="main" class="main">
    <div class="pagetitle">
        <h1>{{ $title }}
        </h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">{{ $br1 }}</a></li>
                <li class="breadcrumb-item active">{{ $br2 }}</li>

            </ol>
        </nav>

    </div>
    <section class="section" id="specialstuff">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{$title}} List</h5>

                        <div class="alert alert-primary">
                            <div class="row" id="filter_wrapper">

                            </div>
                        </div>

                        <table class='table table-bordered display' id="example" style="width:100%; font-size:11pt!important;table=layout:fixed;">
                            <thead>
                                <tr>
                                    <th width="5%" rowspan="2" scope="col" class="align-middle text-center">#</th>
                                    {{-- <th rowspan="2" scope="col" class="align-middle text-center">Hari</th> --}}
                                    <th rowspan="2" scope="col" class="align-middle text-center">Tanggal</th>
                                    <th rowspan="2" scope="col" class="align-middle text-center">Nama</th>
                                    <th rowspan="2" scope="col" class="align-middle text-center">Kontak</th>
                                    <th rowspan="2" scope="col" class="align-middle text-center">Total Bayar</th>
                                    <th rowspan="2" scope="col" class="align-middle text-center">Down Payment</th>
                                    <th colspan="5" class="align-middle text-center">Cottage</th>
                                    <th rowspan="2" scope="col" class="align-middle text-center">Keterangan</th>
                                    <th width="15%" rowspan="2" scope="col" class="align-middle text-center">Action</th>
                                </tr>
                                <tr>
                                    @foreach($items as $key => $item)
                                    <th scope="col" style="background-color: chartreuse;">{{$item->name}}</th>
                                    @endforeach
                                </tr>
                            </thead>

                            <tfoot>
                                <tr class="tbl_foot">
                                    <th class="text-end" colspan="4" style="background-color:gold;align-text:right;">Total</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th colspan="2" style="background-color:gold"></th>
                                </tr>
                            </tfoot>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('admin.reservation._modal')


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
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>



<script>
    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: 'btn btn-success px-3 mx-3'
            , cancelButton: 'btn btn-danger px-3 mx-3'
        }
        , buttonsStyling: false
    });

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

    // document.getElementById("cover_image_url_btn").addEventListener("click", function() {
    //     coverWidget.open();
    // }, false);

    $('.select2').select2({
        theme: 'bootstrap-5'
        , dropdownParent: $("#tambahGroup")
    , });

    $("#select2insidemodal").select2({
        dropdownParent: $("#myModal")
    });

    function numberWithCommas(x) {
        return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
    }


    var table = $('#example').DataTable({
        processing: true
        , orderable: false
        , paging: false
        , sort: false
        , order: false
        , lengthChange: false
        , responsive: false
        , ajax: '/deleted-reservations/{{$yearMonth}}'

            // , scrollX: true
            // , sScrollXInner: "100%"
        , autoWidth: false
        , lengthMenu: [
            [10, 25, 50, -1]
            , ['10 rows', '25 rows', '50 rows', 'Show all']
        ]
        , iDisplayLength: 50
        , initComplete: function(settings, json) {
            $("#example").wrap("<div style='overflow:auto; width:100%;position:relative;'></div>");

            console.log(json)

            table.buttons().container()
                .appendTo('#example_wrapper .col-md-6:eq(0)');

            $(json.html_filter).appendTo('#filter_wrapper');

            $('.select2-filter').select2({
                theme: 'bootstrap-5'
                , dropdownParent: $("#example_wrapper")
                , width: '100%'

            });

            $(document).on('select2:select', '.yearmonth_filter', function(e) {
                console.log('data filter')

                yearmonth_filter = $(this).val();


                console.log('yearmonth_filter')
                console.log(yearmonth_filter)
                table.ajax.url('/deleted-reservations/' + yearmonth_filter).load(false);
            });


        }
        , buttons: [
            // {
            //     extend: 'pageLength'
            //     , attr: {
            //         'class': 'btn btn-secondary btn-sm'
            //     }
            // },
            {
                text: '<i class="fa fa-plus-circle"></i> Tambah'
                , attr: {
                    'title': 'Import Data'
                    , 'data-bs-original-title': 'Import Data'
                    , 'data-bs-target': '#tambahGroup'
                    , 'data-bs-toggle': 'modal'
                    , 'data-bs-backdrop': 'static'
                    , 'data-bs-keyboard': 'false'
                    , 'data-bs-title': 'Tambah Baru'
                    , 'data-title': 'Tambah Baru'
                    , 'type': 'button'
                    , 'id': 'addBtn'
                    , 'class': 'btn btn-primary btn-sm'
                }
                , action: function(e, dt, node, config) {
                    // alert('Button activated');
                }
            }, {
                text: '<i class="fa fa-refresh"></i>  Reload'
                , attr: {
                    'title': 'Refresh Table'
                    , 'class': 'btn btn-warning btn-sm'
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
            }, {
                extend: 'excelHtml5'
                , attr: {
                    'class': 'btn btn-secondary btn-sm'
                }
                , title: 'Jadwal Tamu Penginapan'
                , messageTop: 'Resort & Cottage Pandan View Mandeh'
                , messageBottom: 'The information in this table is copyright to Pandan View Mandeh.'
                , orientation: 'landscape'
                , customizeData: function(data) {
                    for (var i = 0; i < data.body.length; i++) {
                        for (var j = 0; j < data.body[i].length; j++) {
                            data.body[i][j] = '\u200C' + data.body[i][j];
                        }
                    }
                }
                , customize: function(xlsx) {
                    var sheet = xlsx.xl.worksheets['sheet1.xml'];

                    $('row c[r^="E"]', sheet).attr('s', '52');
                    $('row c[r^="F"]', sheet).attr('s', '52');
                    $('row c[r^="G"]', sheet).attr('s', '51');
                    $('row c[r^="H"]', sheet).attr('s', '51');
                    $('row c[r^="I"]', sheet).attr('s', '51');
                    $('row c[r^="J"]', sheet).attr('s', '51');

                    $('row:eq(0) c', sheet).attr('s', '2');
                    $('row:eq(1) c', sheet).attr('s', '2');
                    $('row:eq(2) c', sheet).attr('s', '2');
                    $('row:last c', sheet).attr('s', '2');
                    $('row:eq(0) c', sheet).attr('s', '51');
                    $('row:eq(1) c', sheet).attr('s', '51');
                    $('row:eq(2) c', sheet).attr('s', '51');
                    $('row:last c', sheet).attr('s', ['2', '51']);

                }
                , footer: true
            }
        ]
        , columns: [{
                data: 'DT_RowIndex'
                , name: 'DT_RowIndex'
                , className: 'text-center align-middle'
            },
            //  {
            //     data: 'date_alphabet'
            //     , name: 'date_alphabet'
            //     , className: 'text-center align-middle'
            // }, 
            {
                data: 'date_full'
                , name: 'date_full'
                , className: 'text-center align-middle'
            }, {
                data: 'customer_name'
                , name: 'customer_name'
                , className: 'align-middle bolderfont'
            }, {
                data: 'customer_phone'
                , name: 'customer_phone'
                , className: 'align-middle'
            }, {
                data: 'fix_price'
                , name: 'fix_price'
                , className: 'text-end align-middle'
                , render: function(data, type, row) {
                    console.log('type');
                    console.log(type);
                    return type === 'export' ? data : (data ? numberWithCommas(data) : '0');
                }
            }, {
                data: 'down_payment'
                , name: 'down_payment'
                , className: 'text-end align-middle'
                , render: function(data, type, row) {
                    console.log('type');
                    console.log(type);
                    return type === 'export' ? data : (data ? numberWithCommas(data) : '0');
                }
            }
            , {
                data: 'slot.0.total_room'
                , name: 'slot.0.total_room'
                , className: 'text-center align-middle'
                , sDefaultContent: '0'
                , render: function(data, type, row) {
                    if (data == 0) {
                        return '';
                    } else {
                        return `<b>${data}</b>`;
                    }
                }
            }, {
                data: 'slot.1.total_room'
                , name: 'slot.1.total_room'
                , className: 'text-center align-middle'
                , sDefaultContent: '0'
                , render: function(data, type, row) {
                    if (data == 0) {
                        return '';
                    } else {
                        return `<b>${data}</b>`;
                    }
                }
            }, {
                data: 'slot.2.total_room'
                , name: 'slot.2.total_room'
                , className: 'text-center align-middle'
                , sDefaultContent: '0'
                , render: function(data, type, row) {
                    if (data == 0) {
                        return '';
                    } else {
                        return `<b>${data}</b>`;
                    }
                }
            }, {
                data: 'slot.3.total_room'
                , name: 'slot.3.total_room'
                , className: 'text-center align-middle'
                , sDefaultContent: '0'
                , render: function(data, type, row) {
                    if (data == 0) {
                        return '';
                    } else {
                        return `<b>${data}</b>`;
                    }
                }
            }, {
                data: 'slot.4.total_room'
                , name: 'slot.4.total_room'
                , className: 'text-center align-middle'
                , sDefaultContent: '0'
                , render: function(data, type, row) {
                    if (data == 0 || typeof data === "undefined") {
                        return '';
                    } else {
                        return `<b>${data}</b>`;
                    }
                }
            }, {
                data: 'memorandum'
                , name: 'memorandum'
            }, {
                data: 'action'
                , name: 'action'
                , className: 'text-center align-middle'
            }
        , ]
        , columnDefs: [{
            visible: false
            , targets: 1
        }]
        , "order": [
            [1, 'asc']
        ]
        , "drawCallback": function(settings) {
            var api = this.api();
            var rows = api.rows({
                page: 'current'
            }).nodes();
            var last = null;

            api.column(1, {
                page: 'current'
            }).data().each(function(group, i) {
                if (last !== group) {
                    $(rows).eq(i).before(
                        '<tr class="group"><td colspan="12">' + group + '</td></tr>'
                    );

                    last = group;
                }
            });
        }
        , footerCallback: function(row, data, start, end, display) {
            let api = this.api();

            // Remove the formatting to get integer data for summation
            let intVal = function(i) {
                return typeof i === 'string' ?
                    i.replace(/[\$,]/g, '') * 1 :
                    typeof i === 'number' ?
                    i :
                    0;
            };

            // // Total over all pages
            // total = api
            //     .column(4)
            //     .data()
            //     .reduce((a, b) => intVal(a) + intVal(b), 0);

            // Total over this page
            pageTotal = api
                .column(4, {
                    page: 'current'
                })
                .data()
                .reduce((a, b) => intVal(a) + intVal(b), 0);

            // Update footer
            api.column(4).footer().innerHTML = numberWithCommas(pageTotal);


            // Total over this page
            pageTotalA = api
                .column(5, {
                    page: 'current'
                })
                .data()
                .reduce((a, b) => intVal(a) + intVal(b), 0);

            // Update footer
            api.column(5).footer().innerHTML = numberWithCommas(pageTotalA);


            // Total over this page
            pageTotalB = api
                .column(6, {
                    page: 'current'
                })
                .data()
                .reduce((a, b) => intVal(a) + intVal(b), 0);

            // Update footer
            api.column(6).footer().innerHTML = pageTotalB;

            // Total over this page
            pageTotalC = api
                .column(7, {
                    page: 'current'
                })
                .data()
                .reduce((a, b) => intVal(a) + intVal(b), 0);

            // Update footer
            api.column(7).footer().innerHTML = pageTotalC;

            // Total over this page
            pageTotalD = api
                .column(8, {
                    page: 'current'
                })
                .data()
                .reduce((a, b) => intVal(a) + intVal(b), 0);

            // Update footer
            api.column(8).footer().innerHTML = pageTotalD;

            // Total over this page
            pageTotalE = api
                .column(9, {
                    page: 'current'
                })
                .data()
                .reduce((a, b) => intVal(a) + intVal(b), 0);

            // Update footer
            api.column(9).footer().innerHTML = pageTotalE;

            // Total over this page
            pageTotalF = api
                .column(10, {
                    page: 'current'
                })
                .data()
                .reduce((a, b) => intVal(a) + intVal(b), 0);

            // Update footer
            api.column(10).footer().innerHTML = pageTotalE;
        }
    , });

    // Order by the grouping
    $('#example tbody').on('click', 'tr.group', function() {
        var currentOrder = table.order()[0];
        if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
            table.order([2, 'desc']).draw();
        } else {
            table.order([2, 'asc']).draw();
        }
    });


    $(document).ready(function() {

        $('#groupForm').validate({
            rules: {
                customer_name: {
                    required: true
                }
                , total_guest: {
                    digits: true
                }
                , fix_price: {
                    digits: true
                }
                , down_payment: {
                    required: true
                    , digits: true
                }
            , }
            , errorElement: 'div'
            , errorPlacement: function(error, element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            }
            , highlight: function(element, errorClass, validClass) {
                $(element).addClass('is-invalid');
            }
            , unhighlight: function(element, errorClass, validClass) {
                $(element).removeClass('is-invalid');
            }
        });


        // table.ajax.url('/deleted-reservations/{{$yearMonth}}').load();

        console.log('mana neeee');

        table.buttons().container()
            .appendTo('#example_wrapper .col-md-6:eq(0)');

        $('.toggle-sidebar-btn').on('click', function() {
            setTimeout(function() {
                table.columns.adjust();
            }, 500);
        });

        $(document).on("click", "#addBtn", function() {
            var title = $(this).data('title');
            $("#judul-modal").html(title);
            $("#id_gallery").val('');

            $('#customer_name').val('');
            $('#customer_phone').val('');
            $('#total_guest').val('');
            $('#checkin_date').val('');
            $('#fix_price').val('');
            $('#down_payment').val('');
            $('#notes').val('');
            $("input[name='id_item[1]']").val('');
            $("input[name='id_item[2]']").val('');
            $("input[name='id_item[3]']").val('');
            $("input[name='id_item[4]']").val('');


        });

        $(document).on("click", "#editBtn", function() {
            $("#judul-modal").html('Edit Data Reservasi');
            var data = table.row($(this).parents('tr')).data();
            console.log(data);
            $("#id_reservation").val(data.id_reservation);

            $('#customer_name').val(data.customer_name);
            $('#customer_phone').val(data.customer_phone);
            $('#total_guest').val(data.total_guest);
            $('#checkin_date').val(data.checkin_date);
            $('#fix_price').val(data.fix_price);
            $('#down_payment').val(data.down_payment);
            $('#notes').val(data.notes);

            $.each(data.slot, function(key, item) {
                $("input[name='id_item[" + item.id_item + "]']").val(item.total_room);
            });

        });


    });

    $("#submitGroupBtn").on("click", function(event) {
        event.preventDefault();
        $('#groupForm').validate();
        var valid = $('#groupForm').valid();
        console.log('valid');
        console.log(valid);

        if (valid) {
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

        } else {
            Swal.fire(
                'Error!', 'Data yang di input belum lengkap', 'error'
            );
        }

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

    $(document).on("click", "#restoreBtn", function() {
        event.preventDefault();
        var idItem = $(this).data('id_reservation');

        swalWithBootstrapButtons.fire({
            title: 'Apakah anda yakin akan memulihkan data tersebut?'
            , text: "Anda tidak dapat mengembalikan file yang sudah dihapus!"
            , icon: 'warning'
            , showCancelButton: true
            , confirmButtonText: 'Ya, Pulihkan!'
            , cancelButtonText: 'Tidak, batalkan!'
            , reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                var url = "{{ route('reservations.restore', ':id') }}";
                url = url.replace(':id', idItem);
                $.ajax({
                    type: 'DELETE'
                    , url: url
                    , dataType: 'json', // let's set the expected response format
                    success: function(data) {
                        console.log(data);
                        if (data.success) {
                            $('#tambahGroup').modal('hide');
                            swalWithBootstrapButtons.fire(
                                'Dihapus!'
                                , 'Data berhasil dipulihkan, silahkan cek fitur reservasi'
                                , 'success'
                            )
                        } else {
                            Swal.fire(
                                'Error!', data.message, 'error'
                            );
                        }
                        table.ajax.reload(null, false);
                    }
                    , error: function(err) {
                        if (err.status ==
                            422
                        ) { // when status code is 422, it's a validation issue
                            console.log(err.responseJSON);
                            // you can loop through the errors object and show it to the user
                            console.warn(err.responseJSON.errors);
                            // display errors on each form field
                            $('.ajax-invalid').remove();
                            $.each(err.responseJSON.errors, function(i, error) {
                                var el = $(document).find('[name="' +
                                    i + '"]');
                                el.after($('<span class="ajax-invalid" style="color: red;">' +
                                    error[0] + '</span>'));
                            });
                        } else if (err.status == 403) {
                            Swal.fire(
                                'Unauthorized!'
                                , 'You are unauthorized to do the action'
                                , 'warning'
                            );
                        }
                    }
                });
            } else if (
                /* Read more about handling dismissals below */
                result.dismiss === Swal.DismissReason.cancel
            ) {
                swalWithBootstrapButtons.fire(
                    'Dibatalkan!', 'Data Aman', 'error'
                )
            }
        });

    });

</script>



@endsection
