<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Guitar
 * @package App\Models
 * @version September 23, 2022, 1:40 am UTC
 *
 * @property string $name
 * @property string $type
 * @property string $image
 * @property integer $price
 */
class Guitar extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'guitars';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'type',
        'image',
        'price'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'type' => 'string',
        'image' => 'string',
        'price' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|string|max:150|unique:guitars',
        'type' => 'required|string|max:150',
        'image' => 'nullable|file',
        'price' => 'required|integer'
    ];


    //guitar rules
    
    //relationships--- adds an abstarct column on the guitar ie backref
    // public function guitar_images(){
    //     return $this->hasMany(\App\Models\GuitarImage::class,'guitar_id');
    // }
}
