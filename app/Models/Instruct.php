<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Instruct extends Model
{
    public $timestamps = false;

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
