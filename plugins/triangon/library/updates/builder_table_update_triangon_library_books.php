<?php namespace Triangon\Library\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTriangonLibraryBooks extends Migration
{
    public function up()
    {
        Schema::table('triangon_library_books', function($table)
        {
            $table->integer('authors_id');
        });
    }
    
    public function down()
    {
        Schema::table('triangon_library_books', function($table)
        {
            $table->dropColumn('authors_id');
        });
    }
}
