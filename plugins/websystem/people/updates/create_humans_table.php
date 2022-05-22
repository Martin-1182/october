<?php namespace Websystem\People\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateHumansTable extends Migration
{
    public function up()
    {
        Schema::create('websystem_people_humans', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->string('zip');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('websystem_people_humans');
    }
}
