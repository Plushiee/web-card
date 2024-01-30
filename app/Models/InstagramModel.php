<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InstagramModel extends Model
{
    use HasFactory;

    protected $table = 'instagrams_tables';

    protected $fillable = [
        'username',
        'posts',
        'follower',
        'following',
        'pfp',
        'updated_at',
    ];
}
