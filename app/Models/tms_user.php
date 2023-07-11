<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Personalinfo;

class tms_user extends Model
{
    use HasFactory, Notifiable, HasApiTokens;

    protected $fillable = [
        'id',
        'firstname',
        'lastname',
        'birthdate',
        'gender',
        'email',
        'phonenumber',
        'password',
        'roomnumber',
        'is_admin',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function personalinfo()
    {
        return $this->hasOne(Personalinfo::class);
    }
}
