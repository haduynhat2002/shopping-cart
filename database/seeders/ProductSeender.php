<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeender extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('products')->truncate();
        DB::table('products')->insert([
            [
                'id' => 1,
                'name' => 'ao choang',
                'price' => '50000',
                'thumbnail' => 'https://aothudong.com/upload/product/atd-251/ao-khoac-gio-nam-cao-cap-2020.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 2,
                'name' => 'ao len',
                'price' => '50000',
                'thumbnail' => 'https://aothudong.com/upload/product/atd-251/ao-khoac-gio-nam-cao-cap-2020.jpg',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now(),
            ],
            [
                'id' => 3,
                'name' => 'ao mua',
                'price' => '50000',
                'thumbnail' => 'https://aothudong.com/upload/product/atd-251/ao-khoac-gio-nam-cao-cap-2020.jpg',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now(),
            ],
            [
                'id' => 4,
                'name' => 'ao so mi',
                'price' => '50000',
                'thumbnail' => 'https://aothudong.com/upload/product/atd-251/ao-khoac-gio-nam-cao-cap-2020.jpg',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now(),
            ],
            [
                'id' => 5,
                'name' => 'ao thu dong',
                'price' => '50000',
                'thumbnail' => 'https://aothudong.com/upload/product/atd-251/ao-khoac-gio-nam-cao-cap-2020.jpg',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now(),
            ],
            [
                'id' => 6,
                'name' => 'ao ngan',
                'price' => '50000',
                'thumbnail' => 'https://aothudong.com/upload/product/atd-251/ao-khoac-gio-nam-cao-cap-2020.jpg',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now(),
            ],
            [
                'id' => 7,
                'name' => 'ao dai',
                'price' => '50000',
                'thumbnail' => 'https://aothudong.com/upload/product/atd-251/ao-khoac-gio-nam-cao-cap-2020.jpg',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now(),
            ],
            [
                'id' => 8,
                'name' => 'ao nua',
                'price' => '50000',
                'thumbnail' => 'https://aothudong.com/upload/product/atd-251/ao-khoac-gio-nam-cao-cap-2020.jpg',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now(),
            ],
            [
                'id' => 9,
                'name' => 'ao nam',
                'price' => '50000',
                'thumbnail' => 'https://aothudong.com/upload/product/atd-251/ao-khoac-gio-nam-cao-cap-2020.jpg',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now(),
            ],
            [
                'id' => 10,
                'name' => 'ao khoac',
                'price' => '50000',
                'thumbnail' => 'https://aothudong.com/upload/product/atd-251/ao-khoac-gio-nam-cao-cap-2020.jpg',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now(),
            ],
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
