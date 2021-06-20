<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            [
                'name' => 'Ngoc',
                'tag' => '12121',
                'content' => 'HN',
                'category_id' => 1
            ],
            [
                'name' => 'Ng12121',
                'tag' => '121',
                'content' => 'HNeqewqeq',
                'category_id' => 2
            ],
        ]);
    }
}
