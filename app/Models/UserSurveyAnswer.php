<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class UserSurveyAnswer extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_survey_id',
        'user_id',
        'question_id',
    ];

    /**
     * Get the user that owns the UserSurveyAnswer
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function survey(): BelongsTo
    {
        return $this->belongsTo(UserSurvey::class, 'user_survey_id', 'id');
    }
    /**
     * Get all of the comments for the UserSurveyAnswer
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function options(): HasMany
    {
        return $this->hasMany(UserSurveyAnswerOption::class, 'user_survey_answer_id', 'id');
    }
}
