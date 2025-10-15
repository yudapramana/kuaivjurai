<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use DateTime;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Auth;

class UserController extends Controller
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
            $users = User::where('email', '!=', 'pramanayuda772@gmail.com')->with('roles')->get();

            return DataTables::of($users)
                ->addIndexColumn()
                ->addColumn('action', function ($user) {
                    $user = Auth::user();
                    $btn = '';
                    if ($user->hasRole('super_administrator') || $user->hasRole('administrator')) {
                        $btn .= '<button id="editBtn" type="button" class="btn btn-sm btn-warning btn-xs" data-bs-toggle="modal" data-bs-target="#fModal" data-bs-title="Edit Data Pengguna" data-title="Edit Data Pengguna"><i class="bi bi-pencil-square"></i></button>&nbsp;';
                        $btn .= '<button id="destroyBtn" type="button" class="btn btn-sm btn-danger btn-xs" data-bs-user_id="'. $user->id  .'" data-user_id="'.  $user->id  .'"><i class="bi bi-trash-fill"></i></button>';
                    } else {
                        $btn = '[-]';
                    }
                    return $btn;
                })
                ->addColumn('roles_detail', function ($user) {
                    $roles = $user->getRoleNames();
                    $btn = '<ul class="ul-ba">';
                    foreach ($roles as $role) {
                        $btn .= '<li>' . $role . '</li>';
                    }
                    $btn .= '</ul>';
                    return $btn;
                })
                ->addColumn('foto', function ($user) {
                    $profilePhoto = $user->profile_photo;
                    if ($profilePhoto) {
                        $html = '<div class="profile-edit">
                                    <img class="profile-edit" id="profile_photo_jst" src="'.$profilePhoto.'" alt="None">
                                </div>';
                    } else {
                        $html = '-';
                    }


                    return $html;
                })
                ->addColumn('contact', function ($user) {
                    $noHP = $user->no_hp ? $user->no_hp : '<span class="text-danger" style="font-size:smaller!important;">Belum Set No HP</span>';
                    $html = '<span>' . $noHP .  '</span><br>';
                    $html .='<span class="text-muted" style="font-size:smaller!important;">'.$user->email.  '</span>';

                    if (Hash::check($user->username, $user->password)) {
                        $html .= '<br><span class="text-danger" style="font-size:smaller!important;">Belum Ganti Password</span>';
                    }
                    return $html;
                })
                ->editColumn('block_html', function ($user) {
                    $indicator = $user->block == 'no' ? 'bg-primary' : 'bg-danger';
                    return '<span class="badge ' . $indicator . '">' . strtoupper($user->block) . '</span>';
                })
                ->editColumn('status_html', function ($user) {
                    $indicator = $user->status == 'active' ? 'bg-success' : 'bg-danger';
                    return '<span class="badge ' . $indicator . '">' . strtoupper($user->status) . '</span>';
                })
                ->addcolumn('name_username', function ($user) {
                    $html = $user->name .'<br>';
                    $html .= '<span class="text-muted" style="font-size:smaller!important;">'.$user->username.  '</span> <br>';
                    $html .= '<span class="text-muted" style="font-size:smaller!important;">'.$user->age.  '</span>';
                    return $html;
                })
                ->editColumn('last_login_at', function ($user) {
                    $html = $user->last_login_at ? $user->last_login_at : '<span class="text-danger" style="font-size:smaller!important;">Belum Login</span> ';
                    $html .= '<br><span class="text-muted" style="font-size:smaller!important;">'.$user->last_login_ip.  '</span>';
                    return $html;
                })
                ->rawColumns(['action', 'roles_detail', 'block_html', 'status_html', 'foto', 'contact', 'name_username', 'last_login_at'])
                ->make(true);
        }


        $all_roles = \Spatie\Permission\Models\Role::where('name', '!=', 'super_administrator')->get()->pluck('name');
        return view('admin.users.index', [
            'title'  => 'Daftar Pengguna',
            'br1'  => 'Kelola',
            'br2'  => 'Data Pengguna',
            'all_roles' => $all_roles
        ]);
    }

    public function store(Request $request)
    {
        $success = 'nope';
        $message = '';
        $code = 400;

        $data = $request->input();

        try {
            $validator = Validator::make($request->all(), [
                'no_hp' => 'required|numeric|min:10',
            ], [
                'no_hp.required' => 'No HP diperlukan untuk diisi',
                'no_hp.numeric' => 'No HP harus nomor saja',
                'no_hp.min' => 'No HP harus lebih dari 10 digit',
            ]);

            if ($data['id_user'] == '') {
                $user = new User();
                $user->name = $data['name'];
                $user->username = $data['username'];
                $user->email = $data['email'];
                $user->no_hp = $data['no_hp'];
                $user->password = Hash::make($data['password']);
                $user->save();
            } else {
                $user = User::findOrFail($data['id_user']);

                unset($data['id_user']);
                $user->name = $data['name'];
                $user->username = $data['username'];
                $user->email = $data['email'];
                $user->no_hp = $data['no_hp'];
                $user->block = $data['block'];
                $user->status = $data['status'];
                if ($data['password'] != '') {
                    $data['password'] = Hash::make($data['password']);
                    $user->password = $data['password'];
                } else {
                    unset($data['password']);
                }
                $user->save();
            }

            $user->fresh();
            $user->syncRoles($data['roles']);


            $code = 200;
            if ($validator->fails()) {
                $message = $validator->errors()->first();
            } else {
                $success = 'yeah';
                $message = 'Data Berhasil Disimpan';
            }
        } catch (\Throwable $th) {
            $message = $th->getMessage();
        }

        return response()->json([
            'success' => $success,
            'message' => $message,
            'code' => $code,
        ], $code);
    }

    public function destroy(User $user)
    {
        $success = false;
        $message = '';

        try {
            $user->delete();
            $success = true;
        } catch (\Exception $e) {
            $message = $e->getMessage();
        }

        return response()
            ->json(['success' => $success, 'message' => $message]);
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
}

