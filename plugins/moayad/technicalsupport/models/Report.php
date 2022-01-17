<?php namespace Moayad\TechnicalSupport\Models;

use Model;

/**
 * Model
 */
class Report extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'moayad_technicalsupport_report';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
    
    public $belongsTo = [
        'user' => ['Moayad\TechnicalSupport\Models\Profile'],
        'by_user' => ['Moayad\TechnicalSupport\Models\Profile'],
        'type' => ['Moayad\TechnicalSupport\Models\Type'],
        'status' => ['Moayad\TechnicalSupport\Models\Status'],
    ];
    
}
