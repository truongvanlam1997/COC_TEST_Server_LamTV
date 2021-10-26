<?php

namespace App\Containers\Admin\Data\Transporters;

use App\Ship\Parents\Transporters\Transporter;

class AdminTransporter extends Transporter
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
      ]
    ];
}
