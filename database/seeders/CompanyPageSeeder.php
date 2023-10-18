<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Repositories\CompanyPageRepository;
use App\Models\CompanyPage;

class CompanyPageSeeder extends Seeder
{
    /**
     * Create the database record for this singleton module.
     *
     * @return void
     */
    public function run()
    {
        if (CompanyPage::count() > 0) {
            return;
        }

        app(CompanyPageRepository::class)->create([
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
            'published' => false,
        ]);
    }
}
