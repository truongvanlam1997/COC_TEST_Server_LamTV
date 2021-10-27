<?php

namespace App\Containers\Customer\Actions;

use App\Ship\Parents\Actions\Action;
use Apiato\Core\Foundation\Facades\Apiato;
use App\Containers\Course\Tasks\CreateCourseRegisterTask;
use App\Containers\Course\Tasks\FindCourseDurationByIdTask;
use App\Containers\Customer\Data\Transporters\RegisterCourseTransporter;
use App\Containers\Customer\Mails\CouserRegisterSuccessMail;
use App\Containers\Customer\Tasks\FindCustomerByUidTask;
use App\Containers\Customer\Tasks\SaveAvatarTask;
use App\Containers\Customer\Tasks\UpdateCustomerTask;
use App\Containers\User\Exceptions\MessageException;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;

class RegisterCourseAction extends Action
{
    public function run(string $uid, RegisterCourseTransporter $registerCourseTransporter)
    {

      // find customer by uid;
      $customer = Apiato::call(FindCustomerByUidTask::class,[$uid]);

      if(!$customer){
        throw new MessageException(__('Registration link does not exist'));
      }

      $avatarImage = $registerCourseTransporter->request->file('avatar');
      $dataCustomer = $registerCourseTransporter->sanitizeInput([
        'birth_date',
        'address',
        'number_phone',
        'full_name'
      ]);
      $dataCourseRegister = $registerCourseTransporter->sanitizeInput([
        'customer_id',
        'course_id',
        'course_duration_id',
        'course_learn_hour_id',
        'start_date',
        'start_time'
      ]);
      $dataCourseRegister['customer_id'] = $customer->id;

      // check customer has register course;
      if($customer->courseRegister){
        throw new MessageException(__('You have registered for the course'));
      }
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
      $courseEndDate = Carbon::createFromFormat('Y-m-d',$dataCourseRegister['start_date'])->addMonth($duration->duration_month);
      $dataCourseRegister['end_date'] = $courseEndDate->format('Y-m-d');
      // // update customer;
      Apiato::call(UpdateCustomerTask::class, [$customer->id, $dataCustomer]);
      // // create Course Register
      Apiato::call(CreateCourseRegisterTask::class,[$dataCourseRegister]);
      // send email
      Mail::queue(new CouserRegisterSuccessMail($customer));

      return true;

    }
}
