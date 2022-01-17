<?php namespace Moayad\Icp\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMoayadIcpAirlines extends Migration
{
    public function up()
    {
        Schema::table('moayad_icp_airlines', function($table)
        {
            $table->string('code', 191)->nullable()->default('null');
            $table->dropColumn('cade');
        });
    }
    
    public function down()
    {
        Schema::table('moayad_icp_airlines', function($table)
        {
            $table->dropColumn('code');
            $table->string('cade', 191)->nullable()->default('NULL');
        });
    }
}
