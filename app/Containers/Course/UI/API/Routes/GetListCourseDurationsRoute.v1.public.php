<?php

/**
 * @apiGroup           Course Duration
 * @apiName            GetListCourseDurationsController
 *
 * @api                {GET} /v1/course-durations Endpoint title here..
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
    "data": [
        {
            "object": "CourseDuration",
            "id": 1,
            "name": "3 month",
            "description": "3 month"
        },
        {
            "object": "CourseDuration",
            "id": 2,
            "name": "6 month",
            "description": "6 month"
        },
        {
            "object": "CourseDuration",
            "id": 3,
            "name": "12 month",
            "description": "12 month"
        }
    ],
    "meta": {
        "include": [],
        "custom": []
    }
}
 */

/** @var Route $router */
$router->get('course-durations', [
    'as' => 'api_course_get_list_course_durations_controller',
    'uses'  => 'GetListCourseDurationsController',
]);
