<?php

namespace App\Containers\Course\UI\API\Transformers;

use App\Containers\Course\Models\CourseDuration;
use App\Ship\Parents\Transformers\Transformer;

class CourseDurationTransformer extends Transformer
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
     * @param CourseDuration $entity
     *
     * @return array
     */
    public function transform(CourseDuration $entity)
    {
        $response = [
            'object' => 'CourseDuration',
            'id' => $entity->id,
            'name' => $entity->name,
            'description' => $entity->description,
        ];

        return $response;
    }
}
