<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2018/9/6
 * Time: 21:10
 */
namespace App\Model;
use Illuminate\Database\Eloquent\Model;
use DB;
class Newcar extends Model{
    //表名newcar
        public $table = 'tms_newcar';
    //主键
        protected $primaryKey='carid';
        protected $filable=
        ['carname','companies','area','platenumbers','specification','version','property','load','transport','driver','driverphone','assistant','assistantphone','state','yesno','yes','remark','creator','creatordate','modifier','lastrdate','verifier','verifierdate'];
        protected $guarded = [];
        public $timestamps = false;

        public function add($request){

        }
        

}