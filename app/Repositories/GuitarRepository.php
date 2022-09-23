<?php

namespace App\Repositories;

use App\Models\Guitar;
use App\Repositories\BaseRepository;

/**
 * Class GuitarRepository
 * @package App\Repositories
 * @version September 23, 2022, 1:40 am UTC
*/

class GuitarRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'type',
        'image',
        'price'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Guitar::class;
    }
}
