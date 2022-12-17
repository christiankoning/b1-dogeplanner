<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PunchCard extends Model
{
    use HasFactory;

    protected $fillable = [
        'progress',
        'limit',
        'id_user',
    ];
}
