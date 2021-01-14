<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;

class Room extends Model
{
    protected $fillable = ['name', 'birthday_date', 'birthday_sum', 'birthday_person', 'admin_id', 'budget'];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public static function rules(Room $room)
    {
        return [
            'name' => [
                'required',
                'min:3',
                'max:30',
                Rule::unique('rooms')->ignore($room->id)
            ],
            'birthday_person' => "required|alpha|max:50",
            'birthday_date' => 'required|date|after:today',
            'birthday_sum' => 'required|numeric|min:1'
        ];
    }

    public static function messages()
    {
        return [
            'name.unique' => 'Команда с таким именем уже существует!',
            'required' => 'Заполните это поле!',
            'after' => 'Указанная дата уже наступила!',
            'birthday_person.alpha' => 'В этом поле допускаются только буквенные символы!', // это пока что, потом может почту указывать будем и тд
            'name.min' => 'Название команды должно содержать не менее трех символов!',
            'name.max' => 'Название команды слишком длинное!',
            'birthday_person.max' => '',
            'birthday_sum.min' => 'Бюджет должен быть больше нуля!'
        ];
    }
}
