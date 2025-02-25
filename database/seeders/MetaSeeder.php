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
                'name' => 'partner_img',
                'content' => 'http://life-golf.cloveregypt.com/be/public/storage/meta_images/cart_1616944915.png',
                'content_ar' => 'http://life-golf.cloveregypt.com/be/public/storage/meta_images/cart_1616944915.png',
                'type' => 'image',
                'page' => 'home'
            ],
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
            [
                'name' => 'news_content',
                'content' => 'Home News content',
                'content_ar' => 'محتوي',
                'type' => 'text',
                'page' => 'home'
            ],
            [
                'name' => 'news_header',
                'content' => 'Home News header',
                'content_ar' => 'محتوي',
                'type' => 'text',
                'page' => 'home'
            ],
            [
                'name' => 'products_header',
                'content' => 'Home products header',
                'content_ar' => 'محتوي',
                'type' => 'text',
                'page' => 'home'
            ],
            [
                'name' => 'services_header',
                'content' => 'Home services header',
                'content_ar' => 'محتوي',
                'type' => 'text',
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
                'name' => 'header',
                'content' => 'Get to know us better',
                'content_ar' => 'محتوى',
                'type' => 'text',
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
                'name' => 'name_of_clients',
                'content' => 'Happy clients',
                'content_ar' => 'محتوي',
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
                'name' => 'name_of_experience',
                'content' => 'Years of Experience',
                'content_ar' => 'محتوي',
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
                'name' => 'name_of_engineers',
                'content' => 'Engineers',
                'content_ar' => 'محتوي',
                'type' => 'text',
                'page' => 'about-us'
            ],

            [
                'name' => 'number_of_sold_vehicles',
                'content' => '250',
                'content_ar' => '250',
                'type' => 'text',
                'page' => 'about-us'
            ],
            [
                'name' => 'name_of_sold_vehicles',
                'content' => 'Vehicle sold',
                'content_ar' => 'محتوي',
                'type' => 'text',
                'page' => 'about-us'
            ],
            [
                'name' => 'certificates_header',
                'content' => 'Our honors and certificate',
                'content_ar' => 'محتوي',
                'type' => 'text',
                'page' => 'about-us'
            ],
            [
                'name' => 'video_header',
                'content' => 'Video presentation',
                'content_ar' => 'محتوي',
                'type' => 'text',
                'page' => 'about-us'
            ],
            [
                'name' => 'gallery_header',
                'content' => 'Our gallery',
                'content_ar' => 'محتوي',
                'type' => 'text',
                'page' => 'about-us'
            ]
        );
        $footerData = array(
            [
                'name' => 'content',
                'content' => 'We can assure for your good self-perfection & Luxurious models that our company distributes in the market as we consider our client is our partner in success and deserve to be treated like a prince.',
                'content_ar' => 'يمكننا أن نؤكد لكم الكمال في كل خدمة نقدمها والنماذج الفاخرة التي توزعها شركتنا في السوق، حيث نعتبر أن عميلنا هو شريكنا في النجاح ويستحق أن يُعامل مثل الأمير.',
                'type' => 'text',
                'page' => 'footer'
            ],
        );
        $maintenanceData = array(
            [
                'name' => 'maintenance_header_1',
                'content' => 'This is header!',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'maintenance'
            ],
            [
                'name' => 'maintenance_header_2',
                'content' => 'This is header!',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'maintenance'
            ],
            [
                'name' => 'maintenance_header_3',
                'content' => 'This is header!',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'maintenance'
            ],
            [
                'name' => 'maintenance_content_1',
                'content' => 'This is content!',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'maintenance'
            ],
            [
                'name' => 'maintenance_content_2',
                'content' => 'This is content!',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'maintenance'
            ],
            [
                'name' => 'maintenance_content_3',
                'content' => 'This is content!',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'maintenance'
            ],
            [
                'name' => 'image_1',
                'content' => 'http://life-golf.cloveregypt.com/be/public/storage/meta_images/about_us_1616949002.jpg',
                'content_ar' => 'http://life-golf.cloveregypt.com/be/public/storage/meta_images/about_us_1616949002.jpg',
                'type' => 'image',
                'page' => 'maintenance'
            ],
            [
                'name' => 'image_2',
                'content' => 'http://life-golf.cloveregypt.com/be/public/storage/meta_images/about_us_1616949002.jpg',
                'content_ar' => 'http://life-golf.cloveregypt.com/be/public/storage/meta_images/about_us_1616949002.jpg',
                'type' => 'image',
                'page' => 'maintenance'
            ],
            [
                'name' => 'image_3',
                'content' => 'http://life-golf.cloveregypt.com/be/public/storage/meta_images/about_us_1616949002.jpg',
                'content_ar' => 'http://life-golf.cloveregypt.com/be/public/storage/meta_images/about_us_1616949002.jpg',
                'type' => 'image',
                'page' => 'maintenance'
            ],
        );
        $electronicDate = array(
            [
                'name' => 'electronic_title',
                'content' => 'Order electronics and spare parts',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'electronics'
            ],
            [
                'name' => 'electronic_content',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent
                sollicitudin vulputate porta. Quisque ut hendrerit est, a pulvinar augue. Morbi
                vel massa at tellus porta dignissim. Praesent mauris ante, lobortis at erat
                quis, placerat pellentesque erat. Morbi vitae suscipit nibh. Ut volutpat justo
                ut metus condimentum, sit amet tincidunt dui maximus. Suspendisse
                pretium erat nec lorem lobortis aliquet. Nam ut dui dui. Donec eget fringilla…',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'electronics'
            ],
            [
                'name' => 'electronic_personal',
                'content' => 'Personal details',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'electronics'
            ],
            [
                'name' => 'electronic_payment',
                'content' => 'Cash on delivery',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'electronics'
            ],
            [
                'name' => 'electronic_shipping',
                'content' => 'Shipping address',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'electronics'
            ],
            [
                'name' => 'electronic_product',
                'content' => 'Product details',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'electronics'
            ],
            [
                'name' => 'image_1',
                'content' => 'http://life-golf.cloveregypt.com/be/public/storage/meta_images/about_us_1616949002.jpg',
                'content_ar' => 'http://life-golf.cloveregypt.com/be/public/storage/meta_images/about_us_1616949002.jpg',
                'type' => 'image',
                'page' => 'electronics'
            ]
        );
        $customData = array(
            [
                'name' => 'customize_title',
                'content' => 'Customize your order with life golf',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'customize'
            ],    [
                'name' => 'customize_content',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent
                sollicitudin vulputate porta. Quisque ut hendrerit est, a pulvinar augue. Morbi
                vel massa at tellus porta dignissim. Praesent mauris ante, lobortis at erat
                quis, placerat pellentesque erat. Morbi vitae suscipit nibh. Ut volutpat justo
                ut metus condimentum, sit amet tincidunt dui maximus. Suspendisse
                pretium erat nec lorem lobortis aliquet. Nam ut dui dui. Donec eget fringilla…',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'customize'
            ],
            [
                'name' => 'image_1',
                'content' => 'http://life-golf.cloveregypt.com/be/public/storage/meta_images/about_us_1616949002.jpg',
                'content_ar' => 'http://life-golf.cloveregypt.com/be/public/storage/meta_images/about_us_1616949002.jpg',
                'type' => 'image',
                'page' => 'customize'
            ]

        );
        $contactData = array(
            [
                'name' => 'contact_phone',
                'content' => 'Phone',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'contact'
            ],
            [
                'name' => 'contact_number',
                'content' => '+20123456789',
                'content_ar' => '+20123456789',
                'type' => 'text',
                'page' => 'contact'
            ],
            [
                'name' => 'contact_email',
                'content' => 'Email',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'contact'
            ],
            [
                'name' => 'contact_mail',
                'content' => 'Email',
                'content_ar' => 'example@example.com',
                'type' => 'text',
                'page' => 'contact'
            ],
            [
                'name' => 'contact_address',
                'content' => 'Address',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'contact'
            ],
            [
                'name' => 'contact_location',
                'content' => 'Cairo,Egypt',
                'content_ar' => 'مصر',
                'type' => 'text',
                'page' => 'contact'
            ]
        );



        $ElectricVichaleData = array(
            [
                'name' => 'intro_image',
                'content' => 'https://imgcdn.zigwheels.ph/medium/gallery/exterior/31/1902/volkswagen-lavida-full-front-view-949486.jpg',
                'content_ar' => 'https://imgcdn.zigwheels.ph/medium/gallery/exterior/31/1902/volkswagen-lavida-full-front-view-949486.jpg',
                'type' => 'image',
                'page' => 'ElectricVichale'
            ],
            [
                'name' => 'about_image',
                'content' => 'https://imgcdn.zigwheels.ph/medium/gallery/exterior/31/1902/volkswagen-lavida-full-front-view-949486.jpg',
                'content_ar' => 'https://imgcdn.zigwheels.ph/medium/gallery/exterior/31/1902/volkswagen-lavida-full-front-view-949486.jpg',
                'type' => 'image',
                'page' => 'ElectricVichale'
            ],
            [
                'name' => 'about_video',
                'content' => 'https://www.youtube.com/embed/vVEvmT5O75o',
                'content_ar' => 'https://www.youtube.com/embed/vVEvmT5O75o',
                'type' => 'image',
                'page' => 'ElectricVichale'
            ],
            [
                'name' => 'about_title',
                'content' => 'About US',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'ElectricVichale'
            ],
            [
                'name' => 'about_content',
                'content' => 'About content',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'ElectricVichale'
            ],
            [
                'name' => 'contact_phone',
                'content' => '01281173567',
                'content_ar' => '01281173567',
                'type' => 'text',
                'page' => 'ElectricVichale'
            ],
            [
                'name' => 'contact_email',
                'content' => 'mina@gmail.com',
                'content_ar' => 'mina@gmail.com',
                'type' => 'text',
                'page' => 'ElectricVichale'
            ],
            [
                'name' => 'contact_address',
                'content' => '7 sjsijdsj 4',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'ElectricVichale'
            ],

        );


        $data = array_merge($homeData, $aboutUsData, $footerData, $maintenanceData, $contactData, $electronicDate, $customData, $ElectricVichaleData);

        DB::table('metas')->insert($data);
    }
}
