<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Kajian extends Model
{
    use HasFactory, Sortable;
    protected $guarded = [];
    public function grup()
    {
        return $this->belongsTo(Grup::class);
    }
    public function santri()
    {
        return $this->hasMany(Santri::class);
    }
}
