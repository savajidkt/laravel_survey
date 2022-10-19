<?php

namespace App\Repositories;

use App\Models\Question;
use App\Models\QuestionOption;
use App\Models\UserSurvey;
use App\Models\UserSurveyAnswer;
use App\Models\UserSurveyAnswerOption;
use Exception;
use Illuminate\Support\Facades\DB;

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
                'option'    => $option
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
                    'option'    => $option
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
          //$data['page'] == 0 ? 0 : $data['page'] - 1;
        if($data['type'] == 1){
            $page = $data['page'];
        }else{
            $page = $data['page'] -1;
        }
        if(isset($data['questionCnt'])){
            $page = $data['questionCnt'];
        }

         //DB::enableQueryLog();
        $question = Question::with('options')->skip($page)->take(1)->get();
        //dd(DB::getQueryLog());
        if($question){
            return $question[0];
        }
        throw new Exception('Question delete failed.');
    }

    /**
     * Method questionAttempt
     *
     * @param array $data [explicite description]
     *
     * @return UserSurvey
     */
    public function questionAttempt(array $data): UserSurvey
    {
        $question       = isset($data['question_id']) ? Question::find($data['question_id']) : null;
        $options         = isset($data['options']) ? $data['options'] : null;
        $userSurvey     = isset($data['survey_id']) ? UserSurvey::find($data['survey_id']) : null;
        $userId         = auth()->user()->id;

        // delete user attempted question
        $userSurveyAttempted = UserSurveyAnswer::where('user_id', $userId)->where('user_survey_id', $userSurvey->id);

        if( isset($question->id) )
        {
            $userSurveyAttempted->where('question_id',$question->id)->delete();
        }
        //$userSurveyAttempted->delete();
        // create user survey questions
        if(isset($question->id)){
            $userSurveyQuestion = UserSurveyAnswer::create([
                'user_survey_id'=> $userSurvey->id,
                'user_id'       => $userId,
                'question_id'    => $question->id,
            ]);
            // save question options
            if( $question->options->count() )
            {
                // delete user  question options
                $userSurveyAnswerOption = UserSurveyAnswerOption::where('user_survey_answer_id',$userSurveyQuestion->id)->delete();

                foreach($options as $option )
                {
                    $UserSurveyAnswerOption = UserSurveyAnswerOption::create([
                        'user_survey_answer_id'=> $userSurveyQuestion->id,
                        'question_option_id'       =>$option
                    ]);
                }
            }
        }
        return $userSurvey;
    }

    /**
     * Method questionAttempt
     *
     * @return UserSurvey
     */
    public function startSurvey($survey_id = null)
    {
        $userSurvey     = isset($survey_id) ? UserSurvey::find($survey_id) : null;
        $userId         = auth()->user()->id;

        // save or create user survey
        if( isset($userSurvey->id) )
        {
            $userSurvey->update([
                'user_id'       => auth()->user()->id,
                'status'        => UserSurvey::INPROGRESS,
                'survey_time'   => DB::raw('survey_time+1')
            ]);
        }
        else
        {
            $userSurvey = UserSurvey::create([
                'user_id'       => $userId,
                'status'        => UserSurvey::INPROGRESS,
                'auto_stop'     => UserSurvey::NO,
                'survey_time'   => 0,
            ]);
        }
        $user   = auth()->user();
        $survey = $user->survey;
        $init = $survey->survey_time;

        $minutes = floor(($init / 60) % 60);
        $seconds = $init % 60;
        if($minutes <40){
            $status ='running';
        }else{
            $status ='timeout';
        }

        return [
            'status'=>$status,
            'minutes'=>$minutes,
            'seconds'=>$seconds
        ];
    }

}

