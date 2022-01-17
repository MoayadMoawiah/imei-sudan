<?php namespace Moayad\TechnicalSupport\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMoayadTechnicalsupportReportType extends Migration
{
    public function up()
    {
        Schema::create('moayad_technicalsupport_report_type', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->text('description')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('moayad_technicalsupport_report_type');
    }
}
