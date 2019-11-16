<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Schedule;

class room extends Model
{
    protected $fillable = 'room_number';

    public function schedules() {
        return $this->hasMany(Schedule::class);
    }
}
