<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Turu extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable=['tur_adi','yayınEvi_id'];
    protected $table="turu";

     public function yayınEvi()
    {
        return $this->hasOne('App\Models\yayınevi','id','yayınEvi_id');
    }
}
}
