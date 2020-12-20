<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventRoom extends Model
{
    protected $table = 'events_room';
    protected $guarded = ['id', 'created_at', 'updated_at'];
}
