<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            [
                'name' => 'Golf Cart & Utility',
                'name_ar' => 'سيارات الجولف ومُلزماتها',
                'content' => 'hi',
                'content_ar' => 'hi',
                'image_url' => 'http://life-golf.cloveregypt.com/be/public/storage/meta_images/cart_1616944893.png',
            ]

        );

        DB::table('subcategories')->insert($data);
    }
}
