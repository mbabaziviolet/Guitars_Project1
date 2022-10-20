<?php

namespace App\Models;

use Spatie\Permission\Traits\HasRoles;
use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Models\Role;

/**
 * Class User
 * @package App\Models
 * @version October 8, 2022, 11:18 am UTC
 *
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $image_url
 * @property integer $country_id
 * @property integer $role_id
 * @property string $password
 */
class User extends Authenticable
{
    use SoftDeletes;
    use HasRoles;
    use HasFactory;

    public $table = 'users';


    protected $dates = ['deleted_at'];



    public $fillable = [

        'name',
        'email',
        'role',
        'password',
        
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'email' => 'string',
        'password' => 'string',
        'email_verified_at' => 'datetime',
        
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|string',
        'email' => 'required|unique:users,id',
        'role' => 'required|string',
        'password' => 'required',
        'email_verified_at' => 'datetime',
       
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    


}