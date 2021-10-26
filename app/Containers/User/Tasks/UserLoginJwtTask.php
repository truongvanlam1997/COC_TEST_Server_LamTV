<?php

namespace App\Containers\User\Tasks;

use App\Containers\User\Data\Transporters\UserLoginTransporter;
use App\Containers\User\Exceptions\BadException;
use App\Containers\User\Exceptions\MessageException;
use App\Ship\Parents\Tasks\Task;

class UserLoginJwtTask extends Task
{

    private $credentials = [];

    public function run(UserLoginTransporter $transporter)
    {

      $this->credentials = array_merge($this->credentials, $transporter->sanitizeInput(['email', 'password']));
      $token = auth()->attempt($this->credentials);

      if ( ! $token) {
          throw new MessageException(__('Invalid email or password!'));
      }

      return $token;
    }

}
