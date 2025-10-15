<?php

namespace App\Http\Controllers\Admin;


use Spatie\Permission\Models\Permission;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use DataTables;
use Illuminate\Support\Arr;
use Auth;

class RoleController extends Controller
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

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $roles = Role::with('permissions')->get();

            return Datatables::of($roles)
                ->addIndexColumn()
                ->addColumn('role_permissions', function ($role) {
                    $data = $role->permissions->groupBy(function ($data) {
                        return substr($data->name, 0, 4);
                    });

                    $raw = $data->toArray();

                    $html = '';
                    foreach ($raw as $key => $perm) {
                        $data = Arr::pluck($perm, 'name');
                        if ($key == 'page' && count($data) != 0) {
                            $html .= '<br /><br />';
                        }
                        $html .= ucwords($key) . ': ' . implode(", ", $data);
                    }

                    return $html;
                })
                ->addColumn('action', function ($role) {
                    $user = Auth::user();
                    $btn = '';
                    if ($user->hasRole('super_administrator')) {
                        $btn .= '<button id="editBtn" type="button" class="btn btn-sm btn-warning btn-xs" data-bs-toggle="modal" data-bs-target="#fModal" data-title="Edit Data Level / Peran User"><i class="bi bi-pencil-square"></i></button>&nbsp;';
                        $btn .= '<button id="destroyBtn" type="button" class="btn btn-sm btn-danger btn-xs" data-bs-role_id="' . $role->id  . '" data-role_id="' .  $role->id  . '"><i class="bi bi-trash-fill"></i></button>';
                    } else {
                        $btn = '[-]';
                    }
                    return $btn;
                })
                ->rawColumns(['action', 'role_permissions'])
                ->make(true);
        }

        $permissions = $this->_getPermission();
        return view('admin.roles.index', [
            'title'  => 'Daftar Level Pengguna',
            'br1'  => 'Kelola',
            'br2'  => 'Data Level / Peran Pengguna',
            'permissions'  => $permissions
        ]);
    }

    private function _getPermission()
    {
        $permissions = Permission::all();
        $data = $permissions->groupBy(function ($data) {
            return substr($data->name, 0, 4);
        });
        return $data;
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
            if ($data['id_role'] == '') {
                $role = Role::create(['name' => $data['name']]);
            } else {
                $role = Role::findOrFail($data['id_role']);
                $role->name = $data['name'];
                $role->update();
            }

            $role->fresh();
            $role->syncPermissions($data['permissions']);

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
    public function destroy(Role $role)
    {
        $success = false;
        $message = '';

        try {
            $role->delete();
            $success = true;
        } catch (\Exception $e) {
            $message = $e->getMessage();
        }

        return response()
            ->json(['success' => $success, 'message' => $message]);
    }
}
