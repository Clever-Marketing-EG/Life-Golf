<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
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
                'image_url' => 'http://life-golf.cloveregypt.com/be/public/storage/meta_images/cart_1616944893.png',
            ],
            [
                'name' => 'Electric Vehicle',
                'name_ar' => ' مواصلات كهربائية',
                'image_url' => 'http://life-golf.cloveregypt.com/be/public/storage/meta_images/bus_1616945137.png',
            ],
            [
                'name' => 'Cleaning Equipment',
                'name_ar' => 'مُعدات تنظيف',
                'image_url' => 'http://life-golf.cloveregypt.com/be/public/storage/meta_images/cleaning_1616945386.png',
            ],
            [
                'name' => 'Handling Equipment',
                'name_ar' => 'أدوات رفع',
                'image_url' => 'http://life-golf.cloveregypt.com/be/public/storage/meta_images/handling_1616945607.png',
            ],
            [
                'name' => 'Electronics',
                'name_ar' => 'أدوات كهربية',
                'image_url' => 'http://life-golf.cloveregypt.com/be/public/storage/meta_images/electronics_1616946598.png',
            ],

        );

        DB::table('categories')->insert($data);
    }
}
