<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\LengthAwarePaginator;
use Request;
use App\Model\Newcar;//引入model类
use App\Model\Cartype;
use App\Model\Driver;
use App\Model\Common;


class NewcarController extends Controller{

    //const table = Newcar;
    public function add(){
        $cartype=Cartype::get();
        $driver=Driver::get();
        $common=Common::get();
        return view('newcar/add',['cartype'=>$cartype,'driver'=>$driver,'common'=>$common]);
    }

    //添加
    public function doadd(){
        $request = Request::all();
        unset($request['_token']);
        $Tms_newcar = New Newcar;
        $request['creatordate']=time();
        //$request['lastdate']=time();
        $res = $Tms_newcar->insert($request);
        //var_dump($res);
        if($res){
            return redirect()->action('NewcarController@show');
        }else{
            return redirect()->action('NewcarController@add');
        }
    }

    //展示
    public function show(){
        //$res = $Tms_newcar->get($request);
        $data=Newcar::get();
        $data = DB::table('tms_newcar')->paginate(5);
        return view('newcar/show',['data'=>$data]);
    }

    //删除
    public function del(REQUEST $request){
        $data = $request::all();
        $carid = $data['id'];
        $obj = Newcar::find($carid);
        $res = $obj->delete();
        if($res){
            return redirect()->action('NewcarController@show');
        }else{
            return redirect()->action('NewcarController@show');
        }
    }

    //修改方法
    public function upd(REQUEST $request){
        $data=$request::all();
        $carid=$data['id'];
        $obj=Newcar::find($carid);
        return view('newcar/upd',['data'=>$obj]);
    }

    //修改数据
    public function doupd(){
        $request=Request::all();
        $carid=$request['carid'];
        unset($request['_token']);
        unset($request['carid']);
        $request['lastrdate']=time();
        $obj=Newcar::find($carid);
        $res=Newcar::where('carid',$carid)->update($request);
        if ($res){
            return redirect()->action('CommonController@show');
        } else {
            return redirect()->action('CommonController@add');
        }
    }


}