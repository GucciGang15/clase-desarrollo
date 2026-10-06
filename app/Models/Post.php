<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Comment;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    //protected $table = 'posts';
    protected $fillable = [
        //insercion masiva a la BD
        'id',
        'user_id',
        'title',
        'body'
    ];

    public function user()
    {
        return $this->belongsTo(related: User::class);
    }

    public function comments()
    {
        return $this->hasMany(related: Comment::class);
    }
}
