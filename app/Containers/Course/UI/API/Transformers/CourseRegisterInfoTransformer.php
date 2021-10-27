<?php

namespace App\Containers\Course\UI\API\Transformers;

use App\Containers\Course\Models\Course;
use App\Containers\Course\Models\CourseDuration;
use App\Containers\Course\Models\CourseLearnHour;
use App\Containers\Course\Models\CourseRegister;
use App\Ship\Parents\Transformers\Transformer;

class CourseRegisterInfoTransformer extends Transformer
{
    /**
     * @var  array
     */
    protected $defaultIncludes = [

    ];

    /**
     * @var  array
     */
    protected $availableIncludes = [

    ];

    /**
     * @param Course $entity
     *
     * @return array
     */
    public function transform(CourseRegister $entity)
    {
      $customer = $entity->customer;
        $response = [
            'object' => 'Course Regiser',
            'full_name' => $customer->full_name,
            'email' => $customer->email,
            'number_phone' => $customer->number_phone,
            'start_date' => $entity->start_date,
            'end_date' => $entity->end_date,
            'start_time' => $entity->start_time,
            'couser' => Course::find($entity->course_id),
            'courser_duration' => CourseDuration::find($entity->course_duration_id),
            'course_learn_hour_id' => CourseLearnHour::find($entity->course_learn_hour_id)

        ];

        return $response;
    }
}
