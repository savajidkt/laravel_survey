<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserSurveyAnswerOption extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_survey_answer_id',
        'question_option_id',
        'establishing_rapport_point',
        'understanding_others_point',
        'embracing_individual_differences_point',
        'developing_trust_point',
        'cultivating_influence_point',
        'lacking_self_awareness_point',
        'lacking_social_awareness_point',
        'self_serving_point',
        'breaking_trust_point',
        'poor_management_of_emotions_point',
        'correct_order'
    ];
    /**
     * Get the user that owns the UserSurveyAnswerOption
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function question(): BelongsTo
    {
        return $this->belongsTo(UserSurveyAnswer::class, 'user_survey_answer_id', 'id');
    }
}
