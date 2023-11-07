<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grup extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function santri()
    {
        return $this->hasMany(Santri::class);
    }

    public function materi()
    {
        return $this->belongsToMany(Materi::class)->withPivot(['absensi']);
    }

    public function kajian()
    {
        return $this->hasMany(Kajian::class);
    }

}
