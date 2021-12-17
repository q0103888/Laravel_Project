<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Order;

class AdminController extends Controller
{
    public function user() {
        $data=user::all();
        //$data는 유저모델의 정보를 가지고 오는 것

        return view("admin.users", compact("data"));
        //compact는 PHP기능이며 변수와 그 값을 포함하는 배열을 생성
    }
    // users페이지를 표시하기 위한 것

    public function deleteuser($id) {
        $data=user::find($id);
        $data->delete();
        return redirect()->back();
        //유저를 삭제하기 위한 것 id값을 찾은 후 삭제한 뒤 redirect로 다시 원래 페이지를 출력
    }

    public function foodmenu() {
        $data = food::all();
        return view("admin.foodmenu", compact("data"));
        //admin페이지에서 메뉴 등록으로 이동
    }

    public function deletemenu($id) {
        $data=food::find($id);
        $data->delete();
        // 메뉴를 삭제하는 메소드 food에서 id값을 찾은다음 삭제 후 전 페이지로 이동
        return redirect()->back();
    }

    

    public function upload(Request $request) {
        //메뉴 정보 등록 및 업데이트
        $data = new Food();
        $image=$request->image;

        $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('foodimage',$imagename); //저장한 이미지를 foodimage라는 파일로 이동
            $data->image=$imagename; 
            $data->title=$request->title;
            $data->price=$request->price;
            $data->description=$request->description; 
            //각각 해당 정보를 입력후 저장  
            $data->save();
            
            return redirect()->back();
    }

    public function updateview($id) {
        $data=food::find($id);
        return view("admin.updateview", compact("data"));
    }

    public function update(Request $request, $id) {
        $data=food::find($id);

        $image=$request->image;

        $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('foodimage',$imagename); //저장한 이미지를 foodimage라는 파일로 이동
            $data->image=$imagename; 
            
            $data->title=$request->title;
            $data->price=$request->price;
            $data->description=$request->description; 
            //각각 해당 정보를 입력후 저장  
            $data->save();
            
            return redirect()->back();
    }

    public function orders() {

        $data=order::all();

        return view('admin.orders', compact('data'));
        // user가 주문한 정보를 admin이 확인하는 곳으로 이동하는 것
    }

    public function deleteorders($id) {
        $data=order::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function search(Request $request) {
        
        $search = $request->search;
        
        $data=order::where('name','like', '%'.$search.'%')->orWhere('foodname','like', '%'.$search.'%')->get();
        // 주문자 정보를 이름으로 검색해 찾아야 하므로 이름을 찾아옴

        return view('admin.orders', compact('data'));
    }


}
