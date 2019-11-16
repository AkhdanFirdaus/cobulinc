<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Schedule;
use App\Topic;

class Community extends Model
{
    protected $fillable = ['name'];
    
    public function schedules() {
        return $this->hasMany(Schedule::class);
    }

    public function topics() {
        return $this->hasMany(Topic::class);
    }
}
