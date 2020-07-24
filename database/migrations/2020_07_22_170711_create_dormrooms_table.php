<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDormroomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('Dormrooms', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('Dormrooms_id')->nullable();
            $table->string('name_of_the_property') -> unique();
            $table->float('price');
            $table->string("adress");
            $table->integer('free_dorms') -> nullable();
            $table->string('adicional_prices')-> nullable();
            $table->string('phone');
        
        }

    /**
     * Reverse the migrations.
     *
     * @return void
     */

    public function down()
    {
        Schema::dropIfExists('Dormrooms');
    }
}
