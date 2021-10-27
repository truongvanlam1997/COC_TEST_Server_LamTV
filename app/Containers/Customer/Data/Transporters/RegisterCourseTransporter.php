<?php

namespace App\Containers\Customer\Data\Transporters;

use App\Ship\Parents\Transporters\Transporter;

class RegisterCourseTransporter extends Transporter
{

    /**
     * @var array
     */
    protected $schema = [
        'type' => 'object',
        'properties' => [
          'full_name',
          'birth_date',
          'address',
          'number_phone',
          'start_date',
          'start_time',
          'course_learn_hour_id',
          'course_duration_id',
          'course_id'
        ],
        'required'   => [
            // define the properties that MUST be set
        ],
        'default'    => [
            // provide default values for specific properties here
        ]
    ];
}
