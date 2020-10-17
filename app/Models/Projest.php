<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projest extends Model
{
    use HasFactory;
    protected $fillable = [
        'details',
        'name',
        'title',
        'date',
        'photo',
        'status',
    ];
}
