<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        About::create([
            'content' => '<p><img style="width: 1100px;" data-filename="1484821634.png" src="/uploads/images/about/df3e21fa210.webp"><p>We are running our business competitively with good reputation in WA last ten years. F and F Property Maintenance is a sister concern of WACabs Pty Ltd, F and F Accounting, Focus IT Solution, accounting software provider AARKS.</p><p>We are proud to be WA owned and operated company and want to serve our community with good faith and reputation.</p></p>',
        ]);
    }
}
