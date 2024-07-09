<?php

namespace Database\Seeders;

use App\Models\HairColor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HairColorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $hairColors = ['Русый(ая)', 'Брюнет(ка)', 'Шатен(ка)', 'Рыжий(ая)'];

        foreach($hairColors as $color)
        {
            HairColor::create(['name' => $color]);
        }
    }
}
