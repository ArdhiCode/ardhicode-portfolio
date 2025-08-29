<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Vinkla\Hashids\Facades\Hashids;

class Experience extends Model
{
    protected $table = 'experiences';
    protected $fillable = ['title', 'description', 'date', 'photo'];

    public function getHashidAttribute()
    {
        return Hashids::encode($this->id);
    }
}
