<?php namespace Triangon\Library\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteTriangonLibraryDatabase extends Migration
{
    public function up()
    {
        Schema::dropIfExists('triangon_library_database');
    }
    
    public function down()
    {
        Schema::create('triangon_library_database', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title', 191)->nullable();
            $table->string('slug', 191)->nullable();
            $table->string('author', 191)->nullable();
            $table->string('year', 191)->nullable();
            $table->text('short_description')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
}
