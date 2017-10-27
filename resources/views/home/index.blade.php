<?php
/**
 * Created by PhpStorm.
 * User: nicolas
 * Date: 26/10/2017
 * Time: 17:28
 */

/**/
?>
@extends('layouts.app')
@section('content')
    @foreach ($surveys as $survey)
        <form>

        <h4>{{$survey->surv_name}}</h4>

            @foreach($survey->questions as $question)
                <div class="form-group">

                {{$question->ques_body}}

                @if($question->ques_type == 'text')
                    <input type="text" id="{{$question->id}}" name="{{$question->id}}" placeholder="{{$question->ques_body}}">
                @endif
                </div>

            @endforeach
        </form>
    @endforeach
@endsection