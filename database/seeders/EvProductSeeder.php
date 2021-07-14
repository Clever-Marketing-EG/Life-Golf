<?php

namespace Database\Seeders;

use App\Models\EvProduct;
use Illuminate\Database\Seeder;

class EvProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EvProduct::factory(2)->create();

    }
}
