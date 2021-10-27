<?php

namespace App\Containers\Course\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class CourseLearnHourRepository
 */
class CourseLearnHourRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];

}
