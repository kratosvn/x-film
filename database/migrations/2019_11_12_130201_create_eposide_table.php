<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEposideTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eposide', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_youtobe', 20);
            $table->varchar('name', 100);
            $table->text('description');
            $table->int('eposode');
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
        Schema::dropIfExists('eposide');
    }
}
