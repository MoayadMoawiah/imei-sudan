<?php namespace Moayad\TechnicalSupport\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMoayadTechnicalsupportReport extends Migration
{
    public function up()
    {
        Schema::table('moayad_technicalsupport_report', function($table)
        {
            $table->text('solution')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('moayad_technicalsupport_report', function($table)
        {
            $table->dropColumn('solution');
        });
    }
}
