<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Community;
use App\Topic;
use App\Room;

class Schedule extends Model
{
    protected $fillable = ['date_time_start', 'duration', 'room_id', 'comunity_id'];

    public function room()
    {
        return $this->belongsTo(Room::class);
    }

    public function community() {
        return $this->belongsTo(Community::class);
    }
}
