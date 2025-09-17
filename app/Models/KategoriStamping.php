<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriStamping extends Model
{
    use HasFactory;

    protected $table = 'stamping_categories';

    protected $fillable = ['name'];

    public function fabrication()
    {
        return $this->hasMany(Stamping::class);
    }
}