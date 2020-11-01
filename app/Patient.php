<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $table="patient";
    protected $fillable=['name','gender','dob','phone','address','department_id'];

    public function department()
   	{
   		return $this->hasOne('App\Department','id','department_id');
   	}

   	 public static function scopeSearch($query, $searchTerm)
    {
        return $query->Where('name', 'like', '%' .$searchTerm. '%');
    }
}
