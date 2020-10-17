<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyCertificate extends Model
{
    use HasFactory;
    protected $fillable = [
        'details',
        'name',
        'date',
        'photo',
        'status',
    ];
}
