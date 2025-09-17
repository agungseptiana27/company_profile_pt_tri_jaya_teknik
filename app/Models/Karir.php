<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karir extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'education',
        'requirements',
        'descriptions',
        'email',
        'subject',
        'start_date',
        'end_date',
    ];

    protected $casts = [
        'requirements' => 'array',
        'descriptions' => 'array',
        'start_date' => 'date',
        'end_date' => 'date',
    ];
}