<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class loai extends Model
{
    protected $table = 'Loai';
    protected $primaryKey='idLoai';
    protected $fillable = ['tenloai'];
    public $timestamps = false;
}
