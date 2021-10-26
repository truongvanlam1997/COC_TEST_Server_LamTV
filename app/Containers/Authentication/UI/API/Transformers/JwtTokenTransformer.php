<?php

namespace App\Containers\Authentication\UI\API\Transformers;

use App\Ship\Parents\Transformers\Transformer;

class JwtTokenTransformer extends Transformer
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
    public function transform( $token)
    {
        $response = [
          'object'       => 'JwtToken',
          'access_token' => $token->getToken(),
          'expires_in'   => $token->getExpires() * 60,
          'token_type'   => 'Bearer',

        ];

        return $response;
    }
}
