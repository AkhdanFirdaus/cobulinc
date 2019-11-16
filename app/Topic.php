<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;
use App\Community;
use App\Schedule;

class Topic extends Model
{
    protected $fillable = 'name';

    public function posts() {
        return $this->hasMany(Post::class);
    }

    public function community() {
        return $this->belongsTo(Community::class);
    }
}
