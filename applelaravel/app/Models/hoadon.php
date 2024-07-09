<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hoadon extends Model
{
    protected $table = 'hoadon';
    protected $primaryKey='idhoadon';
    protected $fillable = ['Keyid',
    'username',
    'idsanpham' ,
    'tensanpham' ,
    'soluong' ,
    'mau' ,
    'kichco' ,
    'gia' ,
    'img' ,
    'ngayban' ,
    'tonghoadon',];
    public $timestamps = false;

  
}
