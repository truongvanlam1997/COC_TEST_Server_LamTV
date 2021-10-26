<?php

namespace App\Containers\Admin\Models;

use App\Containers\User\Models\User;
use App\Ship\Parents\Models\Model;

class Admin extends User
{

    /**
     * A resource key to be used by the the JSON API Serializer responses.
     */
    protected $resourceKey = 'admins';
}
