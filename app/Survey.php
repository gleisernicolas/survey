<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{

    public function questions()
    {
        return $this->hasMany('App\Question','ques_surv');
    }

    protected $fillable = [
        'surv_name', 'surv_clie',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */

}
