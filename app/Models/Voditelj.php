<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Emisija;

class Voditelj extends Model
{
    use HasFactory;

    protected $fillable = [
        'ime',
        'prezime',
        'plata',
        'instagram',
    ];

    public function emisije()
    {
        return $this->hasMany(Emisija::class);
    }
}
