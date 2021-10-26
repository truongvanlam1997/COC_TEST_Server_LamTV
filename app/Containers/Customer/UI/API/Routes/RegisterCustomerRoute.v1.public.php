<?php

/**
 * @apiGroup           Customer
 * @apiName            RegisterCustomerController
 *
 * @api                {POST} /v1/customers/register Endpoint title here..
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
$router->post('customers/register', [
    'as' => 'api_customer_register_customer_controller',
    'uses'  => 'RegisterCustomerController',
]);
