<?php namespace Moayad\Imei\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMoayadImeiDevices extends Migration
{
    public function up()
    {
        Schema::table('moayad_imei_devices', function($table)
        {
            $table->boolean('status')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('moayad_imei_devices', function($table)
        {
            $table->dropColumn('status');
        });
    }
}
