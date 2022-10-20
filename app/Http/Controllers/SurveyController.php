<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\User;
use App\Repositories\QuestionRepository;
use Illuminate\Http\Request;

class SurveyController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $questionRepository;

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
        if (!isset($user->survey))
        {
            $survey = $this->questionRepository->saveSurvey();
        }
        $questions = isset($survey->questions) ? $survey->questions()->count() : 0;

        return view('survey.take-survey', ['survey' => $survey,'questions'=>$questions]);
    }

    public function getQuestion(Request $request)
    {
        $data = $request->all();
        $userSurvey = auth()->user()->survey;
        $question = $this->questionRepository->getQuestion($data);

        if ($data['type'] == 1) {
            if (isset($data['question_id']) && isset($data['options']))
            {
                $userSurvey = $this->questionRepository->questionAttempt($data);
                $userSurvey->loadMissing(['questions', 'questions.options']);
                //$preQuestion = $userSurvey->questions()->where('question_id', $question->id)->first()->options()->first();
            }
            $page = $data['page'] == 0 ? 0 : $data['page'];
        } else {
            $page = $data['page'] - 1;
        }
        $allQuestionsCnt = Question::all()->count();
        $questions = $userSurvey->questions()->count();
        if($questions < $allQuestionsCnt){
            return response()->json([
                'status' => $questions<$allQuestionsCnt ? true : false,
                'message' => 'Request created successfully.',
                'page' => $page + 1,
                'data' => view('survey.question', ['model' => $question, 'survey' => $userSurvey,'questions'=>$questions, 'attepmtQuestion'])->render() //$data
            ]);
        }else{
            return redirect()->route('home')->with('success','You have survey successfully completed!');

        }
    }

    public function updateSurveyTime(Request $request)
    {
        $data = $request->all();
        $survey = $this->questionRepository->startSurvey($data['survey_id']);

        return response()->json(['status'=>$survey['status'],'minutes'=>$survey['minutes'],'seconds'=>$survey['seconds']], 200);
    }
}
