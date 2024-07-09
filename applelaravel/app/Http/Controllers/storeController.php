<?php

namespace App\Http\Controllers;
use App\Models\sanpham;
use Illuminate\Http\Request;

class storeController extends Controller
{
    public function index()
    {
        try{
             $sanphams = sanpham::all(); 

             return view('User/user',compact('sanphams')); 
        }catch (\Exception $e) {
            // Xử lý lỗi nếu có
            return response()->view('errors.500', [], 500);
        }
    }

}
