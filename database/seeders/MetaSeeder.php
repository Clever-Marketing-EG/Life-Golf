<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MetaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $homeData = array(
            [
                'name' => 'golf_carts_header',
                'content' => 'Golf Carts Header',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'home'
            ],
            [
                'name' => 'golf_carts_content',
                'content' => 'Golf Carts Content',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'home'
            ],
            [
                'name' => 'golf_carts_images_1',
                'content' => 'http://life-golf.cloveregypt.com/be/public/storage/meta_images/cart_1616944915.png',
                'content_ar' => 'http://life-golf.cloveregypt.com/be/public/storage/meta_images/cart_1616944915.png',
                'type' => 'image',
                'page' => 'home'
            ],
            [
                'name' => 'golf_carts_images_2',
                'content' => 'http://life-golf.cloveregypt.com/be/public/storage/meta_images/cart_1616944893.png',
                'content_ar' => 'http://life-golf.cloveregypt.com/be/public/storage/meta_images/cart_1616944893.png',
                'type' => 'image',
                'page' => 'home'
            ],
            [
                'name' => 'golf_carts_images_3',
                'content' => 'http://life-golf.cloveregypt.com/be/public/storage/meta_images/cart_1616944966.png',
                'content_ar' => 'http://life-golf.cloveregypt.com/be/public/storage/meta_images/cart_1616944966.png',
                'type' => 'image',
                'page' => 'home'
            ],
            //========================================================
            [
                'name' => 'electric_vehicles_header',
                'content' => 'Electric Vehicles Header',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'home'
            ],
            [
                'name' => 'electric_vehicles_content',
                'content' => 'Electric Vehicles Content',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'home'
            ],
            [
                'name' => 'electric_vehicles_images_1',
                'content' => 'http://life-golf.cloveregypt.com/be/public/storage/meta_images/bus_1616945137.png',
                'content_ar' => 'http://life-golf.cloveregypt.com/be/public/storage/meta_images/bus_1616945137.png',
                'type' => 'image',
                'page' => 'home'
            ],
            [
                'name' => 'electric_vehicles_images_2',
                'content' => 'http://life-golf.cloveregypt.com/be/public/storage/meta_images/bus_1616945184.png',
                'content_ar' => 'http://life-golf.cloveregypt.com/be/public/storage/meta_images/bus_1616945184.png',
                'type' => 'image',
                'page' => 'home'
            ],
            [
                'name' => 'electric_vehicles_images_3',
                'content' => 'http://life-golf.cloveregypt.com/be/public/storage/meta_images/bus_1616945200.png',
                'content_ar' => 'http://life-golf.cloveregypt.com/be/public/storage/meta_images/bus_1616945200.png',
                'type' => 'image',
                'page' => 'home'
            ],
            //========================================================
            [
                'name' => 'cleaning_equipment_header',
                'content' => 'Cleaning Equipment Header',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'home'
            ],
            [
                'name' => 'cleaning_equipment_content',
                'content' => 'Cleaning Equipment Content',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'home'
            ],
            [
                'name' => 'cleaning_equipment_images_1',
                'content' => 'http://life-golf.cloveregypt.com/be/public/storage/meta_images/cleaning_1616945386.png',
                'content_ar' => 'http://life-golf.cloveregypt.com/be/public/storage/meta_images/cleaning_1616945386.png',
                'type' => 'image',
                'page' => 'home'
            ],
            [
                'name' => 'cleaning_equipment_images_2',
                'content' => 'http://life-golf.cloveregypt.com/be/public/storage/meta_images/cleaning_1616945421.png',
                'content_ar' => 'http://life-golf.cloveregypt.com/be/public/storage/meta_images/cleaning_1616945421.png',
                'type' => 'image',
                'page' => 'home'
            ],
            [
                'name' => 'cleaning_equipment_images_3',
                'content' => 'http://life-golf.cloveregypt.com/be/public/storage/meta_images/cleaning_1616945448.png',
                'content_ar' => 'http://life-golf.cloveregypt.com/be/public/storage/meta_images/cleaning_1616945448.png',
                'type' => 'image',
                'page' => 'home'
            ],
            //========================================================
            [
                'name' => 'handling_equipment_header',
                'content' => 'Handling Equipment Header',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'home'
            ],
            [
                'name' => 'handling_equipment_content',
                'content' => 'Handling Equipment Content',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'home'
            ],
            [
                'name' => 'handling_equipment_images_1',
                'content' => 'http://life-golf.cloveregypt.com/be/public/storage/meta_images/handling_1616945607.png',
                'content_ar' => 'http://life-golf.cloveregypt.com/be/public/storage/meta_images/handling_1616945607.png',
                'type' => 'image',
                'page' => 'home'
            ],
            [
                'name' => 'handling_equipment_images_2',
                'content' => 'http://life-golf.cloveregypt.com/be/public/storage/meta_images/handling_1616945622.png',
                'content_ar' => 'http://life-golf.cloveregypt.com/be/public/storage/meta_images/handling_1616945622.png',
                'type' => 'image',
                'page' => 'home'
            ],
            [
                'name' => 'handling_equipment_images_3',
                'content' => 'http://life-golf.cloveregypt.com/be/public/storage/meta_images/handling_1616945647.png',
                'content_ar' => 'http://life-golf.cloveregypt.com/be/public/storage/meta_images/handling_1616945647.png',
                'type' => 'image',
                'page' => 'home'
            ],
            //========================================================
            [
                'name' => 'orders_header',
                'content' => 'Orders Header',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'home'
            ],
            [
                'name' => 'orders_content',
                'content' => 'Orders Content',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'home'
            ],
            [
                'name' => 'orders_images_1',
                'content' => 'http://life-golf.cloveregypt.com/be/public/storage/meta_images/handling_1616945607.png',
                'content_ar' => 'http://life-golf.cloveregypt.com/be/public/storage/meta_images/handling_1616945607.png',
                'type' => 'image',
                'page' => 'home'
            ],
            [
                'name' => 'orders_images_2',
                'content' => 'http://life-golf.cloveregypt.com/be/public/storage/meta_images/handling_1616945607.png',
                'content_ar' => 'http://life-golf.cloveregypt.com/be/public/storage/meta_images/handling_1616945607.png',
                'type' => 'image',
                'page' => 'home'
            ],
            [
                'name' => 'orders_images_3',
                'content' => 'http://life-golf.cloveregypt.com/be/public/storage/meta_images/handling_1616945607.png',
                'content_ar' => 'http://life-golf.cloveregypt.com/be/public/storage/meta_images/handling_1616945607.png',
                'type' => 'image',
                'page' => 'home'
            ],
            //========================================================
            [
                'name' => 'electronics_header',
                'content' => 'Electronics Header',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'home'
            ],
            [
                'name' => 'electronics_content',
                'content' => 'Electronics Content',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'home'
            ],
            [
                'name' => 'electronics_images_1',
                'content' => 'http://life-golf.cloveregypt.com/be/public/storage/meta_images/electronics_1616946598.png',
                'content_ar' => 'http://life-golf.cloveregypt.com/be/public/storage/meta_images/electronics_1616946598.png',
                'type' => 'image',
                'page' => 'home'
            ],
            [
                'name' => 'electronics_images_2',
                'content' => 'http://life-golf.cloveregypt.com/be/public/storage/meta_images/electronics_1616946614.png',
                'content_ar' => 'http://life-golf.cloveregypt.com/be/public/storage/meta_images/electronics_1616946614.png',
                'type' => 'image',
                'page' => 'home'
            ],
            [
                'name' => 'electronics_images_3',
                'content' => 'http://life-golf.cloveregypt.com/be/public/storage/meta_images/electronics_1616946640.png',
                'content_ar' => 'http://life-golf.cloveregypt.com/be/public/storage/meta_images/electronics_1616946640.png',
                'type' => 'image',
                'page' => 'home'
            ],
            //========================================================
            [
                'name' => 'about_us_header',
                'content' => 'Home About Us Header',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'home'
            ],
            [
                'name' => 'about_us_content',
                'content' => 'Home About Us Content',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'home'
            ],
            [
                'name' => 'about_us_images_1',
                'content' => 'http://life-golf.cloveregypt.com/be/public/storage/meta_images/about_us_1616949002.jpg',
                'content_ar' => 'http://life-golf.cloveregypt.com/be/public/storage/meta_images/about_us_1616949002.jpg',
                'type' => 'image',
                'page' => 'home'
            ],
            [
                'name' => 'about_us_images_2',
                'content' => 'http://life-golf.cloveregypt.com/be/public/storage/meta_images/about_us_1616949234.jpg',
                'content_ar' => 'http://life-golf.cloveregypt.com/be/public/storage/meta_images/about_us_1616949234.jpg',
                'type' => 'image',
                'page' => 'home'
            ],
            [
                'name' => 'about_us_images_3',
                'content' => 'http://life-golf.cloveregypt.com/be/public/storage/meta_images/about_us_1616949318.jpg',
                'content_ar' => 'http://life-golf.cloveregypt.com/be/public/storage/meta_images/about_us_1616949318.jpg',
                'type' => 'image',
                'page' => 'home'
            ],
        );
        $aboutUsData = array(
            [
                'name' => 'image_1',
                'content' => 'http://life-golf.cloveregypt.com/be/public/storage/meta_images/about_us_1616949002.jpg',
                'content_ar' => 'http://life-golf.cloveregypt.com/be/public/storage/meta_images/about_us_1616949002.jpg',
                'type' => 'image',
                'page' => 'about-us'
            ],
            [
                'name' => 'image_2',
                'content' => 'http://life-golf.cloveregypt.com/be/public/storage/meta_images/about_us_1616949002.jpg',
                'content_ar' => 'http://life-golf.cloveregypt.com/be/public/storage/meta_images/about_us_1616949002.jpg',
                'type' => 'image',
                'page' => 'about-us'
            ],
            [
                'name' => 'image_3',
                'content' => 'http://life-golf.cloveregypt.com/be/public/storage/meta_images/about_us_1616949002.jpg',
                'content_ar' => 'http://life-golf.cloveregypt.com/be/public/storage/meta_images/about_us_1616949002.jpg',
                'type' => 'image',
                'page' => 'about-us'
            ],
            [
                'name' => 'image_4',
                'content' => 'http://life-golf.cloveregypt.com/be/public/storage/meta_images/about_us_1616949002.jpg',
                'content_ar' => 'http://life-golf.cloveregypt.com/be/public/storage/meta_images/about_us_1616949002.jpg',
                'type' => 'image',
                'page' => 'about-us'
            ],
            [
                'name' => 'content',
                'content' => 'This is Content',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'about-us'
            ],
            [
                'name' => 'number_of_clients',
                'content' => '121',
                'content_ar' => '121',
                'type' => 'text',
                'page' => 'about-us'
            ],
            [
                'name' => 'years_of_experience',
                'content' => '10',
                'content_ar' => '10',
                'type' => 'text',
                'page' => 'about-us'
            ],
            [
                'name' => 'number_of_engineers',
                'content' => '100',
                'content_ar' => '100',
                'type' => 'text',
                'page' => 'about-us'
            ],
            [
                'name' => 'number_of_sold_vehicles',
                'content' => '250',
                'content_ar' => '250',
                'type' => 'text',
                'page' => 'about-us'
            ]
        );
        $footerData = array(
            [
                'name' => 'content',
                'content' => 'This is footer content!',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'footer'
            ],
        );

        $data = array_merge($homeData, $aboutUsData, $footerData);

        DB::table('metas')->insert($data);
    }
}
