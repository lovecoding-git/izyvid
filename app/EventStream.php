<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventStream extends Model
{
    protected $table = 'events_stream';
    protected $guarded = ['id', 'created_at', 'updated_at'];
}
