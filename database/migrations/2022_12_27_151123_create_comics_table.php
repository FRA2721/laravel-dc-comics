<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     * @author FRANCESCO CIMINO
     */
    public function up()
    {
        Schema::create('comics', function (Blueprint $table) {

            // data
            $table->id();
            $table->string('title', 200);
            $table->text('dedscription')->nullable();
            $table->text('thumb');
            $table->string('price', 15);
            $table->date('sale_date');
            $table->string('type', 50);
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
        Schema::dropIfExists('comics');
    }
};
