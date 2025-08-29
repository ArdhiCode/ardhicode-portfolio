<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Vinkla\Hashids\Facades\Hashids;

class Project extends Model
{
    protected $table = 'projects';
    protected $fillable = ['name', 'description', 'date', 'photo'];

    public function getHashidAttribute()
    {
        return Hashids::encode($this->id);
    }
}
