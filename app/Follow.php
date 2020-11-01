<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Follow extends Model
{
    protected $table="followup";
    protected $fillable=['date','patient_id'];

     public function patient()
   	{
   		return $this->hasOne('App\Patient','id','patient_id');
   	}
}
