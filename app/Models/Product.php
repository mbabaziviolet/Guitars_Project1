<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Product
 * @package App\Models
 * @version October 5, 2022, 6:14 pm UTC
 *
 * @property string $name
 * @property string $slug
 * @property string $description
 * @property string $image
 * @property integer $price
 * @property integer $quantity
 */
class Product extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'products';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'slug',
        'description',
        'image',
        'price',
        'quantity'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'slug' => 'string',
        'description' => 'string',
        'image' => 'string',
        'price' => 'integer',
        'quantity' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|string|max:150|unique:products',
        'slug' => 'required|string|max:150',
        'description' => 'required|string|max:150',
        'image' => 'nullable|file',
        'price' => 'required|integer',
        'quantity' => 'required|integer'
    ];

    
}
