<?php

namespace App\Http\Controllers\Admin;

use App\Models\Reservation;
use App\Http\Controllers\Controller;
use App\Models\Slot;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Carbon\Carbon;
use DB;
use Illuminate\Support\Facades\Event;
use OwenIt\Auditing\Events\AuditCustom;


class ReservationController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        // $this->middleware(['permission:menu-reservations']);
        $this->middleware(['role_or_permission:super_administrator|menu-reservations']);
    }

    public function index(Request $request, $yearMonth = null)
    {
        // Get Current Year and Month
        if (!$yearMonth) {
            $yearMonth = date('Y-m');
        }

        if ($request->ajax()) {

            $exp = explode('-', $yearMonth);
            $year = $exp[0];
            $month = $exp[1];
            $reservations = Reservation::where([
                'year' => $year,
                'month' => $month
            ])->orderBy('checkin_date', 'ASC')
                ->with('slot')->get();

            $datatable = DataTables::of($reservations)
                ->addIndexColumn()
                ->addColumn('memorandum', function ($res) {
                    $data = '<span class="text-muted preserveLines" style="font-size:smaller">' . $res->notes . ' </span>';
                    return $data;
                })
                ->addColumn('day_string', function ($res) {
                    $date = $res->checkin_date;
                    $date = Carbon::createFromFormat('Y-m-d', $date);
                    $day_string = $date->format('l');
                    return $day_string;
                })
                ->addColumn('customer_name_phone', function ($res) {
                    $text = '<span style="font-weight:bolder;">' . $res->customer_name . '</span>&nbsp;&nbsp;<br>
                            <span class="text-muted preserveLines" style="font-size:smaller">' . ($res->customer_phone ? $res->customer_phone : 'NaN') . ' </span>';
                    return $text;
                })
                ->addColumn('action', function ($res) {
                    $btn = '';
                    $btn .= '<button id="editBtn" type="button" class="btn btn-link p-0 m-0" data-bs-toggle="modal" data-bs-target="#tambahGroup" data-bs-title="Edit Data" data-title="Edit Data Pengguna"><i class="bi bi-pencil-square"></i></button>&nbsp;';

                    // if ($res->featured == 'no') {
                    $btn .= '<button id="destroyBtn" type="button" class="btn btn-link p-0 m-0" data-bs-id_reservation="' . $res->id_reservation  . '" data-id_reservation="' .  $res->id_reservation  . '"><i class="bi bi-trash-fill" style="color:red;"></i></button>&nbsp;';
                    // }

                    $btn .= '<button id="logBtn" type="button" class="btn btn-link p-0 m-0" data-bs-toggle="modal" data-bs-target="#lihatHistory" data-bs-title="Lihat Log" data-title="Lihat Log Perubahan" data-bs-id_reservation="' . $res->id_reservation  . '" data-id_reservation="' .  $res->id_reservation  . '"><i class="bi bi-stopwatch-fill" style="color:sienna;"></i></button>';
                    // $btn .= '<a id="historyBtn" type="button" class="btn btn-link p-0 m-0" href="/reservation/audits/' . $res->id_reservation  . '"><i class="bi bi-exclamation-square-fill" style="color:sienna;"></i></a>';

                    return $btn;
                })
                ->rawColumns(['action', 'customer_name_phone', 'memorandum']);


            $dates = DB::table('reservations')
                ->select(DB::raw('YEAR(checkin_date) year, MONTH(checkin_date) month, DATE_FORMAT(checkin_date,"%Y-%m") as yearmonth, MONTHNAME(checkin_date) month_name'))
                ->whereNull('deleted_at')
                ->distinct()
                ->orderBy('year', 'asc')
                ->orderBy('month', 'asc')
                ->get();

            $html_filter = '<div class="col-md-12">
                                <label for="unit_pengolah" class="form-label fw-bold">Filter Bulan</label>

                                <select class="form-control select2 select2-filter yearmonth_filter" id="yearmonth_filter">';
            $html_filter .= '<option value="">-- Pilih Bulan --</option>';

            foreach ($dates as $key => $item) {
                if ($item->yearmonth == $yearMonth) {
                    $html_filter .= '<option value="' . $item->yearmonth . '" selected>' . $item->month_name . ' ' . $item->year . '</option>';
                } else {
                    $html_filter .= '<option value="' . $item->yearmonth . '">' . $item->month_name . ' ' . $item->year . '</option>';
                }
            }
            $html_filter .= '  </select>

                            </div>';


            $datatable->with([
                'html_filter' => $html_filter
            ]);

            return $datatable->make(true);
        }


        $items = \App\Models\Item::all();


        // $dates = DB::table('reservations')
        //     ->select(DB::raw('YEAR(checkin_date) year, MONTH(checkin_date) month, DATE_FORMAT(checkin_date,"%Y-%m") as yearmonth, MONTHNAME(checkin_date) month_name'))
        //     ->distinct()
        //     ->orderBy('year', 'desc')
        //     ->orderBy('month', 'desc')
        //     ->get();

        // return $dates;


        return view('admin.reservation.index', [
            'title'  => 'Daftar Reservasi',
            'br1'  => 'Pengelolaan',
            'br2'  => 'Reservasi',
            'items' => $items,
            'yearMonth' => $yearMonth,

        ]);
    }

    public function deleted(Request $request, $yearMonth = null)
    {
        // Get Current Year and Month
        if (!$yearMonth) {
            $yearMonth = date('Y-m');
        }

        if ($request->ajax()) {

            $exp = explode('-', $yearMonth);
            $year = $exp[0];
            $month = $exp[1];
            $reservations = Reservation::where([
                'year' => $year,
                'month' => $month
            ])->orderBy('checkin_date', 'ASC')
                ->with('slot')->onlyTrashed()->get();

            $datatable = DataTables::of($reservations)
                ->addIndexColumn()
                ->addColumn('memorandum', function ($res) {
                    $data = '<span class="text-muted preserveLines" style="font-size:smaller">' . $res->notes . ' </span>';
                    return $data;
                })
                ->addColumn('day_string', function ($res) {
                    $date = $res->checkin_date;
                    $date = Carbon::createFromFormat('Y-m-d', $date);
                    $day_string = $date->format('l');
                    return $day_string;
                })
                ->addColumn('customer_name_phone', function ($res) {
                    $text = '<span style="font-weight:bolder;">' . $res->customer_name . '</span>&nbsp;&nbsp;<br>
                            <span class="text-muted preserveLines" style="font-size:smaller">' . ($res->customer_phone ? $res->customer_phone : 'NaN') . ' </span>';
                    return $text;
                })
                ->addColumn('action', function ($res) {
                    $btn = '';

                    // if ($res->featured == 'no') {
                    $btn .= '<button id="restoreBtn" type="button" class="btn btn-link p-0 m-0" data-bs-id_reservation="' . $res->id_reservation  . '" data-id_reservation="' .  $res->id_reservation  . '"><i class="bi bi-reply-all-fill" style="color:red;"></i></button>&nbsp;';
                    // }


                    return $btn;
                })
                ->rawColumns(['action', 'customer_name_phone', 'memorandum']);


            $dates = DB::table('reservations')
                ->select(DB::raw('YEAR(checkin_date) year, MONTH(checkin_date) month, DATE_FORMAT(checkin_date,"%Y-%m") as yearmonth, MONTHNAME(checkin_date) month_name'))
                ->whereNotNull('deleted_at')
                ->distinct()
                ->orderBy('year', 'asc')
                ->orderBy('month', 'asc')
                ->get();

            $html_filter = '<div class="col-md-12">
                                <label for="unit_pengolah" class="form-label fw-bold">Filter Bulan</label>

                                <select class="form-control select2 select2-filter yearmonth_filter" id="yearmonth_filter">';
            $html_filter .= '<option value="">-- Pilih Bulan --</option>';
            foreach ($dates as $key => $item) {
                if ($item->yearmonth == $yearMonth) {
                    $html_filter .= '<option value="' . $item->yearmonth . '" selected>' . $item->month_name . ' ' . $item->year . '</option>';
                } else {
                    $html_filter .= '<option value="' . $item->yearmonth . '">' . $item->month_name . ' ' . $item->year . '</option>';
                }
            }
            $html_filter .= '  </select>

                            </div>';


            $datatable->with([
                'html_filter' => $html_filter
            ]);

            return $datatable->make(true);
        }


        $items = \App\Models\Item::all();


        // $dates = DB::table('reservations')
        //     ->select(DB::raw('YEAR(checkin_date) year, MONTH(checkin_date) month, DATE_FORMAT(checkin_date,"%Y-%m") as yearmonth, MONTHNAME(checkin_date) month_name'))
        //     ->distinct()
        //     ->orderBy('year', 'desc')
        //     ->orderBy('month', 'desc')
        //     ->get();

        // return $dates;


        return view('admin.deleted-reservation.index', [
            'title'  => 'Daftar Reservas Dihapusi',
            'br1'  => 'Pengelolaan',
            'br2'  => 'Reservasi',
            'items' => $items,
            'yearMonth' => $yearMonth,

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


            // $validated = $request->validate([
            //     'checkin_date' => 'required',
            //     'customer_name' => 'required',
            //     'customer_phone' => 'required',
            //     'total_guest' => 'required|integer',
            //     'fix_price' => 'required|integer',
            //     'down_payment' => 'required|integer',
            // ]);

            if ($data['id_reservation'] == '') {


                $res = new Reservation();
                $res->checkin_date = $data['checkin_date'];
                $res->customer_name = $data['customer_name'];
                $res->customer_phone = $data['customer_phone'];
                $res->total_guest = $data['total_guest'];
                $res->fix_price = $data['fix_price'];
                $res->down_payment = $data['down_payment'] ? $data['down_payment'] : 0;
                $res->notes = $data['notes'];
                $date = Carbon::createFromFormat('Y-m-d', $data['checkin_date']);
                $res->month = $date->month;
                $res->year = $date->year;
                $res->save();
                $res->fresh();

                foreach ($data['id_item'] as $id_item => $total) {
                    $slot = new Slot();
                    $slot->id_reservation = $res->id_reservation;
                    $slot->id_item = $id_item;
                    $slot->total_room = $total ? intval($total) : 0;
                    $slot->save();
                }
            } else {
                $res = Reservation::find($data['id_reservation']);
                $res->checkin_date = $data['checkin_date'];
                $res->customer_name = $data['customer_name'];
                $res->customer_phone = $data['customer_phone'];
                $res->total_guest = $data['total_guest'];
                $res->fix_price = $data['fix_price'];
                $res->down_payment = $data['down_payment'] ? $data['down_payment'] : 0;
                $res->notes = $data['notes'];
                $date = Carbon::createFromFormat('Y-m-d', $data['checkin_date']);
                $res->month = $date->month;
                $res->year = $date->year;
                $res->save();
                $res->fresh();


                $oldValues = $res->slot()->pluck('total_room')->toArray();
                $oldValues = array_map('strval', $oldValues);
                $newValues = array_values($data['id_item']);
                $bolReal = ($oldValues == $newValues);


                // return [
                //     'old_values' => $oldValues,
                //     'new_values' => $newValues,
                //     'bol_real' => $bolReal
                // ];


                if (!$bolReal) {

                    foreach ($data['id_item'] as $id_item => $total) {
                        $slot = Slot::where([
                            'id_reservation' => $data['id_reservation'],
                            'id_item' => $id_item
                        ])->first();

                        if ($slot) {
                            $slot->total_room = $total ? intval($total) : 0;
                            $slot->save();
                        } else {
                            $slot = new Slot();
                            $slot->id_reservation = $res->id_reservation;
                            $slot->id_item = $id_item;
                            $slot->total_room = $total ? intval($total) : 0;
                            $slot->save();
                        }
                    }

                    $res->auditEvent = 'updated';
                    $res->isCustomEvent = true;

                    $items = \App\Models\Item::all();

                    if (count($oldValues) > 0) {
                        $auditCustomOld = [];
                        foreach ($items as $key => $item) {
                            $auditCustomOld[$item->name] = $oldValues[$key];
                        }
                        $res->auditCustomOld = $auditCustomOld;
                        // $res->auditCustomOld = [
                        //     'Lumbung' => $oldValues[0],
                        //     'Villa Family' => $oldValues[1],
                        //     'Villa Apung' => $oldValues[2],
                        //     'Hammock' => $oldValues[3],
                        // ];
                    } else {
                        $res->auditCustomOld = [];
                    }


                    $auditCustomNew = [];
                    foreach ($items as $key => $item) {
                        $auditCustomNew[$item->name] = $newValues[$key];
                    }
                    $res->auditCustomNew = $auditCustomNew;
                    // $res->auditCustomNew = [
                    //     'Lumbung' => $newValues[0],
                    //     'Villa Family' => $newValues[1],
                    //     'Villa Apung' => $newValues[2],
                    //     'Hammock' => $newValues[3],
                    // ];

                    Event::dispatch(AuditCustom::class, [$res]);
                }
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
            $res = Reservation::findOrFail($id);
            $res->load('slot');


            foreach ($res->slot as $key => $slot) {
                $slot->delete();
            }
            $res->delete();
            $success = true;
        } catch (\Exception $e) {
            $message = $e->getMessage();
        }

        return response()
            ->json(['success' => $success, 'message' => $message]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {

        $success = false;
        $message = '';

        try {
            $res = Reservation::where('id_reservation', $id)->onlyTrashed()->first();
            $res->load('slot');


            foreach ($res->slot as $key => $slot) {
                $slot->restore();
            }
            $res->restore();
            $success = true;
        } catch (\Exception $e) {
            $message = $e->getMessage();
        }

        return response()
            ->json(['success' => $success, 'message' => $message]);
    }
}
