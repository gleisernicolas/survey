<?php

use App\Question;
use App\Survey;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;
class QuestionsTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $survey = Survey::create([
            'surv_name' => 'Primeira pesquisa de teste',
            'surv_clie' => 132669
        ]);

        $survey2 = Survey::create([
            'surv_name' => 'Segunda pesquisa de teste',
            'surv_clie' => 13239
        ]);

        $survey3 = Survey::create([
            'surv_name' => 'Terceira pesquisa de teste',
            'surv_clie' => 1324269
        ]);

        Question::create([
            'ques_body' => 'Questão 1 > survey 1',
            'ques_surv' => $survey->id,
            'ques_type' => 'text',
        ]);

        Question::create([
            'ques_body' => 'Questão 2 > survey 1',
            'ques_surv' => $survey->id,
            'ques_type' => 'select',
        ]);

        Question::create([
            'ques_body' => 'Questão 3 > survey ',
            'ques_surv' => $survey->id,
            'ques_type' => 'text',
        ]);

        Question::create([
            'ques_body' => 'Questão 1 > survey 2',
            'ques_surv' => $survey2->id,
            'ques_type' => 'select',
        ]);

        Question::create([
            'ques_body' => 'Questão 2 > survey 2',
            'ques_surv' => $survey2->id,
            'ques_type' => 'text',
        ]);

        Question::create([
            'ques_body' => 'Questão 3 > survey 2',
            'ques_surv' => $survey2->id,
            'ques_type' => 'select',
        ]);

        Question::create([
            'ques_body' => 'Questão 1 > survey 3',
            'ques_surv' => $survey3->id,
            'ques_type' => 'text',

        ]);

        Question::create([
            'ques_body' => 'Questão 2 > survey 3',
            'ques_surv' => $survey3->id,
            'ques_type' => 'select',

        ]);

        Question::create([
            'ques_body' => 'Questão 3 > survey 3',
            'ques_surv' => $survey3->id,
            'ques_type' => 'text',

        ]);


    }
}


