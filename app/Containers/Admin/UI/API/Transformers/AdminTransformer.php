<?php

namespace App\Containers\Admin\UI\API\Transformers;

use App\Containers\Admin\Models\Admin;
use App\Ship\Parents\Transformers\Transformer;

class AdminTransformer extends Transformer
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
     * @param Admin $entity
     *
     * @return array
     */
    public function transform(Admin $entity)
    {
        $response = [
            'object' => 'Admin',
            'id' => $entity->getHashedKey(),
            'created_at' => $entity->created_at,
            'updated_at' => $entity->updated_at,

        ];

        $response = $this->ifAdmin([
            'real_id'    => $entity->id,
            // 'deleted_at' => $entity->deleted_at,
        ], $response);

        return $response;
    }
}
