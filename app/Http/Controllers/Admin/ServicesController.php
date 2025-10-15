<?php

namespace App\Http\Controllers\Admin;

use App\Models\Services;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DataTables;


class ServicesController extends Controller
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
            $services = Services::get();

            return DataTables::of($services)
                ->addIndexColumn()
                ->addColumn('action', function ($service) {
                    $btn = '';
                    $btn .= '<button id="editBtn" type="button" class="btn btn-sm btn-warning btn-xs" data-bs-toggle="modal" data-bs-target="#tambahGroup" data-bs-title="Edit Data" data-title="Edit Data Pengguna"><i class="bi bi-pencil-square"></i></button>&nbsp;';

                    if ($service->featured == 'no') {
                        $btn .= '<button id="destroyBtn" type="button" class="btn btn-sm btn-danger btn-xs" data-bs-id_service="' . $service->id_service  . '" data-id_service="' .  $service->id_service  . '"><i class="bi bi-trash-fill"></i></button>';
                    }
                    return $btn;
                })
                ->addColumn('cover', function ($service) {
                    $img = $service->cover_image_url;
                    if ($img) {
                        $html = '<div class="profile-edit">
                                    <img class="profile-edit" id="profile_photo_jst" src="' . $img . '" alt="None">
                                </div>';
                    } else {
                        $html = '-';
                    }
                    return $html;
                })
                ->addColumn('name-description', function ($service) {
                    $text = '<span style="font-size:larger; font-weight:bolder;">' . $service->name . '</span>&nbsp;&nbsp; ' . ($service->featured == 'yes' ? '<span class="badge bg-primary"><i>featured</i></span>' : '') . ' &nbsp;' . ($service->listed == 'yes' ? '<span class="badge bg-info"><i>listed</i></span>' : '') . '<br>
                            <span class="text-muted preserveLines" style="font-size:smaller">' . $service->description . ' </span>';
                    return $text;
                })
                ->addColumn('content', function ($service) {
                    $img = $service->content_image_url;
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


        return view('admin.services.index', [
            'title'  => 'Daftar Pelayanan',
            'br1'  => 'Pengelolaan',
            'br2'  => 'Pelayanan',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            if ($data['id_service'] == '') {
                $service = new Services();
                $service->name = $data['nama'];
                $service->slug = $data['slug'];
                $service->next_url = $data['next_url'];
                $service->title_id = $data['title_id'];
                $service->title_en = $data['title_en'];
                $service->description = $data['deskripsi'];
                $service->featured = $data['featured'];
                $service->listed = $data['listed'];
                $service->cover_image_url = isset($data['new-cover_image_url']) ? $data['new-cover_image_url'] : '';
                $service->content_image_url = isset($data['new-content_image_url']) ? $data['new-content_image_url'] : '';
                $service->save();
            } else {
                $fService = Services::find($data['id_service']);
                $fService->name = $data['nama'];
                $fService->slug = $data['slug'];
                $fService->next_url = $data['next_url'];
                $fService->title_id = $data['title_id'];
                $fService->title_en = $data['title_en'];
                $fService->description = $data['deskripsi'];
                $fService->featured = $data['featured'];
                $fService->listed = $data['listed'];
                $fService->cover_image_url = isset($data['new-cover_image_url']) ? $data['new-cover_image_url'] : '';
                $fService->content_image_url = isset($data['new-content_image_url']) ? $data['new-content_image_url'] : '';
                $fService->save();
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
