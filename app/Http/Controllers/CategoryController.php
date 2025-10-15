<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Str;
use Yajra\DataTables\DataTables;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $categories = Category::all();

        if ($request->ajax()) {


            return DataTables::of($categories)
                ->addIndexColumn()
                ->addColumn('action', function ($category) {
                    $btn = '';
                    $btn .= '<button id="editBtn" type="button" class="btn btn-sm btn-warning btn-xs" data-bs-toggle="modal" data-bs-target="#tambahGroup" data-bs-title="Edit Data" data-title="Edit Data Pengguna"><i class="bi bi-pencil-square"></i></button>&nbsp;';
                    $btn .= '<button id="destroyBtn" type="button" class="btn btn-sm btn-danger btn-xs" data-bs-id_item="' . $category->id  . '" data-id_item="' .  $category->id  . '"><i class="bi bi-trash-fill"></i></button>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view(
            'admin.categories.index',
            [
                'categories' => $categories,
                'title'  => 'Categories',
                'br1'  => 'Manage',
                'br2'  => 'Categories',
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
            if ($data['id_category'] == '') {
                $category = new Category();
                $category->name = $request->name;
                $category->slug = \Str::slug($request->name);
                $category->keywords = $request->keywords;
                $category->meta_desc = $request->meta_desc;
                $category->save();
            } else {
                $category = Category::find($data['id_category']);
                $category->name = $request->name;
                $category->slug = \Str::slug($request->name);
                $category->keywords = $request->keywords;
                $category->meta_desc = $request->meta_desc;
                $category->save();
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




        return redirect()->back()->with('success', 'Data added successfully');
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
        $category = Category::findOrFail($id);
        $category->name = $request->name;
        $category->slug = $request->slug;
        $category->keywords = $request->keywords;
        $category->meta_desc = $request->meta_desc;
        $category->save();

        return redirect()->back()->with('success', 'Data updated successfully');
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
            $category = Category::findOrFail($id);
            $category->delete();
            $success = true;
        } catch (\Exception $e) {
            $message = $e->getMessage();
        }

        return response()
            ->json(['success' => $success, 'message' => $message]);



        

    }
}
