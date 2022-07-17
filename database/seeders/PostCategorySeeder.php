<?php

namespace Database\Seeders;

use App\Models\PostCategory;
use Illuminate\Database\Seeder;

class PostCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        PostCategory::create([
            'name' => 'Edukasi',
            'slugs' => 'edukasi'
        ]);

        PostCategory::create([
            'name' => 'Perkembangan Janin',
            'slugs' => 'perkembangan-janin'
        ]);

        PostCategory::create([
            'name' => 'HPHT',
            'slugs' => 'hpht'
        ]);
    }
}
