<?php
namespace App\Http\Controllers;

use Request;
use DB;
use App\Http\Controllers\Controller;
use App\Model\Authorization;
use App\Model\Newcar;

class AuthorizationController extends Controller
{
    public function add(){

        return view('author/add');
    }
    public function doadd(){
        $request=Request::all();
        unset($request['_token']);
        $author=new Authorization;
        $request['dotime']=time();

        $res=$author->insert($request);
        if ($res){
            return redirect()->action('AuthorizationController@show');
        } else {
            return redirect()->action('AuthorizationController@add');
        }
    }
    public function show(Request $request){
        $data=Authorization::get();
        return view('author/show',['data'=>$data]);
    }
    public function upd(REQUEST $request){
        $request=Request::all();
        $id=$request['id'];
        $actual_time=time();
        $obj=Authorization::find($id);
        $obj->actual_time=$actual_time;
        $obj->save();
        return redirect()->action('AuthorizationController@show');
    }
    public function excel(){
        return redirect()->action('ExcelController@export');
    }

    public function test(){
        return view('author/test');
    }
}
