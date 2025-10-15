<?php

namespace App\Http\Controllers\Admin;

use App\Models\Gallery;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;


class GalleryController extends Controller
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
            $galleries = Gallery::get();

            return DataTables::of($galleries)
                ->addIndexColumn()
                ->addColumn('action', function ($gallery) {
                    $btn = '';
                    $btn .= '<button id="editBtn" type="button" class="btn btn-sm btn-warning btn-xs" data-bs-toggle="modal" data-bs-target="#tambahGroup" data-bs-title="Edit Data" data-title="Edit Data Pengguna"><i class="bi bi-pencil-square"></i></button>&nbsp;';

                    if ($gallery->featured == 'no') {
                        $btn .= '<button id="destroyBtn" type="button" class="btn btn-sm btn-danger btn-xs" data-bs-id_gallery="' . $gallery->id_gallery  . '" data-id_gallery="' .  $gallery->id_gallery  . '"><i class="bi bi-trash-fill"></i></button>';
                    }
                    return $btn;
                })
                ->addColumn('image_url_can', function ($gallery) {
                    $img = $gallery->image_url;
                    if ($img) {
                        $html = '<div class="profile-edit">
                                    <img class="profile-edit" id="profile_photo_jst" src="' . $img . '" alt="None">
                                </div>';
                    } else {
                        $html = '-';
                    }
                    return $html;
                })
                ->addColumn('name-description', function ($gallery) {
                    $text = '<span style="font-size:larger; font-weight:bolder;">' . $gallery->title . '</span>&nbsp;&nbsp; <span class="badge bg-info"><i>' . $gallery->filter_tag . '</i></span><br>
                            <span class="text-muted preserveLines" style="font-size:smaller">' . $gallery->description . ' </span>';
                    return $text;
                })
                ->addColumn('content', function ($gallery) {
                    $img = $gallery->image_url;
                    if ($img) {
                        $html = '<div class="profile-edit">
                                    <img class="profile-edit" id="profile_photo_jst" src="' . $img . '" alt="None">
                                </div>';
                    } else {
                        $html = '-';
                    }
                    return $html;
                })
                ->rawColumns(['action', 'image_url_can', 'content', 'name-description'])
                ->make(true);
        }


        return view('admin.gallery.index', [
            'title'  => 'Gallery',
            'br1'  => 'Pengelolaan',
            'br2'  => 'Gallery',
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
            if ($data['id_gallery'] == '') {
                $gallery = new Gallery();
                $gallery->title = $data['title'];
                $gallery->filter_tag = $data['filter_tag'];
                $gallery->image_url = isset($data['new-cover_image_url']) ? $data['new-cover_image_url'] : '';
                $gallery->alt = $data['alt'];
                $gallery->description = $data['deskripsi'];
                $gallery->save();
            } else {
                $fGallery = Gallery::find($data['id_gallery']);
                $fGallery->title = $data['title'];
                $fGallery->filter_tag = $data['filter_tag'];
                $fGallery->image_url = isset($data['new-cover_image_url']) ? $data['new-cover_image_url'] : '';
                $fGallery->alt = $data['alt'];
                $fGallery->description = $data['deskripsi'];
                $fGallery->save();
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
