<?php

namespace App\Containers\Course\Models;

use App\Ship\Parents\Models\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CourseRegister extends Model
{
    use SoftDeletes;

    protected $fillable = [
      'customer_id',
      'course_id',
      'course_duration_id',
      'course_learn_hour_id',
      'start_date',
      'end_date',
      'start_time'
    ];

    protected $attributes = [

    ];

    protected $hidden = [

    ];

    protected $casts = [

    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    /**
     * A resource key to be used by the the JSON API Serializer responses.
     */
    protected $resourceKey = 'courseregisters';
}
