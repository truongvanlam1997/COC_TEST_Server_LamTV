<?php

namespace App\Containers\Admin\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class UpdateAdminAction extends Action
{
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        $admin = Apiato::call('Admin@UpdateAdminTask', [$request->id, $data]);

        return $admin;
    }
}
