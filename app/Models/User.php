<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, SoftDeletes;

    const ACTIVE = 1;
    const INACTIVE = 0;

    /** User types */
    const ADMIN = 1;
    const USER  = 2;

    const STATUS = [
        self::ACTIVE => 'Active',
        self::INACTIVE => 'Inactive'
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'company_id',
        'project_id',
        'address',
        'user_type',
        'user_status',
        'is_first_time_login',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function scopeStatus($query, $status)
    {
        $status = strtolower($status) =='active'? 1 : 0;
        return $query->where('user_status', $status); 
    }

    /**
     * Method getActionAttribute
     *
     * @return string
     */
    public function getActionAttribute(): string
    {
        $viewAction = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';
        $editAction = '<a href="'. route('users.edit', $this->id).'" class="edit btn btn-primary btn-sm" data-toggle="tooltip" data-original-title="User Edit" data-animation="false">Edit</a>';
        $ResendAction = '<a href="javascript:void(0)" class="resend btn btn-primary btn-sm" data-user_id="'.$this->id.'" data-toggle="tooltip" data-original-title="Survey Time Reset" data-animation="false">Reset</a>';
        //return $viewAction.' '.$editAction.' '.$this->getDeleteButtonAttribute();
        return $editAction.' '.$this->getDeleteButtonAttribute().' '.$ResendAction;
    }

    /**
     * Get Delete Button Attribute
     *
     * @param string $class
     * @return string
     */
    public function getDeleteButtonAttribute($class = '')
    {
        return '<a href="'.route('users.destroy', $this).'" class="btn btn-primary btn-sm delete_action" data-method="delete" data-toggle="tooltip" data-original-title="Delete" data-animation="false">Delete</a>';
    }

    /**
     * Method getFullNameAttribute
     *
     * @return string
     */
    public function getFullNameAttribute(): string
    {
        return $this->first_name.' '.$this->last_name;
    }

    /**
     * Method getStatusAttribute
     *
     * @return string
     */
    public function getStatusNameAttribute(): string
    {
        $status = self::ACTIVE;

        switch($this->user_status)
        {
            case self::INACTIVE:
                $status = '<a href="javascript:void(0)" class=""><span class="badge badge-danger status_update" data-user_id="'.$this->id.'" data-status="'.$this->user_status.'">'.self::STATUS[self::INACTIVE].'</span></a>';
                break;
            default:
                $status = '<a href="javascript:void(0)" class=""><span class="badge badge-success status_update" data-user_id="'.$this->id.'" data-status="'.$this->user_status.'">'.self::STATUS[self::ACTIVE].'</span></a>';
                break;
        }

        return $status;
    }
    // $viewAction = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';
    // $editAction = '<a href="'. route('users.edit', $this->id).'" class="edit btn btn-primary btn-sm">Edit</a>';
    // //return $viewAction.' '.$editAction.' '.$this->getDeleteButtonAttribute();
    // return $editAction.' '.$this->getDeleteButtonAttribute();

    /**
     * Get the user associated with the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function survey(): HasOne
    {
        return $this->hasOne(UserSurvey::class, 'user_id', 'id');
    }
    
    /**
     * Method project
     *
     * @return HasOne
     */
    public function project(): HasOne
    {
        return $this->hasOne(Project::class, 'project_id', 'id');
    }
    
    /**
     * Method company
     *
     * @return HasOne
     */
    public function company(): HasOne
    {
        return $this->hasOne(Company::class, 'company_id', 'id');
    }

}
