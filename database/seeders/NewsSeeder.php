<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        \DB::table('categories')
//            ->insert($this->generateCategoryData());

        \DB::table('news')
            ->insert($this->generateNewsData());
    }

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
//        $data = [];
//        $data[] = [
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
