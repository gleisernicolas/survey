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


    public function index($name){
        $surveys = Survey::all();
        return view('home/index', ['surveys' => $surveys]);
    }

    public function create(Request $request){

    }


}
