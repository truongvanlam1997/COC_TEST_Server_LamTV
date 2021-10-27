<?php

namespace App\Containers\Admin\UI\API\Requests;

use App\Ship\Parents\Requests\Request;

/**
 * Class RegisterCourseRequest.
 */
class RegisterCourseRequest extends Request
{

    /**
     * The assigned Transporter for this Request
     *
     * @var string
     */
    protected $transporter = \App\Containers\Admin\Data\Transporters\RegisterCourseTransporter::class;

    /**
     * Define which Roles and/or Permissions has access to this request.
     *
     * @var  array
     */
    protected $access = [
        'permissions' => '',
        'roles'       => '',
    ];

    /**
     * Id's that needs decoding before applying the validation rules.
     *
     * @var  array
     */
    protected $decode = [
        // 'id',
    ];

    /**
     * Defining the URL parameters (e.g, `/user/{id}`) allows applying
     * validation rules on them and allows accessing them like request data.
     *
     * @var  array
     */
    protected $urlParameters = [
        // 'id',
    ];

    /**
     * @return  array
     */
    public function rules()
    {
        return [
          'email' => 'required|unique:customers',
          'full_name' => 'required|min:3|max:50',
          'birth_date' => 'nullable|date_format:Y-m-d',
          'address' => 'nullable',
          'number_phone' => 'nullable|min:10|max:11',
          'start_date'=> 'required|date_format:Y-m-d',
          'start_time'  => 'required|date_format:H:i',
          'course_learn_hour_id' => 'required',
          'course_duration_id' => 'required',
          'course_id' => 'required',
          'avatar'  => 'mimes:jpeg,jpg,png'
        ];
    }

    /**
     * @return  bool
     */
    public function authorize()
    {
        return $this->check([
            'hasAccess',
        ]);
    }
}
