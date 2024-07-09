<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dangky extends Model
{
    protected $table = 'Login';
    protected $primaryKey='Keyid';
    protected $fillable = ['username','password'];
    public $timestamps = false;
}
