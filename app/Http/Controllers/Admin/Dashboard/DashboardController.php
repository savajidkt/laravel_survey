<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;
use App\Repositories\QuestionRepository;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
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
        $this->questionRepository = $questionRepository;
    }

    public function index()
    {   $completed = $this->questionRepository->getTotalCompletedSurveys();
        $pending = $this->questionRepository->getTotalPendingSurveys();
        $survey_results = [
            'completed'     =>   $completed,
            'pending'       =>   $pending,
            'percentage'    =>   (int) (100 * $completed) / ($completed + $pending)
        ];
        //dd($survey_results);
        $recent_activity= $this->questionRepository->getSubmitedSurveys();
        //dd($recent_activity);
        return view('admin.dashboard.index',['survey_results' => $survey_results,'recent_activity'=>$recent_activity]);
    }
}
