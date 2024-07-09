<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sanpham extends Model
{
    protected $table = 'sanpham';
    
    protected $primaryKey='idsanpham';
    protected $fillable = ['tensanpham','mausac','kichco','img','mota','capnhat','giatien','idLoai','soluongton'];
    
    public $timestamps = false;


}
