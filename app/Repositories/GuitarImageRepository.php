<?php

namespace App\Repositories;

use App\Models\GuitarImage;
use App\Repositories\BaseRepository;

/**
 * Class GuitarImageRepository
 * @package App\Repositories
 * @version September 23, 2022, 2:02 am UTC
*/

class GuitarImageRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'image',
        'guitar_id'
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
        return GuitarImage::class;
    }
}
