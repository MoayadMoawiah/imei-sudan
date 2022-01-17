<?php namespace Moayad\TechnicalSupport\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMoayadTechnicalsupportProfile extends Migration
{
    public function up()
    {
        Schema::create('moayad_technicalsupport_profile', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('dept_id')->nullable();
            $table->bigInteger('phone')->nullable();
            $table->integer('user_id');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('moayad_technicalsupport_profile');
    }
}
