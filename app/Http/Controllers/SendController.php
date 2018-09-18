<?php

namespace App\Http\Controllers;


use Request;
use App\Model\Send;
use App\Model\Driver;
use App\Model\Cartype;
use App\Model\Newcar;
use App\Model\Common;

class SendController extends Controller
{
    public function send(){
        $com=Common::get();
        $types=Cartype::get();
        $news=Newcar::get();
        $dri=Driver::get();
//        var_dump($new);die;
        return view('send.send',['com'=>$com,'types'=>$types,'news'=>$news,'dri'=>$dri]);
    }
    public function  add(){
        $request=Request::all();
        $data=$request['data'];
        $arr=array();
//        $s=array();
        foreach($data as $k=>$v)
        {
            $arr[$v['name']]=$v['value'];
        }
        unset($arr['_token']);
//        var_du/mp($arr);die;
        $tms_send=New Send;
        $arr['creatordate']=time();
        $res=$tms_send->insert($arr);
//        var_dump($res);die;
        if ($res){
            return  [ 'status'=>1,'message'=>'添加成功'];
        }else{
            return redirect()->action('sendController@send');
        }
    }
    public function show(){
        $data=Send::get();
        return view('send.show',['data'=>$data]);
//          var_dump($data);die;
//          return view('driver.show',['data'=>$data]);
    }
    public function dele(){
        $request=Request::all();
        $sendid=$request['sendid'];
//        echo ($drid);die;
        $tms_driver=New Send;
        $obj=$tms_driver->find($sendid);
//        print_r($obj);die;
        $res=$obj->delete();
        if ($res){
//            return  [ 'status'=>1,'message'=>'添加成功'];
            return redirect()->action('sendController@show');
        }else{
            return redirect()->action('sendController@show');
        }
    }
    public function edit(){
        $request=Request::all();
        $sendid=$request['sendid'];
//        echo $sendid;die;
        $tms_send=New Send;
        $data=$tms_send->find($sendid);
//        print_r($data);die;
        return view('send.update',['data'=>$data]);
    }
    public function update(){
        $request=Request::all();
//        print_r($request);die;
        $sendid=$request['sendid'];
//     print_r($sendid);die;
        unset($request['_token']);
        unset($request['sendid']);
        $request['creatordate']=time();
        $obj=Send::find($sendid);
//        echo $obj;die;
        $res=Send::where('sendid',$sendid)->update($request);
//        print_r($res);die;
        if ($res){
            return redirect()->action('sendController@show');
        }else{
            return redirect()->action('sendController@show');
        }
    }
}