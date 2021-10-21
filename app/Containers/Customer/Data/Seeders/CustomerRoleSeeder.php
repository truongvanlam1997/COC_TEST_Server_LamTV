<?php

namespace App\Containers\Customer\Data\Seeders;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Containers\Authorization\Tasks\CreateRoleTask;
use App\Ship\Parents\Seeders\Seeder;

class CustomerRoleSeeder extends Seeder
{
    public function run()
    {
        // create role customer;
        Apiato::call(CreateRoleTask::class,['customer','Customer','Customer Role', 999]);
    }
}
