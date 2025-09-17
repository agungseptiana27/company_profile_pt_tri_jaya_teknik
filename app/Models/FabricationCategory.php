<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FabricationCategory extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function fabrication()
    {
        return $this->hasMany(Fabrication::class);
    }
}
