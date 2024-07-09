<?php

namespace App\Http\Controllers;

use App\Models\hoadon;
use App\Models\sanpham;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class hoadonController extends Controller
{
    public function index()
    {
        if (session::has('Keyid')) {
            $userId = session::get('Keyid');
            $hoadons = DB::table('HoaDon')
                ->join('sanpham', 'HoaDon.idsanpham', '=', 'sanpham.idsanpham')
                ->join('Login', 'HoaDon.Keyid', '=', 'Login.Keyid')
                ->select('HoaDon.*', 'sanpham.giatien', 'Login.username')
                ->where('HoaDon.Keyid', $userId)
                ->get();
            return view('User/xem', compact('hoadons'));
        } else {
            dd('khong co');
            return redirect()->to('login');
        }
    }

    public function showadmin()
    {
        $hoadons = hoadon::join('Login', 'HoaDon.Keyid', '=', 'Login.Keyid')
            ->select('HoaDon.*', 'Login.username')
            ->get();
        return view('HoaDonAdmin/showAdmin', compact('hoadons'));
    }

    function addhoadon(Request $request)
    {
        $id = session::get('Keyid');
        $sp = session::get('sanphamchitiet');
        $hoadon = new hoadon();
        $hoadon->Keyid = $id;
        $hoadon->idsanpham = $sp->idsanpham;
        $hoadon->tensanpham = $sp->tensanpham;
        $hoadon->mau = $sp->mausac;
        $hoadon->kichco = $sp->kichco;
        $hoadon->gia = $sp->giatien;
        $hoadon->img = $sp->img;
        $hoadon->ngayban = now();
        $soluong = $request->input('quanlity');
        $hoadon->soluong = $soluong;
        $sanpham = sanpham::findOrFail($sp->idsanpham);


        if ($sanpham->soluongton >= $soluong) {
            $sanpham->soluongton -= $soluong;
            $sanpham->save();
            $tonghoadon = $sanpham->giatien * $soluong;
            $hoadon->tonghoadon = $tonghoadon;
            $hoadon->save();

        
            return redirect()->route('hoadon.index')->with('success', 'Mua hàng thành công!');
        } else {
            
            return redirect()->back()->with('error', 'Sản phẩm đã hết hàng hoặc số lượng không đủ!');
        }
    }

    public function destroy($id)
    {
        $hoadons = hoadon::findOrFail($id);
        $hoadons->delete();
        return redirect()->route('hoadon.showadmin')->with('success', 'Xóa thành công!');
    }
}
