<?php

/**
 * @apiGroup           Customer get up register course
 * @apiName            GetUpCourseController
 *
 * @api                {POST} /v1/customer/courses/get-up Endpoint title here..
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
$router->post('customer/courses/get-up', [
    'as' => 'api_customer_get_up_course_controller',
    'uses'  => 'GetUpCourseController',
]);
