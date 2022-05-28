<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Televizija;
use App\Models\Voditelj;

class Emisija extends Model
{
    use HasFactory;

    public function televizija()
    {
        return $this->belongsTo(Televizija::class);
    }

    public function voditelj()
    {
        return $this->belongsTo(Voditelj::class);
    }
}
