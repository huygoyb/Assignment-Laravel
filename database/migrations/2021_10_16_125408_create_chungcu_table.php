<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChungcuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chung_cu', function (Blueprint $table) {
            $table->id('id');
            $table->string('name');
            $table->string('address');
            $table->integer('price');
            $table->string('thumbnail');
            $table->string('general_information');
            $table->string('detailed_information');
            $table->integer('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chung_cu');
    }
}
