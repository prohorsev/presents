<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert($this->getData());
    }

    public function getData()
    {
        $data = [
            [
                'name' => 'user1',
                'email' => 'user1@mail.ru',
                'password' => Hash::make('123'),
            ],
            [
                'name' => 'user2',
                'email' => 'user2@mail.ru',
                'password' => Hash::make('123'),
            ],
            [
                'name' => 'user3',
                'email' => 'user3@mail.ru',
                'password' => Hash::make('123'),
            ],
        ];
        return $data;
    }
}
