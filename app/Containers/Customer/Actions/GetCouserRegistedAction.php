<?php

namespace App\Containers\Customer\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;
use App\Containers\Customer\Tasks\FindCustomerByUidTask;
use App\Containers\User\Exceptions\MessageException;

class GetCouserRegistedAction extends Action
{
    public function run($uid)
    {
        $customer = Apiato::call(FindCustomerByUidTask::class, [$uid]);
        if(!$customer){
          throw new MessageException(__("Link does not exist"));
        }
        if( !$courseRegister = $customer->courseRegister){
          throw new MessageException(__("You have not registered for any courses yet"));
        }
        return $courseRegister;
    }
}
