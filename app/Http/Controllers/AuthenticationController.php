<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; //Authentication

class AuthenticationController extends Controller
{
    public function login(){
        return view('login');
    }

    public function postLogin(Request $req){
        $dataUserLogin = [
            'email' => $req->email,
            'password' => $req->password
        ];
        if(Auth::attempt($dataUserLogin)){
            //Đăng nhập thành công
            if(Auth::user()->role == '1'){
                return redirect()->route('admin.products.listProduct')->with([
                    'message' => 'Đăng nhập thành công'
                ]);
            }else{
                //Đăng nhập vào user
                echo "Đăng nhập vào user";
            }
        }else{
            //Đăng nhập thất bại
            return redirect()->back()->with([
                'message' => 'Email hoặc password không đúng'
            ]);
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login')->with([
            'message' => 'Đăng xuất thành công'
        ]);
    }
}
