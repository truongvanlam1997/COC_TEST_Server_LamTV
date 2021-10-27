<?php

namespace App\Containers\Course\Tasks;

use App\Containers\Course\Data\Repositories\CourseDurationRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CreateCourseDurationTask extends Task
{

    protected $repository;

    public function __construct(CourseDurationRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run(array $data)
    {
        try {
            return $this->repository->create($data);
        }
        catch (Exception $exception) {
            throw new CreateResourceFailedException();
        }
    }
}
