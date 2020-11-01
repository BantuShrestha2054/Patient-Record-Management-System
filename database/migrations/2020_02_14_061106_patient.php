<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Patient extends Migration
{

    public function up()
    {
         Schema::create('patient',function(Blueprint $table)
        {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('gender');
            $table->date('dob');
            $table->bigInt('phone');
            $table->unsignedBigInteger('department_id');
            $table->foreign('department_id')->references('id')->on('department');
            $table->timestamps();
        });
    }

    
    public function down()
    {
        
    }
}
