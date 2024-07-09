<?php

namespace App\Http\Controllers;

use App\Models\loai;
use App\Models\sanpham;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class loaiController extends Controller
{
    public function loai($idLoai)
    {
        $loai = Loai::findOrFail($idLoai);
        $sanphams = DB::table('sanpham')
                    ->join('Loai', 'sanpham.idLoai', '=', 'Loai.idLoai')
                    ->select('sanpham.tensanpham', 'sanpham.giatien', 'sanpham.img','sanpham.idsanpham')
                    ->where('sanpham.idLoai', $idLoai)
                    ->get();
        // dd($idLoai);
        return view('Loai/xemloai', compact('loai', 'sanphams'));
    }

}
