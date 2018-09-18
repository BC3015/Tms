<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use DB;

class Common extends Model
{
    public $table='tms_common';
    protected $primaryKey = 'comid';
    protected $fillable = ['companies','area','comname','cname','manner','permit','licence','contract','pledge','ratepaying','legal','capital','userbank','banknumber','banksite','state','remark','creator','creatordate','modifier','modifierdate','verifier','verifierdate'];
    protected $guarded = [ ];
    public $timestamps = false;
//    const CREATED_AT = 'creatordate';
//    const UPDATED_AT = 'verifierdate';
    public function add($request){

    }
}
