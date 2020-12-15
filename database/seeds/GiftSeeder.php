<?php

use Illuminate\Database\Seeder;

class GiftSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gifts')->insert($this->getData());
    }

    public function getData(): array
    {
        $data = [
            ['name' => 'Конфеты'],
            ['name' => 'Вязаные носки'],
            ['name' => 'Игрушка'],
            ['name' => 'Флешка'],
            ['name' => 'Пряники'],
        ];

        return $data;

    }

}
