<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Room extends Model
{
    protected $fillable = ['name', 'birthday_date', 'birthday_sum', 'birthday_person'];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
