<?php

namespace App\Containers\Admin\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class CreateAdminAction extends Action
{
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        $admin = Apiato::call('Admin@CreateAdminTask', [$data]);

        return $admin;
    }
}
