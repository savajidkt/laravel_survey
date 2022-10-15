<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class UserSurvey extends Model
{
    use HasFactory;

    protected $table = "user_surveys";

    // survey statuses
    const COMPLETED     = 1;
    const INPROGRESS    = 2;
    const PENDING       = 3;

    // auto stop statuses
    const YES   = 1;
    const NO    = 0;

    protected $fillable = [
        'user_id',
        'questions_attempted',
        'correct_answers',
        'incorrect_answers',
        'progress',
        'status',
        'auto_stop',
        'survey_time',
    ];

    /**
     * Get the user that owns the UserSurvey
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    /**
     * Get all of the comments for the UserSurvey
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function questions(): HasMany
    {
        return $this->hasMany(UserSurveyAnswer::class, 'user_survey_id', 'id');
    }

}
