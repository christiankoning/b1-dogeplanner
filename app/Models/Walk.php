<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Walk extends Model
{
    use HasFactory;

    //protected $dateFormat =

    protected $fillable = [
        'date',
        'start_time',
        'end_time',
        'amount_dogs',
        'location',
        'id_user',
    ];
}
