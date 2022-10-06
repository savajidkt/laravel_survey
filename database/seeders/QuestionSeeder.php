<?php

namespace Database\Seeders;

use App\Models\Question;
use App\Models\QuestionOption;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //
        $question = Question::create([
            'question'=>'What is Lorem Ipsum?',
            'type'=>2,
            'status'=> 1
        ]);

        $options = [
            [
                'option'=>'What is Lorem Ipsum?',
                'is_correct'=> 0,
                'correct_order'=> 3,
                'status'=> 1
            ],
            [
                'option'=>'What is Lorem Ipsum2?',
                'is_correct'=> 0,
                'correct_order'=> 4,
                'status'=> 1
            ],
            [
                'option'=>'What is Lorem Ipsum3?',
                 'is_correct'=> 0,
                'correct_order'=> 1,
                'status'=> 1
            ],
            [
                'option'=>'What is Lorem Ipsum4?',
                'is_correct'=> 0,
                'correct_order'=> 2,
                'status'=> 1
            ]
        ];

        if( isset($question->id) )
        {
            if( !empty( $options ) )
            {
                foreach( $options as $option )
                {
                    $question->options()->save(new QuestionOption($option));
                }
            }
        }
    }
}
