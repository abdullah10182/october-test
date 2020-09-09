<?php namespace Triangon\Library\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateTriangonLibraryDatabase extends Migration
{
    public function up()
    {
        Schema::create('triangon_library_database', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->string('author')->nullable();
            $table->string('year')->nullable();
            $table->text('short_description')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('triangon_library_database');
    }
}
