<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Yayınevi extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable=['yayınEvi_adı','basım_tarihi'];
    protected $table="yayınevi";
}
