<?php

namespace App\Containers\Admin\UI\API\Controllers;

use App\Containers\Customer\Models\Customer;
use App\Ship\Parents\Controllers\ApiController;

class GetListCustomerRegistedController extends ApiController
{

  public function __invoke()
  {
      $customerRegister = Customer::leftJoin('course_registers',function($q){
                                $q->on('customers.id','=','course_registers.customer_id');
                              })
                              ->select('customers.*')
                              ->get();
      return response()->json($customerRegister);
  }
}
