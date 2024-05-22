<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Morilog\Jalali\Jalalian;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $appends=["fullname","date_birth_convert"];
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'lastname',
        'username',
        'email',
        'state',
        'password',
        'new_password',
        'confirm_code',
        'expire_confirm_at',
        'national_code',
        'gender',
        'date_birth',
        'date',
        'mobile',
        'email',
        'postal_code',
        'province',
        'city',
        'address',
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


    public function getFullnameAttribute(){
        return $this->name." ".$this->lastname;
    }

    public function comment(){
        return $this->hasMany(comment::class,'user_id');
    }

    public function getdateBirthConvertAttribute(){
        return Jalalian::forge($this->date_birth)->format('Y-m-d');
    }

}
