<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hafalan extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function tahsin()
    {
        return $this->belongsTo(Tahsin::class);
    }
}