<?php

namespace App\Containers\Admin\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class GetAllAdminsAction extends Action
{
    public function run(Request $request)
    {
        $admins = Apiato::call('Admin@GetAllAdminsTask', [], ['addRequestCriteria']);

        return $admins;
    }
}
