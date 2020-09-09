<?php namespace Triangon\Library\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateTriangonLibraryBooksAuthors extends Migration
{
    public function up()
    {
        Schema::create('triangon_library_books_authors', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('book_id');
            $table->integer('author_id');
            $table->primary(['book_id','author_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('triangon_library_books_authors');
    }
}
