<?php

namespace App\Http\Controllers;

use Request;
use App\Model\Driver;
use App\Model\Common;
use App\Model\Cartype;

class DriverController extends Controller
{
    public function driver(){
        $com=Common::get();
        $types=Cartype::get();
        return view('driver.driver',['com'=>$com,'types'=>$types]);
    }
    public function  add(){
        $request=Request::all();
        $data=$request['data'];
        $arr=array();
        foreach($data as $k=>$v)
        {
            $arr[$v['name']]=$v['value'];
//            var_dump($arr);die;
        }
        unset($arr['_token']);
//        var_dump($arr);die;
        $tms_driver=New Driver;
        $arr['creatordate']=time();
        $res=$tms_driver->insert($arr);
//        var_dump($res);die;
         if ($res){
             return  [ 'status'=>1,'message'=>'添加成功'];
         }else{
             return redirect()->action('driverController@driver');
         }
    }
    public function show(){
          $data=Driver::get();
        return view('driver.show',['data'=>$data]);
    }
    public function dele(Request $request,Category $category){
        $request=Request::all();
        $drid=$request['drid'];
//        echo ($drid);die;
        $tms_driver=New Driver;
        $obj=$tms_driver->find($drid);
//        print_r($obj);die;
        $res=$obj->delete();
        if ($res){
//            return  [ 'status'=>1,'message'=>'删除成功'];
            return redirect()->action('driverController@show');
        }else{
            return redirect()->action('driverController@show');
        }
    }
    public function edit(){
        $request=Request::all();
        $drid=$request['drid'];

        $tms_driver=New Driver;
        $data=$tms_driver->find($drid);
//        print_r($data);die;
        return view('driver.update',['data'=>$data]);
    }
    public function update(){
        $request=Request::all();
        $drid=$request['drid'];
        unset($request['_token']);
        unset($request['drid']);
        $request['creatordate']=time();
        $obj=Driver::find($drid);
        $res=Driver::where('drid',$drid)->update($request);
//        print_r($res);die;
        if ($res){
            return redirect()->action('driverController@show');
        }else{
            return redirect()->action('driverController@show');
        }
    }
}