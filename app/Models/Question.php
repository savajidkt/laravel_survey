<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Question extends Model
{
    use HasFactory, SoftDeletes;
    const ACTIVE = 1;
    const INACTIVE = 0;

    const STATUS = [
        self::ACTIVE => 'Active',
        self::INACTIVE => 'In Active'
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'question',
        'type',
        'status'
    ];
    public function options():HasMany
    {
        return $this->hasMany(QuestionOption::class,'question_id','id');
    }

    /**
     * Method getStatusAttribute
     *
     * @return string
     */
    public function getStatusAttribute(): string
    {
        $status = self::ACTIVE;

        switch($this->status)
        {
            case self::INACTIVE:
                $status = self::STATUS[self::INACTIVE];
                break;
            default:
                $status = self::STATUS[self::ACTIVE];
                break;
        }

        return $status;
    }
}
