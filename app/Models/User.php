<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name', 'email', 'password', 'birth_date', 'gender_id',
        'height', 'weight', 'hair_color_id', 'eye_color_id', 'purpose_id',
        'about'
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
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
    // Аксессоры
    public function getAvatarAttribute()
    {
        return $this->photos()->where('is_avatar', true)->first() ?? null;
    }

    public function getCityAttribute()
    {
        return $this->city->name ?? null;
    }

    public function getHairColorNameAttribute()
    {
        return $this->hairColor->name ?? null;
    }

    public function getEyeColorNameAttribute()
    {
        return $this->eyeColor->name ?? null;
    }

    public function getGenderNameAttribute()
    {
        return $this->gender->name ?? null;
    }

    public function getPurposeNameAttribute()
    {
        return $this->purpose->name ?? null;
    }

    // Отношения с другими моделями
    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function photos()
    {
        return $this->hasMany(Photo::class);
    }

    public function hairColor()
    {
        return $this->belongsTo(HairColor::class);
    }

    public function eyeColor()
    {
        return $this->belongsTo(EyeColor::class);
    }

    public function gender()
    {
        return $this->belongsTo(Gender::class);
    }

    public function purpose()
    {
        return $this->belongsTo(DatingPurpose::class);
    }
}
