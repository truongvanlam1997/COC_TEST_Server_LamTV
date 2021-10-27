<?php

/**
 * @apiGroup           Course
 * @apiName            GetListCoursesController
 *
 * @api                {GET} /v1/courses Endpoint title here..
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
            "object": "Course",
            "id": 1,
            "name": "Php Course",
            "description": "Php Course"
        },
        {
            "object": "Course",
            "id": 2,
            "name": "Laravel Course",
            "description": "Laravel Course"
        },
        {
            "object": "Course",
            "id": 3,
            "name": "Reactjs Course",
            "description": "Reactjs Course"
        },
        {
            "object": "Course",
            "id": 4,
            "name": "Vuejs Course",
            "description": "Vuejs Course"
        },
        {
            "object": "Course",
            "id": 5,
            "name": "Git Course",
            "description": "Git Course"
        }
    ],
    "meta": {
        "include": [],
        "custom": []
    }
}
 */

/** @var Route $router */
$router->get('courses', [
    'as' => 'api_course_get_list_courses_controller',
    'uses'  => 'GetListCoursesController',
]);
