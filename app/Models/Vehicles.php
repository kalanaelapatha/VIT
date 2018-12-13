<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehicles extends Model
{
    //Table Name
    protected $table='vehicles';
    //Primary Key
    public $primaryKey='id';
    //Timestamps
    public $timestamps=true;

    public function supplier(){

        return $this->belongsTo('App\Models\suppliers','supplier_id');

    }
}


