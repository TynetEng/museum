<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Speak extends Model
{
    use HasFactory;
    protected $fillable = [
        'date',
        'name',
        'code',
        'user_id'
    ];
}
