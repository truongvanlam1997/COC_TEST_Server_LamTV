<?php

namespace App\Containers\Customer\UI\API\Controllers;

use App\Ship\Parents\Controllers\ApiController;

class RegisterCustomerController extends ApiController
{

  	public function __invoke(){

		return response()->json([
			'message' => "ok customer"
		]);

	}
}
