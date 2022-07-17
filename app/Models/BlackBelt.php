<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlackBelt extends Model
{
    use HasFactory;

    public function dan_list(){
        return $this->belongsTo('App\Models\DanList');
    }

    public function instructor_detail(){
        return $this->belongsTo('App\Models\Instructor');
    }
}
