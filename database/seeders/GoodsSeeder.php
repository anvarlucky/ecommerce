<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Goods;

class GoodsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $goods = Goods::create([
            'name' => 'T-shirt',
            'type_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
