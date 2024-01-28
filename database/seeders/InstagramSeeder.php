<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class InstagramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('instagrams_tables')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'username' => 'PlushieWhy',
            'posts' => 49,
            'follower' => 362,
            'following' => 161,
            'pfp' => "https://scontent.cdninstagram.com/v/t51.2885-19/325422530_997582474548063_2116158990505916380_n.jpg?stp=dst-jpg_s100x100&_nc_cat=109&ccb=1-7&_nc_sid=3fd06f&_nc_ohc=2E4b1_HbuGkAX8IiwzP&_nc_ht=scontent.cdninstagram.com&oh=00_AfBM3Ah-yjxpSNgmjG17pVY0OUOHe6mJ96s_DLzZ_jRilg&oe=65BB68E0",
        ]);
    }
}
