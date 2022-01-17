<?php namespace Moayad\TechnicalSupport\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMoayadTechnicalsupportReport extends Migration
{
    public function up()
    {
        Schema::create('moayad_technicalsupport_report', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('user_id')->nullable();
            $table->integer('dept_id')->nullable();
            $table->text('description')->nullable();
            $table->integer('phone')->nullable();
            $table->integer('type_id')->nullable();
            $table->integer('status_id')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('moayad_technicalsupport_report');
    }
}
