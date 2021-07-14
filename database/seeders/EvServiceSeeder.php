<?php

namespace Database\Seeders;

use App\Models\EvService;
use Illuminate\Database\Seeder;

class EvServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EvService::factory(100)->create();
    }
}
