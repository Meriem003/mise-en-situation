<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;


class ArticleSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('articles')->insert([
            'name' => Str::random(10),
            'desc' => Str::random(10),
            'price'=> Str::random(10),
        ]);
        
}
}