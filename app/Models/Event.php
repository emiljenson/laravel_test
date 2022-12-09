<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function workshops()
    {
        return $this->hasMany(Workshop::class);
    }

    public function future_workshops()
    {
        return $this->workshops()->whereDate('start', '>',  date('Y-m-d h:i:s'));
    }
}
