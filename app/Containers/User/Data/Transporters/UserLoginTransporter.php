<?php

namespace App\Containers\User\Data\Transporters;

use App\Ship\Parents\Transporters\Transporter;

class UserLoginTransporter extends Transporter
{

    /**
     * @var array
     */
    protected $schema = [
        'type' => 'object',
        'properties' => [
            'email',
            'password'
        ],
        'required'   => [
            'email',
            'password'
        ],
    ];
}
