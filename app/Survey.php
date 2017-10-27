<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Laravel\Lumen\Auth\Authorizable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;

class Survey extends Model
{


    protected $fillable = [
        'surv_name', 'surv_clie',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */

}
