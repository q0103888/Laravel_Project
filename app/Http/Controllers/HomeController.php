<?php

namespace App\Http\Controllers;

use App\Models\Cart;
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
            $user_id=Auth::id();
            $count = Cart::where('user_id', $user_id)->count();
            return view('home',compact('data','count'));
            //,compact('data'), compact('count')
        }
        // Auth를 먼저 사용해 로그인 상태 확인후 만약 usertype가 1이면 admin뷰로 일반이면 Home뷰로 이동
    }

    public function addcart(Request $request, $id) {
        //로그인 한지 안한지 확인하고 로그인 되어있으면 add버튼을 누르면 carts DB에 추가됨
        if(Auth::id()) {
            $user_id=Auth::id();
            $foodid=$id;
            $quantity= $request->quantity;
            
            $cart=new Cart;
            $cart->user_id=$user_id;
            $cart->food_id=$foodid;
            $cart->quantity=$quantity;

            $cart->save();

            return redirect()->back();
        }
        else{
            return redirect('/login');
        }
    }

    public function showcart(Request $request, $id)
    {
        // count는 지금 자신이 주문한 메뉴가 몇개인지 표시해줌
        $count=cart::where('user_id', $id)->count();

        //주문 내역을 표시해야 하는데 음식 이름 같은 경우는 food DB에 있으므로 join을 사용해 표시한다.
        $data=cart::where('user_id', $id)->join('food', 'carts.food_id', '=', 'food.id')->get();

        $data2=cart::select('*')->where('user_id', '=', $id)->get();

        return view('showcart', compact('count', 'data', 'data2'));
    }

    public function remove($id)
    {
        $data=cart::find($id);

        $data->delete();
        
        return redirect()->back();
    }
}
