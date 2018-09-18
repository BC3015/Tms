<?php
namespace App\Http\Controllers;

use Request;
use DB;
use App\Http\Controllers\Controller;
use App\Model\Common;


class CommonController extends Controller
{
    public function add(){
        return view('common/add');
    }
    public function doadd(){
        $request=Request::all();
        unset($request['_token']);
        $Tms_common=new Common;
        $request['creatordate']=time();
        $res=$Tms_common->insert($request);
        if ($res){
            return redirect()->action('CommonController@show');
        } else {
            return redirect()->action('CommonController@add');
        }
    }
    public function show(){
        $request=Request::all();
        $common = Common::simplePaginate(5);
        return view('common/show',['common'=>$common]);
    }
    public function del(REQUEST $request){
        $data=$request::all();
        $comid=$data['comid'];
        $obj=Common::find($comid);
        $res=$obj->delete();
        if ($res){
            return redirect()->action('CommonController@show');
        } else {
            return redirect()->action('CommonController@show');
        }
    }
    public function upd(REQUEST $request){
        $data=$request::all();
        $comid=$data['comid'];
        $obj=Common::find($comid);
        return view('common/upd',['data'=>$obj]);
    }
    public function doupd(){
        $request=Request::all();
        $comid=$request['comid'];
        unset($request['_token']);
        unset($request['comid']);
        $request['modifierdate']=time();
        $obj=Common::find($comid);
        $res=$obj::where('comid',$comid)->update($request);
        if ($res){
            return redirect()->action('CommonController@show');
        } else {
            return redirect()->action('CommonController@add');
        }
    }
}
