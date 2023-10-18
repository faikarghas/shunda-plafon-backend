<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Repositories\ProductPageRepository;
use App\Models\ProductPage;

class ProductPageSeeder extends Seeder
{
    /**
     * Create the database record for this singleton module.
     *
     * @return void
     */
    public function run()
    {
        if (ProductPage::count() > 0) {
            return;
        }

        app(ProductPageRepository::class)->create([
            'title' => [
                'en' => 'HomePage',
                'id' => 's'
            ],
            'meta_title' => [
                'en' => '',
                'id' => 's'
            ],
            'meta_description' => [
                'en' => '',
                'id' => 's'
            ],
            'published' => true,
        ]);
    }
}
