<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
//引入模型
use App\Member;

class TestController extends Controller
{
    //

    public function welcome()
    {
        return view('welcome');
    }

    public function C()
    {
        return view('/create');
    }

    public function U()
    {
        return view('/update');
    }

    public function D()
    {
        return view('/delete');
    }

    public function R()
    {
        return view('/retrieve');
    }

    public function create(Request $request)
    {
        $model = new Member();
        $result = $model -> create($request -> all());
        return view('welcome');
    }

    public function retrieve(Request $request)
    {
        $data = Member::find($request -> id);
        return view('welcome');
    }

    public function update(Request $request)
    {
        $data = Member::find($request -> id);
        $data -> username = $request -> username;
        $data -> password = $request -> password;
        $data -> todo = $request -> todo;
        $data -> save();
        return view('welcome');
    }

    public function delete(Request $request)
    {
        $data = Member::find($request -> id);
        $data -> delete();
        $data -> save();
        return view('welcome');
    }
}
