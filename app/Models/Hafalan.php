<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hafalan extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function santri()
    {
        return $this->belongsToMany(Santri::class)->withPivot(['ayat']);
    }
}
