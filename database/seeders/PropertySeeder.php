<?php

namespace Database\Seeders;

use App\Models\Property;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $properties = [
            [
                'name'        => '8 Rochford Way, Girrawheen WA',
                'no_of_rooms' => 4,
                'address'     => 'Address 1',
                'city'        => 'City 1',
                'state'       => 'State 1',
                'image'       => 'property-5868b78639.webp',
                'description' => 'Description 1',
                'is_active'   => 1
            ],
            [
                'name'        => '34 Edgington Cres, Koondoola,WA',
                'no_of_rooms' => 5,
                'address'     => 'Address 1',
                'city'        => 'City 1',
                'state'       => 'State 1',
                'image'       => 'property-3fe0f38318.webp',
                'description' => 'Description 1',
                'is_active'   => 1
            ],
            [
                'name'        => '140A Presidenet Street , Kewdale ( New House )',
                'no_of_rooms' => 4,
                'address'     => 'Address 1',
                'city'        => 'City 1',
                'state'       => 'State 1',
                'image'       => 'property-d5ae5720b2.webp',
                'description' => 'Description 1',
                'is_active'   => 1
            ],
        ];
        Property::insert($properties);
    }
}
