<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'content',
        'thumbnail',
        'is_published',
        'tags',
        'user_id',
        'category',
    ];

    public function user()
    {
        return $this->belongsTo( User::class );
    }

}
