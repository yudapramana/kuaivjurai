<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;
use Str;
use Yajra\DataTables\DataTables;


class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $tags = Tag::all();

        if ($request->ajax()) {


            return DataTables::of($tags)
                ->addIndexColumn()
                ->addColumn('action', function ($tag) {
                    $btn = '';
                    $btn .= '<button id="editBtn" type="button" class="btn btn-sm btn-warning btn-xs" data-bs-toggle="modal" data-bs-target="#tambahGroup" data-bs-title="Edit Data" data-title="Edit Data Pengguna"><i class="bi bi-pencil-square"></i></button>&nbsp;';
                    $btn .= '<button id="destroyBtn" type="button" class="btn btn-sm btn-danger btn-xs" data-bs-id_item="' . $tag->id  . '" data-id_item="' .  $tag->id  . '"><i class="bi bi-trash-fill"></i></button>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view(
            'admin.tags.index',
            [
                'tags' => $tags,
                'title'  => 'Tags',
                'br1'  => 'Manage',
                'br2'  => 'Tags',
            ],

        );
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
            if ($data['id_tag'] == '') {
                $tag = new Tag();
                $tag->name = $request->name;
                $tag->slug = \Str::slug($request->name);
                $tag->keywords = $request->keywords;
                $tag->meta_desc = $request->meta_desc;
                $tag->save();
            } else {
                $tag = Tag::find($data['id_tag']);
                $tag->name = $request->name;
                $tag->slug = \Str::slug($request->name);
                $tag->keywords = $request->keywords;
                $tag->meta_desc = $request->meta_desc;
                $tag->save();
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
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $success = false;
        $message = '';

        try {
            $Tag = Tag::findOrFail($id);
        $Tag->delete();
            $success = true;
        } catch (\Exception $e) {
            $message = $e->getMessage();
        }

        return response()
            ->json(['success' => $success, 'message' => $message]);



        

    }
}
