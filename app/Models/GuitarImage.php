<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class GuitarImage
 * @package App\Models
 * @version September 23, 2022, 2:02 am UTC
 *
 * @property string $image
 * @property integer $guitar_id
 */
class GuitarImage extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'guitar_images';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'image',
        'guitar_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'image' => 'string',
        'guitar_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'image' => 'nullable',
        'guitar_id' => 'nullable'
    ];

    //relationships
    public function guitar(){
        return $this->belongsTo(\App\Models\Guitar::class,'guitar_image_id');
    }

}
