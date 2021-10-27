<?php

/**
 * @apiGroup           Admin list course register
 * @apiName            GetListCustomerRegistedController
 *
 * @api                {GET} /v1/admin/course-register/index Endpoint title here..
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
$router->get('admin/course-register/index', [
    'as' => 'api_admin_get_list_customer_registed_controller',
    'uses'  => 'GetListCustomerRegistedController',
    'middleware' => [
      'auth:api',
    ],
]);
