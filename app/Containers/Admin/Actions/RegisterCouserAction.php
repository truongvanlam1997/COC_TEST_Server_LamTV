<?php

namespace App\Containers\Admin\Actions;

use App\Ship\Parents\Actions\Action;
use Apiato\Core\Foundation\Facades\Apiato;
use App\Containers\User\Exceptions\MessageException;
use App\Containers\Course\Tasks\CreateCourseRegisterTask;
use App\Containers\Course\Tasks\FindCourseDurationByIdTask;
use App\Containers\Customer\Mails\CouserRegisterSuccessMail;
use App\Containers\Customer\Tasks\CreateCustomerTask;
use App\Containers\Customer\Tasks\SaveAvatarTask;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class RegisterCouserAction extends Action
{
    public function run($request)
    {
         $avatarImage = $request->file('avatar');
         $dataCustomer = $request->sanitizeInput([
           'birth_date',
           'address',
           'number_phone',
           'full_name',
           'email',
         ]);
         $dataCustomer['uid'] = Str::uuid()->toString();

         $dataCourseRegister = $request->sanitizeInput([
           'customer_id',
           'course_id',
           'course_duration_id',
           'course_learn_hour_id',
           'start_date',
           'start_time'
         ]);

         if(!empty($avatarImage) && $avatarImage){
             $pathAvatar = Apiato::call(SaveAvatarTask::class,[$avatarImage]);
         }
         if(isset($pathAvatar)){
           $dataCustomer['avatar'] = $pathAvatar;
         }

         $duration = Apiato::call(FindCourseDurationByIdTask::class,[$dataCourseRegister['course_duration_id'] ?? 0]);
         if(!$duration){
           throw new MessageException(__('Course duration not found'));
         }
        //  create customer
         $customer = Apiato::call(CreateCustomerTask::class,[$dataCustomer]);
         $courseEndDate = Carbon::createFromFormat('Y-m-d',$dataCourseRegister['start_date'])->addMonth($duration->duration_month);
         $dataCourseRegister['end_date'] = $courseEndDate->format('Y-m-d');
         $dataCourseRegister['customer_id'] = $customer->id;
         // // create Course Register
         Apiato::call(CreateCourseRegisterTask::class,[$dataCourseRegister]);
         // send email
         Mail::queue(new CouserRegisterSuccessMail($customer));

         return true;
    }
}
