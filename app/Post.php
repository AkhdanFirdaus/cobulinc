<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Topic;
use App\Comment;

class Post extends Model
{
    protected $fillable = ['title', 'content', 'user_id', 'topic_id'];

    public function users() {
        return $this->belongsTo(User::class);
    }

    public function topic() {
        return $this->belongsTo(Topic::class);
    }

    public function comments() {
        return $this->hasMany(Comment::class);
    }

    public function setTitleAttribute($value) {
        if (! $this->exist) {
            $this->attributes['slug'] = str_slug($value);
        }
    }
}
