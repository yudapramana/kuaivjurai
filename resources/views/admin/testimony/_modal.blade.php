<!-- Tambah Group -->
<div class="modal fade" id="tambahGroup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-lg" role="document">
        <form id="groupForm" method="post" action="/information/testimonies/store" enctype="multipart/form-data">
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


                            <input type="hidden" name="id_testimony" id="id_testimony" value="">


                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="name" name="name">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Jabatan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="jabatan" name="jabatan">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Content</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" rows="10" id="content" name="content"></textarea>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="profile_url" class="col-sm-2 col-form-label">Profile Picture</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="hidden" name="new-profile_url" id="new-profile_url">
                                    <button type="button" id="profile_url_btn" class="btn btn-secondary btn-sm">Unggah Cover</button>

                                    <div class="show-cover-box" style="display:none;">
                                        <img class="mb-2" id="preview-cover" src="" alt="logo_instansi" height="200"><br>
                                        <div class="mb-2">
                                            <button type="button" id="retry-cover-btn" class="btn btn-secondary btn-sm">Unggah Ulang</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Featured</label>
                                <div class="col-sm-10">
                                    <select class="form-select" id="featured" name="featured" aria-label="Default select example">
                                        <option selected="">Pilihan
                                        </option>
                                        <option selected value="no">no</option>
                                        <option value="yes">yes</option>
                                    </select>
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
