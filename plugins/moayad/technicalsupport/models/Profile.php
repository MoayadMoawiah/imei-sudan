<?php namespace Moayad\TechnicalSupport\Models;

use Model;

/**
 * Model
 */
class Profile extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'moayad_technicalsupport_profile';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
    
    public static function getFromUser($user)
    {
        if($user->profile)
            return $user->profile;

        $profile = new static;
        $profile->name = $user;
        $profile->user_id = $user->id;
        $profile->save();

        $user->profile = $profile;
        $user->save();
        return $profile;
    }

    public $belongsTo = [
        'user' => ['RainLab\User\Models\User', 'delete'=>true],
        'dept' => ['Moayad\TechnicalSupport\Models\Depertment'],
    ];
    public $hasMany = [
        'reports' => 'Moayad\TechnicalSupport\Models\Report'
    ];
    
}
