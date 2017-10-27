<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public function survey()
    {
        return $this->belongsTo('App\Survey');
    }

    protected $fillable = [
        'ques_body', 'ques_surv','ques_type',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */

}
