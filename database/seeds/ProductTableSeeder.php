<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \Illuminate\Support\Facades\DB::table('products')->truncate();
        \Illuminate\Support\Facades\DB::table('products')->insert([
            [
                'id' => '1',
                'name' => 'Banh mi',
                'description' => 'ngon',
                'price' => '50000',
                'categoryId' => '1',
                'image' => 'https://thevietvegan.com/wp-content/uploads/2017/09/Vegan-lemongrass-beef-banh-mi-8078-728x910.jpg'
            ],
            [
                'id' => '2',
                'name' => 'Sinh to dua hau',
                'description' => 'ngon',
                'price' => '50000',
                'categoryId' => '4',
                'image' => 'https://giadinh.tv/wp-content/uploads/2017/06/sinh-to-dua-hau-sua-chua.jpg'
            ],
            [
                'id' => '3',
                'name' => 'sinh to bo',
                'description' => 'ngon',
                'price' => '50000',
                'categoryId' => '4',
                'image' => 'http://traicay4u.vn/wp-content/uploads/2017/01/cach-lam-sinh-to-bo-mat-ong-va-chuoi.jpg'
            ],
            [
                'id' => '4',
                'name' => 'Tra chanh ',
                'description' => 'ngon',
                'price' => '50000',
                'categoryId' => '4',
                'image' => 'https://dantricdn.com/2018/5/22/img20180507095632528-533d6-1526967468033160075851.jpg'
            ],
            [
                'id' => '5',
                'name' => 'Tra da',
                'description' => 'ngon',
                'price' => '50000',
                'categoryId' => '4',
                'image' => 'https://anh.24h.com.vn//upload/4-2016/images/2016-10-13/1476353970-thumbnail.jpg'
            ],
            [
                'id' => '6',
                'name' => 'tra dao',
                'description' => 'ngon',
                'price' => '50000',
                'categoryId' => '4',
                'image' => 'https://danang.huongnghiepaau.com/images/dayphache/tra-dao.jpg'
            ],
            [
                'id' => '7',
                'name' => 'Bobabop',
                'description' => 'ngon',
                'price' => '50000',
                'categoryId' => '3',
                'image' => 'https://static.bandodiadiem.com/wp-content/uploads/2018/01/Tr%C3%A0-S%E1%BB%AFa-Bobapop-Nguyen-Thi-Minh-Khai-1.jpg'
            ],
            [
                'id' => '8',
                'name' => 'ca phe',
                'description' => 'ngon',
                'price' => '50000',
                'categoryId' => '2',
                'image' => 'https://c.tribune.com.pk/2018/04/1688067-pphotcoffeerfistockx-1523983605-649-640x480.jpg'
            ],
            [
                'id' => '9',
                'name' => 'Banh su kem',
                'description' => 'ngon',
                'price' => '50000',
                'categoryId' => '1',
                'image' => 'https://ameovat.com/wp-content/uploads/2016/04/cach-lam-banh-su-kem.jpg'
            ],
            [
                'id' => '10',
                'name' => 'Banh mat',
                'description' => 'ngon',
                'price' => '50000',
                'categoryId' => '1',
                'image' => 'http://lambanh365.com/wp-content/uploads/2015/06/cach-lam-banh-mat-don-gian-hap-dan-1.jpg'
            ],
            [
                'id' => '11',
                'name' => 'Banh bot loc',
                'description' => 'ngon',
                'price' => '50000',
                'categoryId' => '1',
                'image' => 'https://daylambanh.edu.vn/images/congthuclambanh/cach-lam-banh-bot-loc-ha-noi.jpg'
            ],
            [
                'id' => '12',
                'name' => 'Banh U',
                'description' => 'ngon',
                'price' => '50000',
                'categoryId' => '1',
                'image' => 'https://anh.eva.vn/upload/1-2017/images/2017-01-18/banh-u-cach-lam-banh-u-11-1484728492-width500height375.jpg'
            ],
            [
                'id' => '13',
                'name' => 'Banh chay',
                'description' => 'ngon',
                'price' => '50000',
                'categoryId' => '1',
                'image' => 'https://anh.eva.vn/upload/1-2017/images/2017-03-29/cach-lam-banh-troi-banh-chay-cach-lam-banh-troi-banh-chay-14-1490776819-width500height375.jpg'
            ],
            [
                'id' => '14',
                'name' => 'Banh troi',
                'description' => 'ngon',
                'price' => '50000',
                'categoryId' => '1',
                'image' => 'https://media.cooky.vn/recipe/g2/13143/s400x400/recipe13143-635957115018063867.jpg'
            ],
            [
                'id' => '15',
                'name' => 'Banh Chung',
                'description' => 'ngon',
                'price' => '50000',
                'categoryId' => '1',
                'image' => 'https://vnn-imgs-f.vgcloud.vn/2018/02/17/11/nhung-nguoi-khong-nen-an-banh-chung-ngay-tet-9.jpg'
            ],
            [
                'id' => '16',
                'name' => 'Banh bo',
                'description' => 'ngon',
                'price' => '50000',
                'categoryId' => '1',
                'image' => 'https://images.foody.vn/res/g18/179707/prof/s576x330/foody-mobile-cach-lam-banh-bo-hap-151-635815595922975822.jpg'
            ],
            [
                'id' => '17',
                'name' => 'Banh xeo',
                'description' => 'ngon',
                'price' => '50000',
                'categoryId' => '1',
                'image' => 'https://www.bepgiadinh.com/wp-content/uploads/2016/03/30/banh-xeo-1.jpg'
            ],
            [
                'id' => '18',
                'name' => 'Banh bong lan',
                'description' => 'ngon',
                'price' => '50000',
                'categoryId' => '1',
                'image' => 'https://amthucnamchau.org/wp-content/uploads/2017/05/cach-lam-banh-bong-lan-bang-noi-com-dien.jpg'
            ],
            [
                'id' => '19',
                'name' => 'Banh cuon',
                'description' => 'ngon',
                'price' => '50000',
                'categoryId' => '1',
                'image' => 'http://lambanh365.com/wp-content/uploads/2015/04/C%C3%A1ch-l%C3%A0m-b%C3%A1nh-cu%E1%BB%91n-b%E1%BA%B1ng-n%E1%BB%93i-h%C6%A1i-th%C6%A1m-ngon-11.jpg'
            ],
            [
                'id' => '20',
                'name' => 'Banh trang',
                'description' => 'ngon',
                'price' => '50000',
                'categoryId' => '1',
                'image' => 'http://lambanh365.com/wp-content/uploads/2015/05/cach-lam-banh-trang-tron-ngon-tai-nha-3.jpg'
            ]
        ]);
    }
}
