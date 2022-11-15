<?php

namespace App\Repositories;

use App\Models\Question;
use App\Models\QuestionOption;
use App\Models\User;
use App\Models\UserSurvey;
use App\Models\UserSurveyAnswer;
use App\Models\UserSurveyAnswerOption;
use Carbon\Carbon;
use Exception;
use Faker\Provider\UserAgent;
use Illuminate\Database\Eloquent\Builder;
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
        //dd($question);
        if(isset($question[0])){
            return $question[0];
        }else{
            return new Question();
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
        //$userSurveyAttempted = UserSurveyAnswer::where('user_id', $userId)->where('user_survey_id', $userSurvey->id);

        // if( isset($question->id) )
        // {
        //     $userSurveyAttempted->where('question_id',$question->id)->delete();
        // }
        //$userSurveyAttempted->delete();
        // create user survey questions

        if(isset($question->id)){
            $preQuestionOption = QuestionOption::whereIn('order_sorting',[1,2])->where('question_id',$question->id)->orderBy('order_sorting', 'asc')->get();
            foreach ($preQuestionOption as $optio){
                $prequestOption[] =$optio->id;
            }

            // RI Points Logic here
            $mostLike = array_search($prequestOption[0], $options);
            $leasttLike = array_search($prequestOption[1], $options);
            $riPoints=0;
            $mostLikePoint= 0;
            $leasttLikePoint= 0;

            if($leasttLike ==4){
                $leasttLikePoint= 2;
            }elseif($leasttLike == 3){
                $leasttLikePoint= 1;
            }
            if($mostLike == 0){
                $mostLikePoint= 2;
            }elseif($mostLike ==1){
                $mostLikePoint= 1;
            }
             $riPoints = $mostLikePoint + $leasttLikePoint;

             //Other Report Logic
             $establishingSum=0;
             $understandingSum=0;
             $embracingSum=0;
             $developingSum=0;
             $cultivatingSum=0;
             $lacking_selfSum=0;
             $lacking_socialSum=0;
             $self_servingSum=0;
             $breakingSum=0;
             $poor_managementSum=0;
             
             $index = 5;
             foreach($options as $key => $opt){
                $QuestionOption = QuestionOption::find($opt);
                $establishingSum = $establishingSum + ($QuestionOption->establishing_report * $index);
                $understandingSum = $understandingSum + ($QuestionOption->understanding_others * $index);
                $embracingSum = $embracingSum + ($QuestionOption->embracing_individual_differences * $index);
                $developingSum = $developingSum + ($QuestionOption->developing_trust * $index);
                $cultivatingSum = $cultivatingSum + ($QuestionOption->cultivating_influence * $index);
                $lacking_selfSum = $lacking_selfSum + ($QuestionOption->lacking_self_awareness * $index);
                $lacking_socialSum = $lacking_socialSum + ($QuestionOption->lacking_social_awareness * $index);
                $self_servingSum = $self_servingSum + ($QuestionOption->self_serving * $index);
                $breakingSum = $breakingSum + ($QuestionOption->breaking_trust * $index);
                $poor_managementSum = $poor_managementSum + ($QuestionOption->poor_management_of_emotions * $index);
                
                $index--;
             }

            $userSurveyQuestion = UserSurveyAnswer::create([
                'user_survey_id'                        => $userSurvey->id,
                'user_id'                               => $userId,
                'question_id'                           => $question->id,
                'ri_points'                             => $riPoints,
                'establishing_report_point'             => $establishingSum,
                'understanding_others_point'            => $understandingSum,
                'embracing_individual_differences_point'=> $embracingSum,
                'developing_trust_point'                => $developingSum,
                'cultivating_influence_point'           => $cultivatingSum,
                'lacking_self_awareness_point'          => $lacking_selfSum,
                ' lacking_social_awareness_point'         => $lacking_socialSum,
                'self_serving_point'         => $self_servingSum,
                'breaking_trust_point'         => $breakingSum,
                'poor_management_of_emotions_point'         => $poor_managementSum
            ]);

            // save question options
            foreach($options as $option )
                {
                    $UserSurveyAnswerOption = UserSurveyAnswerOption::create([
                        'user_survey_answer_id'     => $userSurveyQuestion->id,
                        'question_option_id'        =>$option
                    ]);
                }

            // update finish status of user survey
            if( isset( $userSurvey->id ) )
            {
                $surveyCount        = $userSurvey->questions()->count();
                $allQuestionCount   = $this->getQuestionCount();

                if( $surveyCount === $allQuestionCount )        // todo need to replace 4 with $allQuestionCount
                {
                    $userSurvey->status = UserSurvey::COMPLETED;
                    $userSurvey->updated_at = Carbon::now();
                    $userSurvey->save();
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
        $survey = $this->saveSurvey($survey_id);
        $survey->refresh();
        $init = $survey->survey_time ?? 0;

        $status ='running';
        $minutes = 0;
        $seconds = 0;

        if( $init > 0 )
        {
            $minutes = floor(($init / 60) % 60);
            $seconds = $init % 60;

            if($minutes <40){
                $status ='running';
            }else{
                $status ='timeout';
            }
        }
        // update finish status of user survey
        if(isset($survey->id) )
        {   if($minutes >= 40)
            $survey->auto_stop = UserSurvey::YES;
            $survey->save();
        }

        return [
            'status'=>$status,
            'minutes'=>$minutes,
            'seconds'=>$seconds
        ];
    }

    public function checkTime($survey)
    {
        $surveyCreatedAt = $survey->created_at;
        $surveyEndAt     = $surveyCreatedAt->clone()->addMinutes(40);
        $totalDuration = $surveyCreatedAt->diffInRealSeconds(Carbon::now());
        $survey_time     = $totalDuration;
        if($surveyEndAt->lt(Carbon::now()))
        {
            $survey->auto_stop = UserSurvey::YES;
            $survey->save();
            return false;
        }
        return  $survey_time;
    }


    /**
     * Method saveSurvey
     *
     * @param $survey_id $survey_id [explicite description]
     *
     * @return UserSurvey
     */
    public function saveSurvey($survey_id = null): UserSurvey
    {
        $userSurvey     = isset($survey_id) ? UserSurvey::find($survey_id) : null;
        $userId         = auth()->user()->id;

        // save or create user survey
        if( isset($userSurvey->id) )
        {
            $userSurvey->update([
                'user_id'       => auth()->user()->id,
                'status'        => UserSurvey::INPROGRESS,
            ]);
        }
        else
        {
            $userSurvey = UserSurvey::create([
                'user_id'       => $userId,
                'status'        => UserSurvey::INPROGRESS,
                'auto_stop'     => UserSurvey::NO,
            ]);
        }

        return $userSurvey;
    }

    /**
     * Method getQuestionCount
     *
     * @return int
     */
    public function getQuestionCount(): int
    {
        return Question::all()->count();
    }

    /**
     * Method getProgressBar
     *
     * @param int $questions [explicite description]
     * @param int $totalQuestion [explicite description]
     *
     * @return int
     */
    public function getProgressBar(int $questions, int $totalQuestion): int
    {
        return (int) (100 * $questions) / $totalQuestion;
    }

    /**
     * Method getTotalCompletedSurveys
     *
     * @return int
     */
    public function getTotalCompletedSurveys(array $data): int
    {
        $company    = isset($data['company']) ? $data['company'] : null;
        $project    = isset($data['project']) ? $data['project'] : null;
        $fromDate   = isset($data['fromDate']) ? $data['fromDate'] : null;
        $toDate     = isset($data['toDate']) ? $data['toDate'] : null;
        $query      = UserSurvey::query()->where('status', UserSurvey::COMPLETED);

        if( $fromDate && $toDate )
        {
            // date condition
            //$query->whereBetween('updated_at', [$fromDate, $toDate]);
            $query->whereDate('updated_at','>=',$fromDate)->whereDate('updated_at','<=',$toDate);
        }

        if( $company || $project )
        {
            // company condition
            $query->whereHas('user', function($query) use($company,$project)
            {
                if( $company != '' )
                {
                    $query->where('company_id', $company);
                }

                if( $project != '' )
                {
                    $query->where('project_id',$project);
                }
                return $query;
            });
        }
        //echo common()->formatSql($query);die;
       return $query->count();
    }

    /**
     * Method getTotalPendingSurveys
     *
     * @return int
     */
    public function getTotalPendingSurveys(array $data): int
    {
        //DB::enableQueryLog();
        $company    = isset($data['company']) ? $data['company'] : null;
        $project    = isset($data['project']) ? $data['project'] : null;
        $fromDate   = isset($data['fromDate']) ? $data['fromDate'] : null;
        $toDate     = isset($data['toDate']) ? $data['toDate'] : null;

        $query = User::query();
        $query->doesntHave('survey');
        $query->orWhereHas('survey', function(Builder $query) use($fromDate, $toDate){
            return $query->whereIn('status', [UserSurvey::INPROGRESS, UserSurvey::PENDING, 0]);
        });

        if( $company || $project )
        {
            // company condition
            $query->where('company_id', $company);
            $query->where('project_id', $project);
        }
        //echo common()->formatSql($query);die;
        return $query->count();


    }

    public function getSubmitedSurveys(array $data)
    {
        $company    = isset($data['company']) ? $data['company'] : null;
        $project    = isset($data['project']) ? $data['project'] : null;
        $fromDate   = isset($data['fromDate']) ? $data['fromDate'] : null;
        $toDate     = isset($data['toDate']) ? $data['toDate'] : null;
        $query      = UserSurvey::whereIn('status', [UserSurvey::COMPLETED]);

        if( $fromDate && $toDate )
        {
            // date condition
            //$query->whereBetween('updated_at', [$fromDate, $toDate]);
            $query->whereDate('updated_at','>=',$fromDate)->whereDate('updated_at','<=',$toDate);
        }

        if( $company || $project )
        {
            // company condition
            $query->whereHas('user', function($query) use($company,$project)
            {
                if( $company != '' )
                {
                    $query->where('company_id', $company);
                }

                if( $project != '' )
                {
                    $query->where('project_id',$project);
                }
                return $query;
            });
        }

       return $query->orderBy('updated_at', 'DESC')->limit(10)->get();

    }

}

