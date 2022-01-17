<?php namespace Moayad\Icp\Models;

use Model;

/**
 * Model
 */
class Supervisors extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'moayad_icp_supervisors';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
