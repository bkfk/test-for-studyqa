<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SectionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('sections')->insert([
          'view_name' => '_header',
          'content' => '<h1>Заголовок страницы</h1>',
      ]);

      DB::table('sections')->insert([
          'view_name' => '_text_img',
          'content' => '<h4>Website Design Service</h4><p class="lead">Quisque eget nisl id nulla quis id. Aliquam quis vehicula enim, non aliquam risus. Sed a tellus quis mi rhoncus dignissim.</p><p> Integer rutrum ligula eu dignissim laoreet. Pellentesque venenatis nibh sed tellus faucibus bibendum. Sed fermentum est vitae rhoncus molestie. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed vitae rutrum neque. Ut id erat sit amet libero bibendum aliquam. Donec ac egestas libero, eu bibendum risus. Phasellus et congue justo.</p>',
          'images' => collect([['src' => asset('img/1000x600.jpg'), 'alt' => 'default image'],]),
      ]);

      DB::table('sections')->insert([
          'view_name' => '_galery',
          'images' => collect([
            [
              'src' => asset('img/1000x600.jpg'),
              'alt' => 'default image 1'
            ],
            [
              'src' => asset('img/600x600.jpg'),
              'alt' => 'default image 2'
            ],
            [
              'src' => asset('img/800x500.jpg'),
              'alt' => 'default image 3'
            ],
          ]),
      ]);
    }
}
