<?php

namespace App\Http\Controllers;

use App\Survey;
use Illuminate\Http\Request;

class SurveyController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }



    public function index(){
        $surveys = Survey::all();

        return view('home/index', ['surveys' => $surveys]);
    }

    public function create(Request $request){
        $survey = new Survey();

        $survey->surv_name = $request->input('surv_name');
        $survey->surv_clie = $request->input('surv_clie');




    }


}
