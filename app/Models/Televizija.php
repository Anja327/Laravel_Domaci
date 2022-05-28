<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Emisija;

class Televizija extends Model
{
    use HasFactory;

    public function emisije()
    {
        return $this->hasMany(Emisija::class);
    }
}
