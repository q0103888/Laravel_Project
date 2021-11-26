<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        return view("home");
        //Home.blade.php를 return해서 보여줌
    }

    public function redirects()
    {
        $usertype= Auth::user()->usertype;
        //Auth를 사용하는것은 지금유저가 로그인한지 안한지 확인하기 위해

        if($usertype == '1')
        {
            return view('admin.adminHome');
        }
        else 
        {
            return view('home');
        }
        // Auth를 먼저 사용해 로그인 상태 확인후 만약 usertype가 1이면 admin뷰로 일반이면 Home뷰로 이동
    }
}
