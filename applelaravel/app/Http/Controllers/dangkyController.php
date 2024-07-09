<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class dangkyController extends Controller
{
    public function create(){
        return view('Dangky/create');
    }
    public function register1(Request $request)
    {
        $data = $request->all();

        // Thực hiện câu truy vấn INSERT
        DB::table('Login')->insert([
            
            'username' => $data['username'],
            'password' => $data['password'],
        ]);
        $dangkys = User::all();
       
        return view('login',compact('dangkys'));
    }

    public function show(){
        $user = User::All();
        return view('Dangky/show', compact('user'));
    }
}
