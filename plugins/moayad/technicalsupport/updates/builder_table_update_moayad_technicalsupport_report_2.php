<?php namespace Moayad\TechnicalSupport\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMoayadTechnicalsupportReport2 extends Migration
{
    public function up()
    {
        Schema::table('moayad_technicalsupport_report', function($table)
        {
            $table->integer('by_user_id')->nullable();
    
        });
    }
    
    public function down()
    {
        Schema::table('moayad_technicalsupport_report', function($table)
        {
            $table->dropColumn('by_user_id');
    
        });
    }
}
