<?php namespace Moayad\Icp\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMoayadIcpInfections extends Migration
{
    public function up()
    {
        Schema::create('moayad_icp_infections', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->date('date')->nullable();
            $table->string('flight_no')->nullable();
            $table->integer('airline_id')->nullable();
            $table->integer('supervisor_id')->nullable();
            $table->text('disinfectant_name')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('moayad_icp_infections');
    }
}
