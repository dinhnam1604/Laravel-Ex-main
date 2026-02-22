<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function signIn()
    {
        return view('auth.signin');
    }

    public function checkSignIn(Request $request)
    {
        $username   = $request->username;
        $password   = $request->password;
        $repass     = $request->repass;
        $mssv       = $request->mssv;
        $lopmonhoc  = $request->lopmonhoc;
        $gioitinh   = $request->gioitinh;

        if (
            $username === 'nam16' &&
            $password === '123abc' &&
            $repass === '123abc' &&
            $mssv === '024220' &&
            $lopmonhoc === '67PM2' &&
            $gioitinh === 'nam'
        ) {
            return "Đăng ký thành công!";
        }

        return "Đăng ký thất bại";
    }
}