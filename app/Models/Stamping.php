<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stamping extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'image',
        'dimension',  
    ];

    // public function category()
    // {
    //     return $this->belongsTo(KategoriStamping::class, 'stamping_category_id');
    // }
    
}