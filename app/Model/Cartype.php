<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use DB;

class Cartype extends Model
{
    public $table = 'tms_cartype';
    protected $primaryKey = 'tid';
    protected $fillable = ['typename', 'companies', 'area', 'weight', 'traffic', 'capacity', 'cubage', 'maximum', 'long', 'width', 'height', 'state', 'remark', 'creator', 'creatordate', 'modifier', 'modifierdate', 'verifier', 'verifierdate	'];
    protected $guarded = [];
    public $timestamps = false;
}