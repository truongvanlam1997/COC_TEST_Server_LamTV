<?php

namespace App\Containers\Course\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class CourseRegisterRepository
 */
class CourseRegisterRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];

}
