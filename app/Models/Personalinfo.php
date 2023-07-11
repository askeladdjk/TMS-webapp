<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\tms_user;

class Personalinfo extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function tms_user()
    {
        return $this->belongsTo(tms_user::class);
    }

}
