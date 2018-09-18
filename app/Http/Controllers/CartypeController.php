<?php
namespace App\Http\Controllers;

use Request;
use DB;
use App\Http\Controllers\Controller;
use App\Model\Cartype;
use App\Model\Common;


class CartypeController extends Controller
{
    public function add(){
        $data=Common::get();
        return view('cartype/add',['data'=>$data]);
    }
    public function doadd(){
        $request=Request::all();
        unset($request['_token']);
        $Tms_common=new Cartype;
        $res=$Tms_common->insert($request);
        if ($res){
            return redirect()->action('CartypeController@show');
        } else {
            return redirect()->action('CartypeController@add');
        }
    }
    public function show(){
        $data=Common::get();
        return view('commonow',['data'=>$data]);
    }
    public function del(REQUEST $request){
        $data=$request::all();
        $comid=$data['tid'];
        $obj=Common::find($comid);
        $res=$obj->delete();
        if ($res){
            return redirect()->action('CartypeController@show');
        } else {
            return redirect()->action('CartypeController@show');
        }
    }
    public function upd(REQUEST $request){
        $data=$request::all();
        $comid=$data['tid'];
        $obj=Common::find($comid);
        return view('common/upd',['data'=>$obj]);
    }
    public function doupd(){
        $request=Request::all();
        $tid=$request['tid'];
        unset($request['_token']);
        unset($request['tid']);
        $obj=Common::find($tid);
        $res=$obj::where('tid',$tid)->update($request);
        if ($res){
            return redirect()->action('CartypeController@show');
        } else {
            return redirect()->action('CartypeController@add');
        }
    }
}
