<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;
    protected $fillable = [
        'message_post',
        'like_post',
        'comment_post',
        'bookmark_post',
        'user_id',
    ];

    public function likes()
    {
        return $this->hasMany(Likes::class, 'post_id', 'id');
    }

    public function comments()
    {
        return $this->hasMany(Comments::class, 'post_id', 'id');
    }

    public function bookmarks()
    {
        return $this->hasMany(Bookmarks::class, 'post_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
