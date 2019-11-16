<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Schedule;
use App\Topic;

class Community extends Model
{
    public function schedule() {
        return $this->belongsTo(Schedule::class);
    }

    public function topic() {
        return $this->belongsTo(Topic::class);
    }
}
