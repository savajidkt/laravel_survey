<?php

namespace App\Repositories;

use App\Models\Question;
use App\Models\QuestionOption;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class QuestionRepository
{
    /**
     * Method create
     *
     * @param array $data [explicite description]
     *
     * @return Question
     */
    public function create(array $data): Question
    {
        $questionData = [
            'question'    => $data['question'],
            'status'     => $data['status'],
            'type'       => $data['type']
        ];
        $question = Question::create($questionData);

        foreach ($data['options'] as $key => $option) {
            $optionArr = [
                'option'    => $option,
                'is_correct' => (isset($data['correct_answer'][$key])) ? $data['correct_answer'][$key] : 0,
            ];

            $question->options()->save(new QuestionOption($optionArr));
        }
        return $question;
    }

    /**
     * Method update
     *
     * @param array $data [explicite description]
     * @param Question $question [explicite description]
     *
     * @return Question
     * @throws Exception
     */
    public function update(array $data, Question $question): Question
    {
        $questionData = [
            'question'    => $data['question'],
            'status'     => $data['status'],
            'type'       => $data['type']
        ];

        if ($question->update($questionData)) {
            $question->options()->delete();
            foreach ($data['options'] as $key => $option) {
                $optionArr = [
                    'option'    => $option,
                    'is_correct' => (isset($data['correct_answer'][$key])) ? $data['correct_answer'][$key] : 0,
                ];

                $question->options()->save(new QuestionOption($optionArr));
            }

            return $question;
        }

        throw new Exception('Question update failed.');
    }

    /**
     * Method delete
     *
     * @param Question $question [explicite description]
     *
     * @return bool
     * @throws Exception
     */
    public function delete(Question $question): bool
    {
        if ($question->delete()) {
            return true;
        }

        throw new Exception('Question delete failed.');
    }
     /**
     * Method GetQuestion
     *
     * @param array $data [explicite description]
     *
     * @return Question
     * @throws Exception
     */
    public function getQuestion(array $data): Question
    {
         $page = $data['page'] ;//$data['page'] == 0 ? 0 : $data['page'] - 1;
         //DB::enableQueryLog();
        $question = Question::with('options')->skip($page)->take(1)->get();
        //dd(DB::getQueryLog());
        if($question){
            return $question[0];
        }
        throw new Exception('Question delete failed.');
    }
}

