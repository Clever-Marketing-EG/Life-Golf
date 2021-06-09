<?php

namespace Database\Seeders;

use App\Models\ArticleCategory;
use App\Models\SubCategory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CategorySeeder::class,
            // ProductSeeder::class,
            // ArticleSeeder::class,
            UserSeeder::class,
            MetaSeeder::class,
            // SubCategorySeeder::class
            // ServiceSeeder::class,
            // CertificateSeeder::class,
            // VideoSeeder::class,
            // GallerySeeder::class,
            // TermsSeeder::class,
        ]);

        // \App\Models\User::factory(10)->create();
    }
}
