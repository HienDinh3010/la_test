<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TuongthuatBD extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tuongthuat', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('phut',10)->unique();
            $table->string('noidung',2000);        
       });   
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tuongthuat');
    }
}
