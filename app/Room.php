<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = ['name', 'birthday_date', 'birthday_sum', 'birthday_person'];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
