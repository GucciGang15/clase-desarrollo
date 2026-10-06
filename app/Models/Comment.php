<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
    use HasFactory;
    protected $table = 'comments';
    protected $fillable = [
        //insercion masiva a la BD
        'id',
        'post_id',
        'body'
    ];

    public function post()
    {
        return $this->belongsTo(related: Post::class);
    }
}