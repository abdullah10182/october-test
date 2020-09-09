<?php namespace Triangon\Library\Models;

use Model;

/**
 * Model
 */
class Book extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'triangon_library_books';

    public $belongsTo =[
        'authors' =>[
            'Triangon\Library\Models\Author',
            'order' => 'first_name'
        ]
    ];
    
    // public $belongsToMany =[
    //     'authors' =>[
    //         'Triangon\Library\Models\Author',
    //         'table' => 'triangon_library_books_authors',
    //         'order' => 'first_name'
    //     ]
    // ];


    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
