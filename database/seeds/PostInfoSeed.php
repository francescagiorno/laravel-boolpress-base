<?php

use Illuminate\Database\Seeder;
use App\posts_info;
class PostsInfoSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(App\posts_info::class, 200)->create()->each(
      function ($el){
      $el->save();
      }
      );
    }
}