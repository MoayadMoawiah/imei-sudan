<?php namespace Moayad\Imei\Models;

use Model;

/**
 * Model
 */
class Brand extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'moayad_imei_brand';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
