<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use Blameable;

    protected $table = 'roles';

    protected $fillable = ['name', 'status'];

    protected static function boot()
    {
        parent::boot();

        static::saving(function () {
            $userID = auth()->user()->id;
            cache()->forget('REPO.ROLES.ALL.' . $userID);
            cache()->forget('REPO.ROLES.ALL.EAGER.' . $userID);
            cache()->forget('PERMISSION.IDS.' . $userID);
        });
    }

    /**
     * Scope a query to not include app default
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeLimited($query)
    {
        if (auth()->user()->current_role_id != 1)
            return $query->where('name', '!=', 'Super Administrator');
        else
            return $query;
    }

    public function permissions()
    {
        return $this->belongsToMany(Permission::class, 'permission_role', 'role_id', 'permission_id', 'id', 'id')->withTimestamps();
    }
}
