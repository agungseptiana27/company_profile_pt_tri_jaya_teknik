<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fabrication extends Model
{
    use HasFactory;

    protected $fillable = [
        'fabrication_category_id',
        'type',
        'title',
        'material',
        'process',
        'capacity',
        'image',
    ];

    public function category()
    {
        return $this->belongsTo(FabricationCategory::class, 'fabrication_category_id');
    }
}
