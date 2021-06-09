<?php

namespace Database\Seeders;

use Faker\Generator;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /** @var Generator */
    protected $faker;

    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run(Generator $faker) {
        $this->faker = $faker;

        \DB::table('news')
            ->insert($this->generateData());
    }

    protected function generateData() {
        $data = [];
        $data[] = [
            'title' => $this->faker->unique()->word,
            'content' => $this->faker->text(200),
            'category' => rand(1, 3),
            'source' => $this->faker->domainName,
            'published' => $this->faker->date('Y-m-d'),
            'created_at' => now(),
            'updated_at' => now(),
        ];
        return $data;
    }

//    public function run()
//    {
////        \DB::table('categories')
////            ->insert($this->generateCategoryData());
//
//        \DB::table('news')
//            ->insert($this->generateNewsData());
//    }

    protected function generateCategoryData() {
        $data = [
//            'name' => 'Интриги',
//            'name' => 'Скандалы',
            'name' => 'Расследования',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        return $data;
    }

    protected function generateNewsData() {
        $data = [
            'title' => 'Test news '  . uniqid(),
            'content' => 'Etiam posuere quam ac quam. Maecenas aliquet accumsan leo.',
            'category' => rand(1, 3),
            'source' => 'ya.ru',
            'published' => date('Y-m-d'),
            'created_at' => now(),
            'updated_at' => now(),
        ];
        return $data;
    }
}
