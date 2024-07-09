<?php

namespace Database\Seeders;

use App\Models\EyeColor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EyeColorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $eyeColors = ['Карий', 'Серый', 'Голубой', 'Зеленый'];

        foreach($eyeColors as $color)
        {
            EyeColor::create(['name' => $color]);
        }
    }
}
