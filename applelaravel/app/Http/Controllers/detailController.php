<?php

namespace App\Http\Controllers;

use App\Models\hoadon;
use App\Models\sanpham;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class detailController extends Controller
{
    public function index($id)
    {
        $sanphams = sanpham::findOrFail($id);
        Session::put('sanphamchitiet', $sanphams);
        return view('User/detail', ['sanpham' => $sanphams]); // Trả về view và truyền biến $users vào vie
    }
}
