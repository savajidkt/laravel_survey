<?php
namespace App\Exports;
 
use App\Models\User;
use App\Models\UserSurvey;
use App\Models\UserSurveyAnswer;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
 
class ReportsExport implements FromCollection,WithHeadings
{   
    protected $id;

    function __construct($id) {
            $this->id = $id;
    }
    /**
    * @return \Illuminate\Support\Collection
    */ 
    public function headings():array{
        return[
            'User ID',
            'Question ID',
            'Relational Intelligence',
            'Establishing Rapport',
            'Understanding Others',
            'Embracing Individual Differences',
            'Developing Trust',
            'Cultivating Influence',
            'Lacking Self Awareness',
            'Lacking Social Awareness',
            'Self-Serving',
            'Breaking Trust',
            'Poor Management of Emotions',
        ];
    }

    public function collection()
    {
          return $userSurvey  = UserSurveyAnswer::select(
            'user_id',
            'question_id',
            'ri_points',
            'establishing_report_point',
            'understanding_others_point',
            'embracing_individual_differences_point',
            'developing_trust_point',
            'cultivating_influence_point',
            'lacking_self_awareness_point',
            'lacking_social_awareness_point',
            'self_serving_point',
            'breaking_trust_point',
            'poor_management_of_emotions_point'
          )->where('user_id',$this->id)->get();

          
    }
}