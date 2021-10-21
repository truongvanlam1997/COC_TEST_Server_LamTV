<?php

namespace App\Containers\Customer\Models;

use App\Containers\User\Models\User;
use App\Ship\Parents\Models\Model;

class Customer extends Model
{
    protected $fillable = [

    ];

    protected $attributes = [
      'birth_date',
      'address',
      'number_phone'
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
    protected $resourceKey = 'customers';

    public function user(){

      return $this->belongsTo(User::class);

    }
}
