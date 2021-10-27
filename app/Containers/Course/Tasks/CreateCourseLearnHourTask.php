<?php

namespace App\Containers\Course\Tasks;

use App\Containers\Course\Data\Repositories\CourseLearnHourRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CreateCourseLearnHourTask extends Task
{

    protected $repository;

    public function __construct(CourseLearnHourRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run(array $data)
    {
        try {
            return $this->repository->create($data);
        }
        catch (Exception $exception) {
          dd($exception->getMessage());
            throw new CreateResourceFailedException();
        }
    }
}
