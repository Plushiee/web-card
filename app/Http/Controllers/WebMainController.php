<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Exception;

class WebMainController extends Controller
{
    public function main()
    {
        try {
            $instagramProfileInfoResponse = $this->instagram_profile_info();
            $instagramProfileInfo = $instagramProfileInfoResponse->getData();

            \Log::info('Instagram Profile Info:', (array) $instagramProfileInfo);

            $followersCount = $instagramProfileInfo->followersCount ?? '';
            $followingCount = $instagramProfileInfo->followingCount ?? '';
            $postsCount = $instagramProfileInfo->postsCount ?? '';

            return view('home', compact('followersCount', 'followingCount', 'postsCount'));
        } catch (Exception $e) {
            \Log::error('Error pada fungsi main : ' . $e->getMessage());

            return view('home', [
                'followersCount' => '-',
                'followingCount' => '-',
                'postsCount' => '-',
                'error' => $e->getMessage(),
            ]);
        }
    }


    public function instagram_profile_picture()
    {
        try {
            $response = Http::get('https://scontent-sin6-4.cdninstagram.com/v/t51.2885-19/325422530_997582474548063_2116158990505916380_n.jpg?stp=dst-jpg_s150x150&efg=e30&_nc_ht=scontent-sin6-4.cdninstagram.com&_nc_cat=103&_nc_ohc=QMWh5BQfKisAX_8UWV4&edm=ACWDqb8BAAAA&ccb=7-5&oh=00_AfBC_0BKHH4WnUBovrUVhzsf4dBehRoKF5K7-hOB---Tvw&oe=65AB96E0&_nc_sid=ee9879');

            return response($response->body())
                ->header('Content-Type', $response->header('Content-Type'));
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function instagram_profile_info()
    {
        try {
            $response = Http::get('https://www.instagram.com/plushiewhy/');
            $akunInstagram = $response->body();

            // Mencocokkan pola data didapat menggunakan ekspresi reguler
            $pattern = '/<meta property="og:description" content="([\d,]+)\s*Followers,\s*([\d,]+)\s*Following,\s*([\d,]+)\s*Posts/';
            preg_match($pattern, $akunInstagram, $match);

            // Memeriksa apakah data yang diambil sesuai
            if (!$match || count($match) < 4) {
                throw new Exception('Tidak dapat mencari jumalah followers, following, and post');
            }

            // Mendapatkan count follower, following, dan posts
            $followersCount = $match[1];
            $followingCount = $match[2];
            $postsCount = $match[3];

            return response()->json([
                'followersCount' => $followersCount,
                'followingCount' => $followingCount,
                'postsCount' => $postsCount,
            ]);

        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
