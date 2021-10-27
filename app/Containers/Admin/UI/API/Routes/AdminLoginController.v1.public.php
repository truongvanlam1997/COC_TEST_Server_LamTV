<?php

/**
 * @apiGroup           Admin Login
 * @apiName            AdminLoginController
 *
 * @api                {POST} /v1/admins/login Endpoint title here..
 * @apiDescription     Endpoint description here..
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiParam
 *
 *
 {
    "email": "admin@admin.com",
    "password": "admin"
  }
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
    "data": {
        "object": "JwtToken",
        "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9hcGkuY29jLXRlc3QubG9jYWxcL3YxXC9hZG1pbnNcL2xvZ2luIiwiaWF0IjoxNjM1MzQ0NTYyLCJleHAiOjE2MzUzNDgxNjIsIm5iZiI6MTYzNTM0NDU2MiwianRpIjoiMUJEVTF1SXpFd3BsUng4WiIsInN1YiI6MSwicHJ2IjoiNWQ5MGY5MDI3YTM4NzFmMDQyYTI2MzYxMzA4YzZmMDZkNmIyZDMyOCJ9.06nT25qQ7ZEYQCxSWfWZmygqYzrO--xGuXWQrNgATWc",
        "expires_in": 3600,
        "token_type": "Bearer"
    },
    "meta": {
        "include": [],
        "custom": []
    }
}
 */

/** @var Route $router */
$router->post('admins/login', [
    'as' => 'api_admin_admin_login_controller',
    'uses'  => 'AdminLoginController',
]);
