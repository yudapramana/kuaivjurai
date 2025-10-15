<!-- Tambah Group -->
<div class="modal fade" id="tambahGroup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-lg" role="document">
        <form id="groupForm" method="post" action="/blog/tags" enctype="multipart/form-data">
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


                            <input type="hidden" name="id_tag" id="id_tag" value="">


                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="name" name="name">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Slug</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="slug" name="slug">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Keywords</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="keywords" name="keywords">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Meta Description</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="meta_desc" name="meta_desc">
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
