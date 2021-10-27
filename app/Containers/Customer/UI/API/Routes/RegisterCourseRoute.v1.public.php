<?php

/**
 * @apiGroup           Register Course
 * @apiName            RegisterCourseController
 *
 * @api                {POST} /v1/customer/course/register/{uid} Endpoint title here..
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
$router->post('customer/course/register/{uid}', [
    'as' => 'api_course_register_course_controller',
    'uses'  => 'RegisterCourseController',
]);
