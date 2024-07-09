<?php

namespace Database\Seeders;

use App\Models\DatingPurpose;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatingPurposesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $purposes = ['Пока не знаю', 'Серьезные отношения', 'Свидания и флирт', 'Общение и дружба', 'Отношения на одну ночь'];

        foreach($purposes as $purpose)
        {
            DatingPurpose::create(['name' => $purpose]);
        }
    }
}
