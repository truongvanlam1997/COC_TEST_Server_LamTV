<?php

namespace App\Containers\Course\UI\API\Transformers;

use App\Containers\Course\Models\CourseLearnHour;
use App\Ship\Parents\Transformers\Transformer;

class CourseLearnHourTransformer extends Transformer
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
     * @param CourseLearnHour $entity
     *
     * @return array
     */
    public function transform(CourseLearnHour $entity)
    {
        $response = [
            'object' => 'CourseLearnHour',
            'id' => $entity->id,
            'name' => $entity->name,
            'description' => $entity->description,
        ];

        return $response;
    }
}
