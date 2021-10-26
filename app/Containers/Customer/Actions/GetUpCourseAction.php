<?php

namespace App\Containers\Customer\Actions;

use App\Ship\Parents\Actions\Action;
use Apiato\Core\Foundation\Facades\Apiato;
use App\Containers\Customer\Data\Transporters\GetUpCourseTransporter;
use App\Containers\Customer\Mails\GetUpCourseMail;
use App\Containers\Customer\Tasks\CreateCustomerTask;
use App\Ship\Parents\Mails\Mail;
use Illuminate\Support\Facades\Mail as FacadesMail;
use Illuminate\Support\Str;

class GetUpCourseAction extends Action
{
    public function run(GetUpCourseTransporter $getUpCourseTransporter)
    {
        $uid = Str::uuid()->toString();
        $data = $getUpCourseTransporter->sanitizeInput(['full_name','email']);
        $data = array_merge($data, ['uid' =>$uid]);
        // create
        $customer = Apiato::call(CreateCustomerTask::class, [$data]);
        // Send Email
        FacadesMail::queue(new GetUpCourseMail($customer));

        return $uid;

    }
}
