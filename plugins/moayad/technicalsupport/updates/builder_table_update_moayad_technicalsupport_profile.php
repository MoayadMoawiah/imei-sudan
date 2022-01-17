<?php namespace Moayad\TechnicalSupport\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMoayadTechnicalsupportProfile extends Migration
{
    public function up()
    {
        Schema::table('moayad_technicalsupport_profile', function($table)
        {
            $table->string('name')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('moayad_technicalsupport_profile', function($table)
        {
            $table->dropColumn('name');
        });
    }
}
