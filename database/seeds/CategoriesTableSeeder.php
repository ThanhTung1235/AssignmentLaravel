<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \Illuminate\Support\Facades\DB::table('categories')->truncate();
        \Illuminate\Support\Facades\DB::table('categories')->insert([
            [
                'id' => '1',
                'title' => 'Banh',
                'description' => 'cac loai banh',
                'image' => 'http://www.savourydays.com/wp-content/uploads/2016/12/c%C3%A1ch-l%C3%A0m-b%C3%A1nh-quy-b%C6%A1-danisa-banner.jpg',
            ],
            [
                'id' => '2',
                'title' => 'Do uong',
                'description' => 'cac loai Do uong',
                'image' => 'https://www.webpagedepot.com/images/sitefiles/2017-july/sugarland-cafe-image-3-510.jpg',
            ],
            [
                'id' => '3',
                'title' => 'Tra sua',
                'description' => 'cac loai Tra sua',
                'image' => 'http://www.dendau.vn//custom/photolisting3/fullsize/listing_37358/20131122144214Jz6XAHHB.jpg',
            ],
            [
                'id' => '4',
                'title' => 'sinh to',
                'description' => 'cac loai sinh to',
                'image' => 'http://daotaobepvang.com/wp-content/uploads/sinh-t%E1%BB%91-tr%C3%A1i-c%C3%A2y.jpg',
            ],
            [
                'id' => '5',
                'title' => 'snacks',
                'description' => 'cac loai snacks',
                'image' => 'https://images-na.ssl-images-amazon.com/images/I/9140LD0I2RL._SY355SX354_SY355_CR,0,0,354,355_PIbundle-30,TopRight,0,0_SX354_SY355_CR,0,0,354,355_SH20_.jpg',
            ],


        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
