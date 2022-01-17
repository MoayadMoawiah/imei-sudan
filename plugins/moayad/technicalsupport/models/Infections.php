<?php namespace Moayad\Icp\Models;

use Model;

/**
 * Model
 */
class Infections extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'moayad_icp_infections';
    
    
    public $belongsTo = [
        'airline' => ['Moayad\Icp\Models\Airlines'],
        'supervisor' => ['Moayad\Icp\Models\Supervisors'],
    ];
    
    public $attachMany = [
        'files1' => 'System\Models\File',
        'files2' => 'System\Models\File',
        'files3' => 'System\Models\File',
        'files4' => 'System\Models\File',
        'files5' => 'System\Models\File',
    ];
    
    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
    
    
}
