<?php

namespace App\Http\Controllers\Admin;

use App\Models\Carousel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class CarouselController extends Controller
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
            $carousels = Carousel::get();

            return DataTables::of($carousels)
                ->addIndexColumn()
                ->addColumn('action', function ($carousel) {
                    $btn = '';
                    $btn .= '<button id="editBtn" type="button" class="btn btn-sm btn-warning btn-xs" data-bs-toggle="modal" data-bs-target="#tambahGroup" data-bs-title="Edit Data" data-title="Edit Data Pengguna"><i class="bi bi-pencil-square"></i></button>&nbsp;';

                    if ($carousel->featured == 'no') {
                        $btn .= '<button id="destroyBtn" type="button" class="btn btn-sm btn-danger btn-xs" data-bs-id_carousel="' . $carousel->id_carousel  . '" data-id_carousel="' .  $carousel->id_carousel  . '"><i class="bi bi-trash-fill"></i></button>';
                    }
                    return $btn;
                })
                ->addColumn('image_url_can', function ($carousel) {
                    // $img = $carousel->image_url;
                    $img = $carousel->thumbnail_image;

                    if ($img) {
                        $html = '<div class="profile-edit-container">
                                    <img class="profile-edit" id="profile_photo_jst" src="' . $img . '" alt="None">
                                </div>';
                    } else {
                        $html = '-';
                    }
                    return $html;
                })
                ->addColumn('name-description', function ($carousel) {
                    $text = '<span style="font-size:larger; font-weight:bolder;">' . $carousel->title . '</span>';
                    return $text;
                })
                ->addColumn('active_can', function ($carousel) {
                    $html = '';
                    $color = $carousel->active == 'yes' ? 'success' : 'danger';
                    
                    $text = '<span class="badge badge-sm badge-'.$color.' bg-'.$color.'">'.$carousel->active.'</span>';
                    return $text;
                })
                ->rawColumns(['action', 'image_url_can', 'name-description', 'active_can'])
                ->make(true);
        }


        return view('admin.carousel.index', [
            'title'  => 'Carousels',
            'br1'  => 'Pengelolaan',
            'br2'  => 'Carousels',
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
            if ($data['id_carousel'] == '') {
                $carousel = new Carousel();
                $carousel->title = $data['title'];
                $carousel->image_url = isset($data['new-cover_image_url']) ? $data['new-cover_image_url'] : '';
                $carousel->active = $data['active'];
                $carousel->save();
            } else {
                $fCarousel = Carousel::find($data['id_carousel']);
                $fCarousel->title = $data['title'];
                $fCarousel->image_url = isset($data['new-cover_image_url']) ? $data['new-cover_image_url'] : '';
                $fCarousel->active = $data['active'];
                $fCarousel->save();
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
