<?php

namespace App\Containers\Admin\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class DeleteAdminAction extends Action
{
    public function run(Request $request)
    {
        return Apiato::call('Admin@DeleteAdminTask', [$request->id]);
    }
}
