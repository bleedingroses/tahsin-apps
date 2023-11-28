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
        return $this->belongsTo(Grup::class, 'grup_id');
    }
    public function kajian()
    {
        return $this->belongsTo(Kajian::class);
    }
}
