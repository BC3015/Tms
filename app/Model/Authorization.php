<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use DB;

class Authorization extends Model
{
    public $table='authorization';
    protected $primaryKey = 'id';
    protected $fillable = ['authorization_car','authorization_driver','authorization_start','authorization_end','authorization_desc','authorization_user','time','authorizatio_status'];
    protected $guarded = [ ];
    public $timestamps = false;
//    const CREATED_AT = 'creatordate';
//    const UPDATED_AT = 'verifierdate';
    public function add($request){

    }
}
