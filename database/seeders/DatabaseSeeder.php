<?php

namespace Database\Seeders;

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
            ProductSeeder::class,
            ArticleSeeder::class,
            UserSeeder::class,
            MetaSeeder::class,
            ServiceSeeder::class,
            CertificateSeeder::class,
            VideoSeeder::class,
            GallerySeeder::class,
            TermsSeeder::class
        ]);

        // \App\Models\User::factory(10)->create();
    }
}
