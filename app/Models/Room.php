<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = ['name', 'birthday_date', 'birthday_sum', 'birthday_person', 'admin_id'];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
