<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostViews extends Model
{
    use HasFactory;

    protected $fillable = [
        'ip',
        'current_logged_in_device',
        'view_time',
        'post_id',
    ];

    public function post(){
        return $this->belongsTo(Post::class);
    }
}
