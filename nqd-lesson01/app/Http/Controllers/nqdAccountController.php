<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class nqdAccountController extends Controller
{
    public function index()
    {
        return "<h1> nqdAccountController; action index; return string";
    }
    //action trả về form thêm mới tài khoản
    public function create()
    {
        return view('nqd-account-create');
    }
    //action: return view and data
    public function showData()
    {
        $data = array('2310900030','NguyenQuocDuy');
        return view('nqd-account-show',compact('data'));
    }
    //acount-list
    public function list(){
        $data = array(
            ["id"=>1,"UserName"=>"DuyNguyen","Password"=>"18022005","FullName"=>"Nguyễn Quốc Duy"],
            
            ["id"=>2,"UserName"=>"Devmaster","Password"=>"12345678","FullName"=>"Devmaster Acacdemy"]
        );
        return view('nqd-account-list',compact('data'));
    }
    //get database
    public function getAllAccount()
    {
        $data = DB::table('nqd-account')->get();
        return view('nqd-account-getall',compact('data'));
    }
}
