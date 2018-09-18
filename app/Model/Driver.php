<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    public $table = 'tms_driver';
    protected $primaryKey = 'drid';
    protected $fillable = ['yesno', 'companies', 'area', 'drivername', 'sex', 'age', 'numbers', 'years', 'license', 'comname', 'phone', 'typename', 'state', 'state', 'remark', 'creator', 'creatordate', 'modifier', 'modifierdate', 'verifier', 'verifierdate'];
    protected $guarded = [];
    public $timestamps = false;
}
?>