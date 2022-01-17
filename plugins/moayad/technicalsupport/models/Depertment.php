<?php namespace Moayad\TechnicalSupport\Models;

use Model;

/**
 * Model
 */
class Depertment extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'moayad_technicalsupport_department';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
    
    public $hasMany = [
        'users' => 'Moayad\TechnicalSupport\Models\Profile',
        'reports' => 'Moayad\TechnicalSupport\Models\Report',
    ];
    
    public $hasManyThrough = [
        'reports' => [
            'Moayad\TechnicalSupport\Models\Report',
            'through' => 'Moayad\TechnicalSupport\Models\Profile'
        ],
    ];
    
    
}
