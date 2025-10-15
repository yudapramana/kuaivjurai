<?php

namespace App\Http\Controllers\Admin;

use App\Models\Products;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DataTables;


class ProductController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $products = Products::with('service')->get();

            return Datatables::of($products)
                ->addIndexColumn()
                ->addColumn('action', function ($product) {
                    $btn = '';
                    $btn .= '<button id="editBtn" type="button" class="btn btn-sm btn-warning btn-xs" data-bs-toggle="modal" data-bs-target="#tambahGroup" data-bs-title="Edit Data" data-title="Edit Data Pengguna"><i class="bi bi-pencil-square"></i></button>&nbsp;';

                    if ($product->featured == 'no') {
                        $btn .= '<button id="destroyBtn" type="button" class="btn btn-sm btn-danger btn-xs" data-bs-id_product="' . $product->id_product  . '" data-id_product="' .  $product->id_product  . '"><i class="bi bi-trash-fill"></i></button>';
                    }
                    return $btn;
                })
                ->addColumn('cover', function ($product) {
                    $img = $product->cover_image_url;
                    if ($img) {
                        $html = '<div class="profile-edit">
                                    <img class="profile-edit" id="profile_photo_jst" src="' . $img . '" alt="None">
                                </div>';
                    } else {
                        $html = '-';
                    }
                    return $html;
                })
                ->addColumn('name-description', function ($product) {
                    $text = '<span style="font-size:larger; font-weight:bolder;">' . $product->name . '</span>&nbsp;&nbsp; ' . ($product->featured == 'yes' ? '<span class="badge bg-primary"><i>featured</i></span>' : '') . ' &nbsp;' . ($product->listed == 'yes' ? '<span class="badge bg-info"><i>listed</i></span>' : '') . '<br>
                            <span class="text-muted preserveLines" style="font-size:smaller">' . $product->description . ' </span>';
                    return $text;
                })
                ->addColumn('content', function ($product) {
                    $img = $product->content_image_url;
                    if ($img) {
                        $html = '<div class="profile-edit">
                                    <img class="profile-edit" id="profile_photo_jst" src="' . $img . '" alt="None">
                                </div>';
                    } else {
                        $html = '-';
                    }
                    return $html;
                })
                ->rawColumns(['action', 'cover', 'content', 'name-description'])
                ->make(true);
        }


        $services = \App\Models\Services::select('id_service', 'title_id')->where('listed', 'yes')->get();

        return view('admin.products.index', [
            'title'  => 'Daftar Produk',
            'br1'  => 'Pengelolaan',
            'br2'  => 'Produk',
            'services'  => $services,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $success = 'nope';
        $message = '';
        $code = 400;

        $data = $request->input();

        try {
            if ($data['id_product'] == '') {
                $product = new Products();
                $product->name = $data['nama'];
                $product->id_service = $data['id_service'];
                $product->slug = $data['slug'];
                $product->next_url = $data['next_url'];
                $product->title_id = $data['title_id'];
                $product->title_en = $data['title_en'];
                $product->description = $data['deskripsi'];
                $product->cover_image_url = isset($data['new-cover_image_url']) ? $data['new-cover_image_url'] : '';
                $product->save();
            } else {
                $fProduct = Products::find($data['id_product']);
                $fProduct->name = $data['nama'];
                $fProduct->id_service = $data['id_service'];
                $fProduct->slug = $data['slug'];
                $fProduct->next_url = $data['next_url'];
                $fProduct->title_id = $data['title_id'];
                $fProduct->title_en = $data['title_en'];
                $fProduct->description = $data['deskripsi'];
                $fProduct->cover_image_url = isset($data['new-cover_image_url']) ? $data['new-cover_image_url'] : '';'';
                $fProduct->save();
            }

            $success = 'yeah';
            $code = 200;
            $message = 'Data Berhasil Disimpan';
        } catch (\Throwable $th) {
            $message = $th->getMessage();
        }

        return response()->json([
            'success' => $success,
            'message' => $message,
            'code' => $code,
        ], $code);
    }
}
