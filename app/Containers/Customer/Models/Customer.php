<?php

namespace App\Containers\Customer\Models;

use App\Containers\User\Models\User;
use App\Ship\Parents\Models\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{

    use SoftDeletes;

    protected $table = 'customers';
    protected $fillable = [
      'birth_date',
      'address',
      'number_phone',
      'full_name',
      'uid',
      'email',
      'user_id'
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
