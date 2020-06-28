<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'cut','perm','color', 'treatment','spa', 'price','length_of_time','booking_plan','booking_date','user_id','user_activity'
    ];
}
