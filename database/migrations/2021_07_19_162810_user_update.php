<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UserUpdate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
    Schema::table('users', function (Blueprint $table) {    
        $table->string('name', 100)->change();
        $table->string('firstname', 100); 
        $table->string('email', 60)->change();       
        $table->string('password', 100)->change();       
        $table->string('phone',30);
        $table->string('mobile',30);
         
         $table->boolean('gdpr_valided');
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
