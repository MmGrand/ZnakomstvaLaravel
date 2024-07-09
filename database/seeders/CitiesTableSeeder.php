<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cities')->insert([
            ['name' => 'Москва', 'state' => null, 'country' => 'Россия', 'latitude' => 55.7558, 'longitude' => 37.6176],
            ['name' => 'Санкт-Петербург', 'state' => null, 'country' => 'Россия', 'latitude' => 59.9343, 'longitude' => 30.3351],
            ['name' => 'Новосибирск', 'state' => 'Новосибирская область', 'country' => 'Россия', 'latitude' => 55.0084, 'longitude' => 82.9357],
            ['name' => 'Екатеринбург', 'state' => 'Свердловская область', 'country' => 'Россия', 'latitude' => 56.8389, 'longitude' => 60.6057],
            ['name' => 'Нижний Новгород', 'state' => 'Нижегородская область', 'country' => 'Россия', 'latitude' => 56.2965, 'longitude' => 43.9361],
            ['name' => 'Казань', 'state' => 'Татарстан', 'country' => 'Россия', 'latitude' => 55.7943, 'longitude' => 49.1115],
            ['name' => 'Челябинск', 'state' => 'Челябинская область', 'country' => 'Россия', 'latitude' => 55.1644, 'longitude' => 61.4368],
            ['name' => 'Омск', 'state' => 'Омская область', 'country' => 'Россия', 'latitude' => 54.9885, 'longitude' => 73.3242],
            ['name' => 'Самара', 'state' => 'Самарская область', 'country' => 'Россия', 'latitude' => 53.2415, 'longitude' => 50.2212],
            ['name' => 'Ростов-на-Дону', 'state' => 'Ростовская область', 'country' => 'Россия', 'latitude' => 47.2357, 'longitude' => 39.7015],
            ['name' => 'Уфа', 'state' => 'Башкортостан', 'country' => 'Россия', 'latitude' => 54.7348, 'longitude' => 55.9578],
            ['name' => 'Красноярск', 'state' => 'Красноярский край', 'country' => 'Россия', 'latitude' => 56.0153, 'longitude' => 92.8932],
            ['name' => 'Пермь', 'state' => 'Пермский край', 'country' => 'Россия', 'latitude' => 58.0104, 'longitude' => 56.2294],
            ['name' => 'Воронеж', 'state' => 'Воронежская область', 'country' => 'Россия', 'latitude' => 51.6615, 'longitude' => 39.2003],
            ['name' => 'Волгоград', 'state' => 'Волгоградская область', 'country' => 'Россия', 'latitude' => 48.7080, 'longitude' => 44.5133],
        ]);
    }
}
