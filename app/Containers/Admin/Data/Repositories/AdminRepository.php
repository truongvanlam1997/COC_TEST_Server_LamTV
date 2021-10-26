<?php

namespace App\Containers\Admin\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class AdminRepository
 */
class AdminRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];

}
