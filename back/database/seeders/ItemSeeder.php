<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Item;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Item::firstOrCreate([
            "title"    => "Ultra-1.0-01.00.00 Рама",
            "count"    => 1,
            "source"   => "Производство",
            "laser"    => 0,
            "welding"  => 800,
            "assembly" => 200,
            "electr"   => 70
        ]);

        Item::firstOrCreate([
            "title"    => "Ultra-1.0-05.01.00 Рама кресла",
            "count"    => 1,
            "source"   => "Производство",
            "laser"    => 0,
            "welding"  => 800,
            "assembly" => 240,
            "electr"   => 40
        ]);

        Item::firstOrCreate([
            "title"    => "Ultra-1.0-00.00.01 Щит",
            "count"    => 2,
            "source"   => "Производство",
            "laser"    => 4,
            "welding"  => 0,
            "assembly" => 0,
            "electr"   => 12
        ]);

        Item::firstOrCreate([
            "title"    => "ВИТС-3.2-01.00.00 Опора подлокотника",
            "count"    => 2,
            "source"   => "Производство",
            "laser"    => 0,
            "welding"  => 300,
            "assembly" => 120,
            "electr"   => 10
        ]);

        Item::firstOrCreate([
            "title"    => "Болт М6х12 ГОСТ 1231-78",
            "count"    => 30,
            "source"   => "Склад",
            "laser"    => 0,
            "welding"  => 0,
            "assembly" => 0,
            "electr"   => 0
        ]);

        Item::firstOrCreate([
            "title"    => "ВИТС-3.2-00.00.00 Коляска-трансформер",
            "count"    => 1,
            "source"   => "Производство",
            "laser"    => 0,
            "welding"  => 0,
            "assembly" => 0,
            "electr"   => 300
        ]);
    }
}
