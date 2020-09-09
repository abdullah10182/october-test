<?php namespace Triangon\Library\Models;

use Model;

/**
 * Model
 */
class Author extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];
    
    public $attachOne = [
    'author_image' => 'System\Models\File'
    ];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'triangon_library_authors';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
