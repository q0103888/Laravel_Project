<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Food;

class HomeController extends Controller
{
    public function index()
    {
        $data=Food::all();
        //food에 저장되어있는 정보를 가져오기 위해
        return view("home", compact("data"));
        //Home.blade.php를 return해서 보여줌
    }

    public function redirects()
    {
        $data=food::all();

        $usertype= Auth::user()->usertype;
        //Auth를 사용하는것은 지금유저가 로그인한지 안한지 확인하기 위해

        if($usertype == '1')
        {
            return view('admin.adminHome');
        }
        else 
        {
            return view('home',compact('data'));
        }
        // Auth를 먼저 사용해 로그인 상태 확인후 만약 usertype가 1이면 admin뷰로 일반이면 Home뷰로 이동
    }
}
