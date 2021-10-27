<?php

namespace App\Containers\Course\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class CourseDurationRepository
 */
class CourseDurationRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];

}
