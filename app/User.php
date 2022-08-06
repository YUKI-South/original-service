<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Question;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    public function questions()
    {
        return $this->hasMany(Question::class);
    }
    
    public function loadRelationshipCounts()
    {
        $this->loadCount(['questions', 'followings', 'followers', 'answers']);
    }
    
    public function answers()
    {
        return $this->hasMany(Answer::class);
    }
    
    public function followings()
    {
        return $this->belongsToMany(User::class, 'user_follow', 'user_id', 'follow_id')->withTimestamps();
    }
    
    public function followers()
    {
        return $this->belongsToMany(User::class, 'user_follow', 'follow_id', 'user_id')->withTimestamps();
    }
    
    public function is_following($userId)
    {
        return $this->followings()->where('follow_id', $userId)->exists();
    }
    
    public function follow($userId)
    {
        $exist = $this->is_following($userId);
        
        $its_me = $this->id == $userId;
        
        if($exist || $its_me) {
            return false;
        }else {
            $this->followings()->attach($userId);
            return true;
        }
    }
    
    public function unfollow($userId)
    {
        $exist = $this->is_following($userId);
        
        $its_me = $this->id == $userId;
        
        if($exist && !$its_me ){
            $this->followings()->detach($userId);
            return true;
        }else{
            return false;
        }
    }
    
    public function feed_questions()
    {
        $userIds = $this->followings()->pluck('users.id')->toArray();
        
        return Question::whereIn('user_id', $userids);
    }
    
    public function questions_except_me()
    {
        $questions = Question::all();
        
        $user = \Auth::user();
        
        foreach($questions as $question){
            if($user->id === $question->user_id){
                return false;
            }else{
                return $question;
            };
        }
    }
}
