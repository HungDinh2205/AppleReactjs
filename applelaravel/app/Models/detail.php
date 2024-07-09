<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detail extends Model
{
    protected $table = 'sanpham';
    protected $primaryKey='idsanpham';
    protected $fillable = ['tensanpham','tieude','mausac','kichco','img','mota','capnhat','giatien'];
    public $timestamps = false;
}
