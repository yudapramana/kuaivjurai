<!-- Tambah Group -->
<div class="modal fade" id="tambahGroup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-lg" role="document">
        <form id="groupForm" method="post" action="/information/products/store" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><span id="judul-modal"></span> </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body modalBox">

                    {{ csrf_field() }}

                    <div class="row card-body">
                        <div class="col-12">


                            <input type="hidden" name="id_product" id="id_product" value="">
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nama" name="nama">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Layanan</label>
                                <div class="col-sm-10">
                                    <select class="form-select select2" id="id_service" name="id_service" aria-label="Default select example">
                                        @foreach($services as $key => $service)
                                        <option value="{{$service->id_service}}">{{$service->title_id}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Title Id</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="title_id" name="title_id">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Title En</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="title_en" name="title_en">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Slug</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="slug" name="slug">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Deskripsi Layanan</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" rows="10" id="deskripsi" name="deskripsi"></textarea>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="cover_image_url" class="col-sm-2 col-form-label">Cover Image</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="hidden" name="new-cover_image_url" id="new-cover_image_url">
                                    <button type="button" id="cover_image_url_btn" class="btn btn-secondary btn-sm">Unggah Cover</button>

                                    <div class="show-cover-box" style="display:none;">
                                        <img class="mb-2" id="preview-cover" src="" alt="logo_instansi" height="200"><br>
                                        <div class="mb-2">
                                            <button type="button" id="retry-cover-btn" class="btn btn-secondary btn-sm">Unggah Ulang</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Next URL</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="next_url" name="next_url" placeholder="next url">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button id="submitGroupBtn" type="button" class="btn btn-primary">Save
                        changes</button>
                </div>
            </div>
        </form>
    </div>
</div>


{{-- View Contact --}}
<div class="modal fade" id="largeModal" tabindex="-1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    <span id="judul-dalem"></span>&nbsp;-&nbsp;
                    <span id="deksripsi-dalem"></span>&nbsp;-&nbsp;
                    <span id="tipe-dalem"></span>
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <table class='table table-bordered display' id="jemaahTbl" style="width:100%; font-size:9pt!important;">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal Daftar</th>
                            <th>Nama Lengkap</th>
                            <th>Jenis Kelamin</th>
                            <th>No. HP</th>
                            <th>Kecamatan</th>
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
