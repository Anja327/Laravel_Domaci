<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmisijasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emisijas', function (Blueprint $table) {
            $table->id();
            $table->string('naziv');
            $table->integer('trajanje');
            $table->foreignId('televizija_id')->constrained('televizijas');
            $table->foreignId('voditelj_id')->constrained('voditeljs');
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
        Schema::dropIfExists('emisijas');
    }
}
