<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Santri extends Model
{
    use HasFactory, Sortable;
    protected $guarded = [];
    public function grup()
    {
        return $this->belongsTo(Grup::class);
    }
    public function hafalan()
    {
        return $this->belongsToMany(Hafalan::class)->withPivot(['ayat']);
    }
}
