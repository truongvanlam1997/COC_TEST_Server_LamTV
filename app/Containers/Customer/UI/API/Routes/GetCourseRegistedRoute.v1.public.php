<?php

/**
 * @apiGroup           Customer
 * @apiName            GetCourseRegistedController
 *
 * @api                {GET} /v1/customer/course/show/:uid Endpoint title here..
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
    "data": {
        "object": "Course Regiser",
        "full_name": "Lam Truong",
        "email": "truongvanlam97@gmail.com",
        "number_phone": "1234567890",
        "start_date": "2021-10-10",
        "end_date": "2022-01-10",
        "start_time": "01:30:00",
        "couser": {
            "id": 1,
            "name": "Php Course",
            "description": "Php Course",
            "created_at": "2021-10-27T18:11:00.000000Z",
            "updated_at": "2021-10-27T18:11:00.000000Z"
        },
        "courser_duration": {
            "id": 1,
            "name": "3 month",
            "description": "3 month",
            "duration_month": 3,
            "created_at": "2021-10-27T18:11:00.000000Z",
            "updated_at": "2021-10-27T18:11:00.000000Z"
        },
        "course_learn_hour_id": {
            "id": 1,
            "name": "01:00",
            "description": "01:00",
            "created_at": "2021-10-27T18:11:00.000000Z",
            "updated_at": "2021-10-27T18:11:00.000000Z"
        }
    },
    "meta": {
        "include": [],
        "custom": []
    }
}
 */

/** @var Route $router */
$router->get('customer/course/show/{uid}', [
    'as' => 'api_customer_get_course_registed_controller',
    'uses'  => 'GetCourseRegistedController',
]);
