<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bills extends Model
{
    use HasFactory;

    protected $table = 'bills';

    protected $fillable = [
        'tenant',
        'room',
        'amount',
        'due_date',
    ];
    public function room()
    {
        return $this->belongsTo(Room::class, 'room', 'roomnumber');
    }
}
