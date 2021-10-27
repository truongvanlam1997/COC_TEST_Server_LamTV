<?php

namespace App\Containers\Course\UI\API\Transformers;

use App\Containers\Course\Models\Course;
use App\Ship\Parents\Transformers\Transformer;

class CourseTransformer extends Transformer
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
    public function transform(Course $entity)
    {
        $response = [
            'object' => 'Course',
            'id' => $entity->id,
            'name' => $entity->name,
            'description' => $entity->description,
        ];

        return $response;
    }
}
