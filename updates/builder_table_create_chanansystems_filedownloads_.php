<?php namespace ChananSystems\FileDownloads\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateChanansystemsFiledownloads extends Migration
{
    public function up()
    {
        Schema::create('chanansystems_filedownloads_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('name');
            $table->string('filename');
            $table->string('ext');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('chanansystems_filedownloads_');
    }
}
