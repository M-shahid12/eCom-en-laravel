<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name' => 'Oppo Mobile ',
                'price' => '200 ',
                'description' => 'A Samart phone with 4gb Ram and much more features ',
                'category' => ' TV ',
                'gallery' => 'https://fdn2.gsmarena.com/vv/pics/oppo/oppo-f17-pro-1.jpg'
            ],
            [
                'name' => 'LG Tv ',
                'price' => '200 ',
                'description' => 'A Samart TV with much more features ',
                'categoery' => ' Mobile ',
                'gallery' => 'https://cdn.thewirecutter.com/wp-content/media/2022/10/lcd-led-tv-2048px-0943-3x2-1.jpg'
            ],
            [
                'name' => 'Sony LCD ',
                'price' => '400',
                'description' => 'A sony LCD with much more features ',
                'categoery' => ' LCD ',
                'gallery' => 'https://www.shutterstock.com/shutterstock/photos/357968483/display_1500/stock-photo--k-monitor-isolated-on-white-357968483.jpg'
            ],
            [
                'name' => 'LG fridge',
                'price' => '700 ',
                'description' => 'A LG Fridge with much more features ',
                'categoery' => ' Fridge ',
                'gallery' => 'https://cdn4.vectorstock.com/i/1000x1000/75/43/modern-fridge-freezer-refrigerator-vector-23027543.jpg'
            ]


        ]);
    }
}
