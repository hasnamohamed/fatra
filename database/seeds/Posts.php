<?php

use Illuminate\Database\Seeder;

class Posts extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Post::create([
            'id'=>1,
            'title'=>'Post For Admin 1',
            'post'=>'Just Admin 1 can edit Me ',
            'user_id'=>1,
        ]);
        \App\Models\Post::create([
            'id'=>2,
            'title'=>'Post For Admin 2',
            'post'=>' Admin 1 and 2 can edit Me Beacuse Admin 1 is a super Admin And admin 2 is created Me ..!',
            'user_id'=>2,
        ]);
    }
}
