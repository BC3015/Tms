<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Send extends Model
{
    public $table = 'tms_send';
    protected $primaryKey = 'sendid';
    protected $fillable = ['yesno', 'billstype', 'state', 'billsdate', 'companies', 'area', 'warehouse', 'course', 'manner', 'comname', 'typename', 'carname', 'drivername', 'driverphone', 'senddate','weight','bulk','load','remark', 'creator', 'creatordate', 'modifier', 'modifierdate', 'verifier', 'verifierdate'];
    protected $guarded = [];
    public $timestamps = false;
}
?>