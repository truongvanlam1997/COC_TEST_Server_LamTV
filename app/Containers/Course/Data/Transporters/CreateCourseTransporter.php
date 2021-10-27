<?php

namespace App\Containers\Course\Data\Transporters;

use App\Ship\Parents\Transporters\Transporter;

class CreateCourseTransporter extends Transporter
{

    /**
     * @var array
     */
    protected $schema = [
        'type' => 'object',
        'properties' => [
          'name',
          'description'
        ],
        'required'   => [
          'name'
        ],
        'default'    => [
            // provide default values for specific properties here
        ]
    ];
}
