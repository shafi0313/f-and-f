<?php

namespace Database\Seeders;

use App\Models\Slider;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sliders = [
            [
                'image' => 'slider-ca1eee1108.webp',
                'is_active' => 1,
            ],
            [
                'image' => 'slider-00ec24a4c6.webp',
                'is_active' => 1,
            ],
            [
                'image' => 'slider-e54bd2c9b1.webp',
                'is_active' => 1,
            ],
        ];

        Slider::insert($sliders);
    }
}
