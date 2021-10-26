<?php

namespace App\Containers\Admin\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class FindAdminByIdAction extends Action
{
    public function run(Request $request)
    {
        $admin = Apiato::call('Admin@FindAdminByIdTask', [$request->id]);

        return $admin;
    }
}
