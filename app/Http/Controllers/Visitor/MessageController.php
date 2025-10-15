<?php

namespace App\Http\Controllers\Visitor;

use App\Models\Messages;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class MessageController extends Controller
{
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

            $message = new Messages();
            $message->name = $data['name'];
            $message->email = $data['email'];
            $message->subject = $data['subject'];
            $message->message = $data['message'];
            $message->save();

            $success = 'yeah';
            $code = 200;
            $message = 'Data Berhasil Disimpan';
        } catch (\Throwable $th) {
            $message = $th->getMessage();
        }

        // return response()->json([
        //     'ok' => true,
        //     'success' => $success,
        //     'message' => $message,
        //     'code' => $code,
        // ], $code);

        return 'OK';
    }
}
