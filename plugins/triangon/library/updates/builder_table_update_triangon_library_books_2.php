<?php namespace Triangon\Library\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTriangonLibraryBooks2 extends Migration
{
    public function up()
    {
        Schema::table('triangon_library_books', function($table)
        {
            $table->integer('year')->nullable()->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('triangon_library_books', function($table)
        {
            $table->string('year', 191)->nullable()->unsigned(false)->default(null)->change();
        });
    }
}
