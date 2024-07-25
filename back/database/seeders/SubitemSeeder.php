<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Subitem;

class SubitemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Subitem::firstOrCreate([
            "title"    => "Ultra-1.0-01.00.01 Профиль основной задний",
            "count"    => 1,
            "source"   => "Производство",
            "laser"    => 3,
            "welding"  => 0,
            "assembly" => 0,
            "electr"   => 0,
            "item_id"  => 1
        ]);

        Subitem::firstOrCreate([
            "title"    => "Ultra-1.0-01.00.04 Ухо",
            "count"    => 2,
            "source"   => "Производство",
            "laser"    => 4,
            "welding"  => 0,
            "assembly" => 0,
            "electr"   => 0,
            "item_id"  => 1
        ]);

        Subitem::firstOrCreate([
            "title"    => "Ultra-1.0-01.00.08 Втулка подшипников",
            "count"    => 2,
            "source"   => "Склад",
            "laser"    => 0,
            "welding"  => 0,
            "assembly" => 0,
            "electr"   => 0,
            "item_id"  => 1
        ]);

        Subitem::firstOrCreate([
            "title"    => "Ultra-1.0-01.00.04 Ухо",
            "count"    => 5,
            "source"   => "Производство",
            "laser"    => 4,
            "welding"  => 0,
            "assembly" => 0,
            "electr"   => 0,
            "item_id"  => 4
        ]);

        Subitem::firstOrCreate([
            "title"    => "Болт М6х12 ГОСТ 1231-78",
            "count"    => 20,
            "source"   => "Склад",
            "laser"    => 4,
            "welding"  => 0,
            "assembly" => 0,
            "electr"   => 0,
            "item_id"  => 4
        ]);
    }
}
