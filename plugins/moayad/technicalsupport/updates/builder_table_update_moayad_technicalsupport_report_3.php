<?php namespace Moayad\TechnicalSupport\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMoayadTechnicalsupportReport3 extends Migration
{
    public function up()
    {
        Schema::table('moayad_technicalsupport_report', function($table)
        {
            $table->string('phone')->nullable()->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('moayad_technicalsupport_report', function($table)
        {
            $table->integer('phone')->nullable()->unsigned(false)->default(NULL)->change();
        });
    }
}
