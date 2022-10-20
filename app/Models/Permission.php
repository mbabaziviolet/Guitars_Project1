<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Permission
 * @package App\Models
 * @version October 17, 2022, 6:23 pm UTC
 *
 * @property string $name
 */
class Permission extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'permissions';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|string|unique:permissions'
    ];

    
}
