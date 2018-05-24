<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Down extends Model
{
    protected $table='down';
    protected $primaryKey='id';
    public $timestamps=false;
    protected $guarded=[];
}
