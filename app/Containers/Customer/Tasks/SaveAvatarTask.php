<?php

namespace App\Containers\Customer\Tasks;

use App\Containers\Customer\Data\Repositories\CustomerRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Exception;
use Illuminate\Http\UploadedFile;

class SaveAvatarTask extends Task
{

  public function run(UploadedFile $file)
  {
      try {
          return $file->store('avatars', 'public');
      } catch (Exception $exception) {

      }
  }
}
