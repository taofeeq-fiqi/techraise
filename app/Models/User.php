<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
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
        'password' => 'hashed',
    ];

    /* the relationship between the Users table and the listings Table was that the 
     A user  hasMnay listings while the Listings belong to the Users */
    //relationship with listing
    public function listings(){
        return $this->hasMany(Listing::class,'user_id');
    }

    static public function getEmailSingle($email)
    {
        // return self::where('email','=',$email);
        return User::where('email','=',$email)->first();
    }

   static public function getTokenSingle($remember_token)
   {
     return self::where('remember_token','=', $remember_token)->first();
   }
}
