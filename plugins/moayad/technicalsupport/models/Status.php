<?php namespace Moayad\TechnicalSupport\Models;

use Model;

/**
 * Model
 */
class Status extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'moayad_technicalsupport_report_status';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
