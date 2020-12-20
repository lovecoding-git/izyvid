<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventVenue extends Model
{
    protected $table = 'events_venue';
    protected $guarded = ['id', 'created_at', 'updated_at'];
}
