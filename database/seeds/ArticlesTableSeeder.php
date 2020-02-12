<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            [
                'title' => 'title1',
                'body' => 'contents1'
                ],
            [
                'title' => 'title2',
                'body' => 'contents2'
                ],
            [
                'title' => 'title3',
                'body' => 'contents3'
                ]
        ]);
    }
}
