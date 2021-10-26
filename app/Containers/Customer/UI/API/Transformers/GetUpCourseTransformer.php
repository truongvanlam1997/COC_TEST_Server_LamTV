<?php

namespace App\Containers\Customer\UI\API\Transformers;

use App\Ship\Parents\Transformers\Transformer;

class GetUpCourseTransformer extends Transformer
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
     * @param  $entity
     *
     * @return array
     */
    public function transform( $uid)
    {
        $response = [
            'object' => 'ID GetUP',
            'id' => $uid,
        ];


        return $response;
    }
}
