<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Grup extends Model
{
    use HasFactory, Sortable;
    protected $guarded = [];
    public function santri()
    {
        return $this->hasMany(Santri::class);
    }
    public function kajian()
    {
        return $this->hasMany(Kajian::class);
    }

}
