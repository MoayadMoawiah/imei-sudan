<?php namespace Moayad\Imei\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMoayadImeiDevices extends Migration
{
    public function up()
    {
        Schema::create('moayad_imei_devices', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('imei')->nullable();
            $table->integer('brand_id')->nullable();
            $table->string('model')->nullable();
            $table->integer('type_id')->nullable();
            $table->integer('situation_id')->nullable();
            $table->string('phone')->nullable();
            $table->string('id_card')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('moayad_imei_devices');
    }
}
