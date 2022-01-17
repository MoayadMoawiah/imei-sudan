<?php namespace Moayad\Imei\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMoayadImeiSituation extends Migration
{
    public function up()
    {
        Schema::create('moayad_imei_situation', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('moayad_imei_situation');
    }
}
