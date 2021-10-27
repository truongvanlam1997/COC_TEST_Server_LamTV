<?php

namespace App\Containers\Customer\Tasks;

use App\Containers\Customer\Data\Repositories\CustomerRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class FindCustomerByUidTask extends Task
{

    protected $repository;

    public function __construct(CustomerRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run(string $uid)
    {
        try {
            return $this->repository->where('uid',$uid)->first();
        }
        catch (Exception $exception) {
            throw new NotFoundException();
        }
    }
}
