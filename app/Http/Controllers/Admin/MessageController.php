<?php

namespace App\Http\Controllers\Admin;

use App\Models\Messages;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class MessageController extends Controller
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
            $messages = Messages::get();

            return DataTables::of($messages)
                ->addIndexColumn()
                ->addColumn('action', function ($messages) {
                    $btn = '-';
                })
                ->rawColumns(['action'])
                ->make(true);
        }


        return view('admin.message.index', [
            'title'  => 'Messages',
            'br1'  => 'Manage',
            'br2'  => 'Messages',
        ]);
    }

  
}
