<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
//    implements MustVerifyEmail
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
        'mailing',
        'password',
        'phoneNumber',
        'address',
        'rule',
        'givenName',
        'middleName',
        'familyName',
        'birthDate',
        'countryCitizenship',
        'gender',
        'status',
        'countryInsert',
        'fieldInsert',
        'address',
        'certificate',
        'certificate_language_file',
        'certificate_language',
        'job_file',
        'status_request',
        'last_seen',
        'emergency',
        'passportNumber',
        'expiryDate',
        'firstLanguage',
        'langStudy',
        'highestLevelEducation',
        'countryEducation',
        'fieldStudy',
        'yearGraduation',
        'GPA',
        'score',
        'passportBio',
        'NationalIDCard',
        'educationCertificate',
        'CV',
        'GRE',
        'school',
        'language',
        'pending'
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
    public function Comment()
    {
        return $this->hasMany(Comment::class);
    }
//    public function getJWTIdentifier()
//    {
//        return $this->getKey();
//    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
//    public function getJWTCustomClaims()
//    {
//        return [];
//    }

    public function request()
    {
        return $this->hasMany(Requst::class);
    }
}
