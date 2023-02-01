<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $type = Type::create([
            'size' => 'XL',
            'color' => 'Black',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
