<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NovaKolonaDan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('emisijas', function (Blueprint $table) {
            $table->after('trajanje', function ($table) {
                $table->string('dan');
            });
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('emisijas', function (Blueprint $table) {
            $table->dropColumn('dan');
        });
    }
}
