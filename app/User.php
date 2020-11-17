<?php

namespace App;
use App\Models\lesson;
use App\Models\role;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
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

    public function lesson()
    {
        return $this->morphToMany(lesson::class,'lessonable','lessonable');
    }
}
