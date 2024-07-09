<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sanpham;
use Carbon\Carbon;
use App\Models\loai;
use Illuminate\Support\Facades\DB;

class sanphamController extends Controller
{
    public function index()
    {
        $sanphams = sanpham::join('Loai', 'sanpham.idLoai', '=', 'Loai.idLoai')
            ->select('sanpham.*', 'Loai.tenloai')
            ->get();
        return view('Sanpham/show', compact('sanphams'));
    }
    public function create()
    {
        $sanphams =sanpham::all();
        $loais = loai::all();
        return view('Sanpham/create', compact('loais'));
    }
    public function store(Request $request)
    {
        // dd($request);
        $data = $request->all();
        $data['capnhat'] = Carbon::now();
        $sanphams = sanpham::create($data);
        // Thực hiện câu truy vấn INSERT
        DB::table('sanpham')->insert([
            'idLoai' => $data['idLoai'],
            'tensanpham' => $data['tensanpham'],
            'mausac' => $data['mausac'],
            'kichco' => $data['kichco'],
            'img' => $data['img'],
            'mota' => $data['mota'],
            'capnhat' => $data['capnhat'],
            'giatien' => $data['giatien'],
            'soluongton' => $data['soluongton']

        ]);

        if ($request->hasFile('img')) {
            $image = $request->file('img');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('imgapple'), $imageName);
            $data['img'] = $imageName;
        }else {
            $data['img'] = $sanphams->img; 
        }
        return redirect()->to('/sanpham')->with('status', 'them thanh cong');
    }


    public function edit($id)
    {
        $sanphams = sanpham::findOrFail($id);
        $loais = Loai::all();
        return view('Sanpham.edit', compact('sanphams', 'loais'));
    }


    public function update(Request $request, $id)
    {
        $sanphams = sanpham::findOrFail($id);
        $data = $request->all();
        // dd($request->all());
        $data['capnhat'] = Carbon::now();
        $sanphams = sanpham::findOrFail($id);
        $sanphams->update($data);

        if ($request->hasFile('img')) {
            $image = $request->file('img');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('imgapple'), $imageName);
            $data['img'] = $imageName;
        }else {
            $data['img'] = $sanphams->img; 
        }

        // dd($sanphams);
        return redirect()->route('sanpham.index')->with('success', 'Sửa thành công!');
    }


    public function destroy($id)
    {
        $sanphams = sanpham::findOrFail($id);
        $sanphams->delete();
        return redirect()->route('sanpham.index')->with('success', 'Xóa thành công!');
    }
}
