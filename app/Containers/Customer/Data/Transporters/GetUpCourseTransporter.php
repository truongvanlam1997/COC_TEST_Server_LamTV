<?php

namespace App\Containers\Customer\Data\Transporters;

use App\Ship\Parents\Transporters\Transporter;

class GetUpCourseTransporter extends Transporter
{

    /**
     * @var array
     */
    protected $schema = [
        'type' => 'object',
        'properties' => [
          'full_name',
          'email'
        ],
        'required'   => [
          'full_name',
          'email'
        ],

    ];
}
