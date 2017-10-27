<?php

use App\Survey;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;
class SurveyTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Survey::create([
            'surv_name' => 'Primeira pesquisa de teste',
            'surv_clie' => 132669
        ]);

        Survey::create([
            'surv_name' => 'Segunda pesquisa de teste',
            'surv_clie' => 13239
        ]);

        Survey::create([
            'surv_name' => 'Terceira pesquisa de teste',
            'surv_clie' => 1324269
        ]);


    }
}
