<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventMeta extends Model
{
    protected $table = 'events_meta';
    protected $guarded = ['id', 'created_at', 'updated_at'];
    public $timestamps = false;

}
