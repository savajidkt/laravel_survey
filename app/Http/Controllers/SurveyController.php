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
    {   $this->middleware('auth');
        $this->questionRepository = $questionRepository;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = auth()->user();
        if($user->survey->count()){

            $survey = $this->questionRepository->startSurvey();
        }
        return view('survey.take-survey');
    }
    public function getQuestion(Request $request)
    {
        $data = $request->all();
        $userSurvey = null;
        //dd($data);
        $question = $this->questionRepository->getQuestion($data);

        if($data['type']==1){
            if(isset($data['question_id']) && isset($data['option_id'])){
                $userSurvey = $this->questionRepository->questionAttempt($data);
                $userSurvey->loadMissing(['questions','questions.options']);
                $preQuestion = $userSurvey->questions()->where('question_id',$question->id)->first()->options()->where('is_correct', 1)->first();
            }
            $page = $data['page'] == 0 ? 0 : $data['page'];
        }else{
            $page = $data['page'] -1;
        }
        return response()->json([
            'status' => true,
            'message' => 'Request created successfully.',
            'page' =>$page + 1,
            'data' => view('survey.question', ['model' => $question, 'user_survey' => $userSurvey,'attepmtQuestion'])->render()//$data
        ]);
    }

    public function startSurvey(Request $request)
    {
        $data = $request->all();
        $userSurvey = null;
        $survey = $this->questionRepository->startSurvey($data);
        return view('survey.take-survey',['survey'=>$survey]);

    }
}
