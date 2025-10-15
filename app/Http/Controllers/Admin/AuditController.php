<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;


class AuditController extends Controller
{
    public function index()
    {
        $audits = \OwenIt\Auditing\Models\Audit::with('user')
            ->orderBy('created_at', 'desc')->take('50')->get();
        return view('admin.audits.index', [
            'audits' => $audits,
            'title'  => 'Daftar Audit',
            'br1'  => 'Pengelolaan',
            'br2'  => 'Audit',
        ]);
    }

    public function fetch(Request $request, $id_reservation)
    {
        if ($request->ajax()) {


            $res = \App\Models\Reservation::where('id_reservation', $id_reservation)
                ->withTrashed()->first();
            $all = $res->audits()->latest()->with('user')->get();

            $datatable = DataTables::of($all)


                ->addIndexColumn()
                ->addColumn('c_audit', function ($audit) {
                    $data = '<span class="text-muted pauditerveLines" style="font-size:smaller">' . $audit->auditable_type . ' | ' . $audit->auditable_id . ' </span>';
                    return $data;
                })
                ->addColumn('c_old_values', function ($audit) {
                    $html = '';
                    if ($audit->event == 'deleted' || $audit->event == 'restored') {
                        $html = '-';
                    } else {
                        $html .= '<table class="table py-1 my-1">';

                        foreach ($audit->old_values as $attribute => $value) {
                            $html .= '<tr>';
                            $html .= '<td><b>' . $attribute . '</b></td>';
                            $html .= '<td>' . $value . '</td>';
                            $html .= '</tr>';
                        }
                        $html .= '</table>';
                    }
                    return $html;
                })
                ->addColumn('c_new_values', function ($audit) {
                    $html = '';
                    if ($audit->event == 'deleted' || $audit->event == 'restored') {
                        $html = '-';
                    } else {
                        $html .= '<table class="table py-1 my-1">';

                        foreach ($audit->new_values as $attribute => $value) {
                            $html .= '<tr>';
                            $html .= '<td><b>' . $attribute . '</b></td>';
                            $html .= '<td>' . $value . '</td>';
                            $html .= '</tr>';
                        }
                        $html .= '</table>';
                    }
                    return $html;
                })
                ->rawColumns(['c_audit', 'c_old_values', 'c_new_values']);


            return $datatable->make(true);
        }
    }
}
