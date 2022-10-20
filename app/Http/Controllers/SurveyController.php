<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\User;
use App\Models\UserSurvey;
use App\Repositories\QuestionRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class SurveyController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $questionRepository;

    /**
     * Method __construct
     *
     * @param QuestionRepository $questionRepository [explicite description]
     *
     * @return void
     */
    public function __construct(QuestionRepository $questionRepository)
    {
        $this->middleware('auth');
        $this->questionRepository = $questionRepository;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user   = auth()->user();
        $survey = $user->survey;
        if (!isset($survey))
        {
            // if( in_array($survey->status, [UserSurvey::COMPLETED]) )
            // {
            //     // todo redirect to other page as user already attempted survey and completed
            //     // redirect();
            // }
            $survey = $this->questionRepository->saveSurvey();
        }
        $questions = isset($survey->questions) ? $survey->questions()->count() : 0;

        return view('survey.take-survey', ['survey' => $survey,'questions'=>$questions]);
    }

    /**
     * Method getQuestion
     *
     * @param Request $request [explicite description]
     *
     * @return JsonResponse
     */
    public function getQuestion(Request $request): JsonResponse
    {
        $data       = $request->all();
        $userSurvey = auth()->user()->survey;
        $question   = $this->questionRepository->getQuestion($data);

        if ( $data['type'] == 1 )
        {
            if( isset( $data['question_id'] ) && isset( $data['options'] ) )
            {
                $userSurvey = $this->questionRepository->questionAttempt($data);
                $userSurvey->loadMissing(['questions', 'questions.options']);
                //$preQuestion = $userSurvey->questions()->where('question_id', $question->id)->first()->options()->first();
            }
            $page = $data['page'] == 0 ? 0 : $data['page'];
        } else {
            $page = $data['page'] - 1;
        }

        $allQuestionsCnt    = $this->questionRepository->getQuestionCount();
        $questions          = $userSurvey->questions()->count();
        if( $questions < ( $allQuestionsCnt+1 ) )
        {
            return response()->json([
                'status'        => $questions === $allQuestionsCnt ? false : true,
                'finish_button' => $questions === ($allQuestionsCnt - 1) ? true : false,//$questions === ($allQuestionsCnt - 1) ? true : false, // Need to uncomment this condition with static 4
                'message'       => 'Request created successfully.',
                'page'          => $page + 1,
                'redirect_uri'  => route('home'),
                'data'          => view('survey.question', [
                    'model'         => $question,
                    'survey'        => $userSurvey,
                    'questions'     => $questions,
                    'attepmtQuestion'
                ])->render() //$data
            ]);
        }
    }

    /**
     * Method updateSurveyTime
     *
     * @param Request $request [explicite description]
     *
     * @return JsonResponse
     */
    public function updateSurveyTime(Request $request): JsonResponse
    {
        $data = $request->all();
        $survey = $this->questionRepository->startSurvey($data['survey_id']);

        return response()->json(['status'=>$survey['status'],'minutes'=>$survey['minutes'],'seconds'=>$survey['seconds']], 200);
    }
}
