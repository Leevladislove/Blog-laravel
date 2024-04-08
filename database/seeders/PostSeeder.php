<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class PostSeeder extends Seeder
{
    public function run()
	{
        DB::table('posts')->insert([
            [
                'title' => 'First seeder',
                'text' => 'Never never lets you go',
                'slug' => 'slug',
                'likes' => random_int(1, 100),
            ],
            [
                'title' => 'Second seeder',
                'text' => 'Never never give me up',
                'slug' => 'slug',
                'likes' => random_int(1, 100),
            ],
        ]);
	}
}
