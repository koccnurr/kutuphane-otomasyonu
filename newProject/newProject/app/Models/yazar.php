<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Yazar extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable=['yazar_adi','yazar_soyadi','yazar_tlf'];
    protected $table="yazar";
}
