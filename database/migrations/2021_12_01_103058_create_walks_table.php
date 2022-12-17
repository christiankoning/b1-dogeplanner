<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWalksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('walks', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->time('start_time');
            $table->time('end_time');
            $table->text('amount_dogs');
            $table->text('location');
            $table->text('status')->default("pending");
            $table->foreignId('id_user');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('walks');
    }
}
