<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name'  => 'Quality Education',
                'icon'  => 'fa-university'
            ],
            [
                'name'  => 'Environment and Hygiene',
                'icon'  => 'fa-tree'
            ],
            [
                'name'  => 'Tourism and Hospitality',
                'icon'  => 'fa-torii-gate'
            ],
            [
                'name'  => 'Media and Communications',
                'icon'  => 'fa-camera'
            ],
            [
                'name'  => 'Gender Equality',
                'icon'  => 'fa-venus-mars'
            ],
            [
                'name'  => 'Youth Innovations',
                'icon'  => 'fa-gear'
            ],
            [
                'name'  => 'Economy',
                'icon'  => 'fa-building'
            ],
            // [
            //     'name'  => 'Society',
            //     'icon'  => 'fa-users'
            // ]
        ];

        foreach($categories as $category) {
            Category::create([
                'name'      => $category['name'],
                'hashtag'   => preg_replace('/\s+/', '', $category['name']),
                'icon'      => $category['icon']
            ]);
        }
    }
}
