<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Booking extends Model
{
    use Sortable;
    protected $fillable = [
        'cut','perm','color', 'treatment','spa', 'price','length_of_time','booking_plan','booking_date','user_id','active'
    ];

    public $sortable = [
        'booking_plan',
        'booking_date',
        'user_id',
        'active',
        'kana_family_name',
        'booking_date_number',
        'price',
        'created_at',
        'updated_at',
                    ];
}
