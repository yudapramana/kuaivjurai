<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
use Carbon\Carbon;

class Reservation extends Model implements Auditable
{
    use HasFactory, SoftDeletes;
    use \OwenIt\Auditing\Auditable;

    protected $table = "reservations";

    protected $primaryKey = 'id_reservation';

    protected $guarded = [];

    protected $appends = ['date_alphabet', 'date_full'];

    public function slot()
    {
        return $this->hasMany(Slot::class, 'id_reservation')->withTrashed();
    }

    public function getDateAlphabetAttribute()
    {

        setlocale(LC_TIME, 'id_ID');
        \Carbon\Carbon::setLocale('id_ID');

        $date = Carbon::createFromFormat('Y-m-d', $this->attributes['checkin_date']);
        return $date->translatedFormat('l');
    }

    public function getDateFullAttribute()
    {
        setlocale(LC_TIME, 'id_ID');
        \Carbon\Carbon::setLocale('id_ID');

        $date = Carbon::createFromFormat('Y-m-d', $this->attributes['checkin_date']);
        return $date->translatedFormat('l, d F Y');
    }
}
