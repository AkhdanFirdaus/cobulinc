<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Community;
use App\Topic;
use App\Room;

class Schedule extends Model
{
    protected $fillable = ['date_time_start', 'duration', 'room_id'];

    public function communities() {
        return $this->hasMany(Community::class);
    }

    public function topics() {
        return $this->hasMany(Topic::class);
    }

    public function room()
    {
        return $this->belongsTo(Room::class);
    }
}
