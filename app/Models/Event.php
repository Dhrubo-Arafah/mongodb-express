<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'event_name',
        'detail',
        'asking_amount',
        'event_status'
    ];
    public function user()
    {
        return $this->hasOne(User::class, 'user_id');
    }
    public function fund()
    {
        return $this->hasOne(Fund::class, 'fund_id');
    }
}
