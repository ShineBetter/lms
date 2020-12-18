<?php

namespace App;
use App\Models\lesson;
use App\Models\level;
use App\Models\role;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpKernel\Profiler\Profile;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'lastName','email', 'password','status'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function profile()
    {
        return $this->hasOne(\App\Models\profile::class);
    }
    public function quiz()
    {
        return $this->belongsToMany(\App\Models\quiz::class,'user_quiz');
    }

    public function lesson()
    {
        return $this->morphToMany(lesson::class,'lessonable','lessonable');
    }

    public function level()
    {
        return $this->morphToMany(level::class,'levelable','levelable');
    }

    public function getParentByAuthId()
    {
        return User::where('id',User::where('id',Auth::id())->first()->pid)->first();
    }
    public function getParent($id)
    {
        return User::where('id',User::where('id',$id)->first()->pid)->first();
    }
}
