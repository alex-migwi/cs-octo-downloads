<?php namespace ChananSystems\FileDownloads\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateChanansystemsFiledownloads extends Migration
{
    public function up()
    {
        Schema::table('chanansystems_filedownloads_', function($table)
        {
            $table->string('description', 300)->default('No description yet.');
            $table->timestamp('deleted_at')->nullable();
            $table->string('filename')->change();
            $table->string('ext')->change();
        });
    }
    
    public function down()
    {
        Schema::table('chanansystems_filedownloads_', function($table)
        {
            $table->dropColumn('description');
            $table->dropColumn('deleted_at');
            $table->string('filename', 191)->change();
            $table->string('ext', 191)->change();
        });
    }
}
