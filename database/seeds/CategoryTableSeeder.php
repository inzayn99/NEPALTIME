<?php

use Illuminate\Database\Seeder;
use App\Models\Category\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $categoryData = [
            ['cate_name' => 'Politics', 'slug' => 'Politics', 'posted_by' => 1],
            ['cate_name' => 'International', 'slug' => 'International', 'posted_by' => 1],
            ['cate_name' => 'Finance', 'slug' => 'Finance', 'posted_by' => 1],
            ['cate_name' => 'Health care', 'slug' => 'Health care', 'posted_by' => 1],
            ['cate_name' => 'Technology', 'slug' => 'Technology', 'posted_by' => 1],
            ['cate_name' => 'Jobs', 'slug' => 'Jobs', 'posted_by' => 1],
            ['cate_name' => 'Media', 'slug' => 'Media', 'posted_by' => 1],
            ['cate_name' => 'Administration', 'slug' => 'Administration', 'posted_by' => 1],
            ['cate_name' => 'Sports', 'slug' => 'Sports', 'posted_by' => 1],
            ['cate_name' => 'Game', 'slug' => 'Game', 'posted_by' => 1],
            ['cate_name' => 'Art', 'slug' => 'Art', 'posted_by' => 1],
            ['cate_name' => 'Kids', 'slug' => 'Kids', 'posted_by' => 1],


        ];

        foreach ($categoryData as $cat) {
            Category::create($cat);
        }
    }
}
