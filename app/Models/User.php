<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
<<<<<<< HEAD
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
=======
<<<<<<< HEAD
=======
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
>>>>>>> pruebas
>>>>>>> 789919b299d9bb64c87434613a9466ad7de747e1
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
<<<<<<< HEAD
=======
<<<<<<< HEAD
    use HasApiTokens, HasFactory, Notifiable;
=======
>>>>>>> 789919b299d9bb64c87434613a9466ad7de747e1
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;
<<<<<<< HEAD
=======
>>>>>>> pruebas
>>>>>>> 789919b299d9bb64c87434613a9466ad7de747e1

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
<<<<<<< HEAD
        'two_factor_recovery_codes',
        'two_factor_secret',
=======
<<<<<<< HEAD
=======
        'two_factor_recovery_codes',
        'two_factor_secret',
>>>>>>> pruebas
>>>>>>> 789919b299d9bb64c87434613a9466ad7de747e1
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> 789919b299d9bb64c87434613a9466ad7de747e1

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];
<<<<<<< HEAD
=======
>>>>>>> pruebas
>>>>>>> 789919b299d9bb64c87434613a9466ad7de747e1
}
