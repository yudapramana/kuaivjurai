<!-- Tambah Group -->
<div class="modal fade" id="tambahGroup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-xl" role="document">
        {{ csrf_field() }}
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><span id="judul-modal"></span> </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body modalBox">
                <form class="row g-2" id="groupForm" method="post" action="/reservations/store" enctype="multipart/form-data">

                    {{ csrf_field() }}


                    <input type="hidden" name="id_reservation" id="id_reservation" value="">


                    <div class="col-md-4 form-group">
                        <label for="customer_name" class="form-label">customer_name</label>
                        <input type="text" class="form-control" id="customer_name" name="customer_name" required>
                    </div>

                    <div class="col-md-4 form-group">
                        <label for="customer_phone" class="form-label">customer_phone</label>
                        <input type="text" class="form-control" id="customer_phone" name="customer_phone">
                    </div>

                    <div class="col-md-4 form-group">
                        <label for="total_guest" class="form-label">total_guest</label>
                        <input type="text" class="form-control" id="total_guest" name="total_guest">
                    </div>

                    <div class="col-md-4 form-group">
                        <label for="checkin_date" class="form-label">checkin_date</label>
                        <input type="date" class="form-control" id="checkin_date" name="checkin_date" required>
                    </div>

                    <div class="col-md-4 form-group">
                        <label for="fix_price" class="form-label">fix_price</label>
                        <input type="text" class="form-control" id="fix_price" name="fix_price">
                    </div>

                    <div class="col-md-4 form-group">
                        <label for="down_payment" class="form-label">down_payment</label>
                        <input type="text" class="form-control" id="down_payment" name="down_payment">
                    </div>

                    <div class="col-md-6 form-group">
                        <label for="notes" class="form-label">cottage_options</label>

                        <table class="table table-bordered table-hover table-sm">
                            <tr>
                                <th>Cottage</th>
                                <th>Total</th>
                            </tr>
                            @foreach($items as $key => $item)
                            <tr>
                                <td>Cottage {{$item->name}}</td>
                                <td><input type="number" name="id_item[{{$item->id_item}}]" value=""></td>
                            </tr>
                            @endforeach
                        </table>
                    </div>


                    {{-- @foreach($items as $key => $item) --}}
                    {{-- <div class="col">
                        <label for="{{ 'id_item_' . $item->id_item}}" class="form-label">{{$item->name}}</label>
                    <input type="number" class="form-control" id="{{ 'id_item_' . $item->id_item}}" name="{{ 'id_item_' . $item->id_item}}">
            </div> --}}
            {{-- @endforeach --}}

            <div class="col-md-6">
                <label for="notes" class="form-label">notes</label>

                <textarea class="form-control" name="notes" id="notes" cols="10" rows="7"></textarea>
            </div>


            {{-- <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Nama Pelanggan</label>
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
                            </div> --}}




            </form>

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button id="submitGroupBtn" type="button" class="btn btn-primary">Save
                changes</button>
        </div>
    </div>
</div>
</div>
