<?php

namespace App\Containers\Admin\UI\API\Transformers;

use App\Containers\Admin\Models\Admin;
use App\Ship\Parents\Transformers\Transformer;

class GetListCustomerRegistedTransformer extends Transformer
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
            'birth' => $entity->birth,
            'confirmed' => $entity->confirmed,
            'created_at' => $entity->created_at,
            'deleted_at' => $entity->deleted_at,
            'device' => $entity->device,
            'email' => $entity->email,
            'gender' => $entity->gender,
            'id' => $entity->getHashedKey(),
            'is_client' => $entity->is_client,
            'name' => $entity->name,
            'platform' => $entity->platform,
            'social_avatar' => $entity->social_avatar,
            'social_avatar_original' => $entity->social_avatar_original,
            'social_expires_in' => $entity->social_expires_in,
            'social_id' => $entity->social_id,
            'social_nickname' => $entity->social_nickname,
            'social_provider' => $entity->social_provider,
            'social_refresh_token' => $entity->social_refresh_token,
            'social_token' => $entity->social_token,
            'social_token_secret' => $entity->social_token_secret,
            'updated_at' => $entity->updated_at,

        ];

        $response = $this->ifAdmin([
            'real_id'    => $entity->id,
            // 'deleted_at' => $entity->deleted_at,
        ], $response);

        return $response;
    }
}
