<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Materi extends Model
{
    use HasFactory, Sortable;
    protected $guarded = [];

    public function grup()
    {
        return $this->belongsToMany(Grup::class)->withPivot(['absensi']);
    }

}
