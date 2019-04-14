<?php

use App\SlideShow;
use App\Photo;
use Illuminate\Database\Seeder;

class SlideShowSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //slider1
        $photo= Photo::create([
            'file'=>'slide/slide1.jpg'
        ]);
        $slide = SlideShow::create([
            'slide_name'=>'slide1',
            'order'=>'1',
            'photo_id'=>'14',
        ]);

        //slider2
        $photo= Photo::create([
            'file'=>'slide/slide2.jpg'
        ]);
        $slide = SlideShow::create([
            'slide_name'=>'slide2',
            'order'=>'2',
            'photo_id'=>'15',
        ]);

        //slider3
        $photo= Photo::create([
            'file'=>'slide/slide3.jpg'
        ]);
        $slide = SlideShow::create([
            'slide_name'=>'slide3',
            'order'=>'3',
            'photo_id'=>'16',
        ]);
    }
}
