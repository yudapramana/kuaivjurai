<!-- Tambah Group -->
<div class="modal fade" id="fModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-lg" role="document">
        <form id="fForm" method="post" action="{{ route('roles.store') }}" enctype="multipart/form-data">
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


                            <input type="hidden" name="id_role" id="id_role" value="">
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-3 col-form-label">Nama Level User</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="name" name="name">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-3 col-form-label">Permissions</label>
                                <div class="col-sm-9">


                                    <div class="row mb-3">
                                        <strong class="col-sm-12 p-0">Menu</strong>
                                        @foreach ($permissions['menu'] as $perm)
                                        <div class="form-check col-sm-6">
                                            <input class="form-check-input" type="checkbox" id="permissions" name="permissions[]" value="{{ $perm->id }}">
                                            <label class="form-check-label">{{ $perm->name }}</label>
                                        </div>
                                        @endforeach
                                    </div>


                                    <div class="row">
                                        <strong class="col-sm-12 p-0">Page</strong>
                                        @foreach ($permissions['page'] as $perm)
                                        <div class="form-check col-sm-6">
                                            <input class="form-check-input" type="checkbox" id="permissions" name="permissions[]" value="{{ $perm->id }}">
                                            <label class="form-check-label">{{ $perm->name }}</label>
                                        </div>
                                        @endforeach
                                    </div>


                                </div>
                            </div>




                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button id="submitBtn" type="button" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>
