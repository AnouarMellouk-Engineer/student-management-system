<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public $timestamps = false;

    public function instructs()
    {
        return $this->hasMany(Instruct::class);
    }
}
