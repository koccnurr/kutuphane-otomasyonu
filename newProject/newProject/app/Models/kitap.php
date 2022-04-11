<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kitap extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['kitap_adi','yazar_id'];
    protected $table = "kitap";
     public function yazar()
    {
        return $this->hasOne('App\Models\yazar','id','yazar_id');
    }
}
