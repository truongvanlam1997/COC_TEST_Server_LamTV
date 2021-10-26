<?php

/**
 * @apiGroup           Admin
 * @apiName            AdminLoginController
 *
 * @api                {POST} /v1/admins/login Endpoint title here..
 * @apiDescription     Endpoint description here..
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiParam           {String}  parameters here..
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
  // Insert the response of the request here...
}
 */

/** @var Route $router */
$router->post('admins/login', [
    'as' => 'api_admin_admin_login_controller',
    'uses'  => 'AdminLoginController',
    'middleware' => [
      'auth:api',
    ],
]);
