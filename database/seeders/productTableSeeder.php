<?php

namespace Database\Seeders;
 
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class productTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product')->insert (
            [
                'name'=>"Iphone 12 pro max",
                'image'=>"http://maccenter.vn/MacFamily/iPhone13-Pro-2021.jpg",
                "description"=> "Bán chạy",
                "quantity"=> 11,
                "cate_id"=>1,
            ],
            [
                'name'=>"Iphone 12 pro max",
                'image'=>"http://maccenter.vn/MacFamily/iPhone13-Pro-2021.jpg",
                "description"=> "Bán chạy sương sương",
                "quantity"=> 12,
                "cate_id"=>2,

            ],
            [
                'name'=>"Iphone 13 pro max",
                'image'=>"http://maccenter.vn/MacFamily/iPhone13-Pro-2021.jpg",
                "description"=> "Bán chạy nhất",
                "quantity"=> 13,
                "cate_id"=>3,

            ]
            );
    }
}
