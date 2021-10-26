<?php

namespace App\Containers\Authentication\Values;

use App\Ship\Parents\Values\Value;

class JwtToken extends Value
{
    private $token;
    /**
     * A resource key to be used by the the JSON API Serializer responses.
     */
    protected $resourceKey = 'jwtToken';

    public function __construct($token) {
        $this->token = $token;
    }

    public function getToken() {
        return $this->token;
    }

    public function getExpires() {
        return auth()->factory()->getTTL();
    }

    public function getFreshToken(){
        return auth()->refresh();
    }
}
