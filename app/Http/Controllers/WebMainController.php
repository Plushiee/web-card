<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\InstagramModel;
use Carbon\Carbon;
use Exception;

class WebMainController extends Controller
{
    public function main()
    {
        // try {
        //     $instagramProfileInfoResponse = $this->instagram_profile_info();
        //     $instagramProfileInfo = $instagramProfileInfoResponse->getData();

        //     \Log::info('Instagram Profile Info:', (array) $instagramProfileInfo);

        //     $followersCount = $instagramProfileInfo->followersCount ?? '';
        //     $followingCount = $instagramProfileInfo->followingCount ?? '';
        //     $postsCount = $instagramProfileInfo->postsCount ?? '';
        //     $profilePictureUrl = $instagramProfileInfo->profilePictureUrl ?? '';

        //     return view('home', compact('followersCount', 'followingCount', 'postsCount', 'profilePictureUrl'));
        // } catch (Exception $e) {
        //     \Log::error('Error pada fungsi main : ' . $e->getMessage());

            return view('home', [
                'followersCount' => '-',
                'followingCount' => '-',
                'postsCount' => '-',
                'profilePictureUrl' => '-'
                // 'error' => $e->getMessage(),
            ]);
        // }
    }

    public function map()
    {
        return view('map');
    }

    public function getMap()
    {
        $targetUrl = 'https://api.plushiee.my.id/get-minecraft-map/';

        return Redirect::away($targetUrl);
    }

    public function instagram_profile_info()
    {
        try {
            // Ambil data dari database
            $instagramData = InstagramModel::first(); // Ubah sesuai dengan model dan kondisi Anda
            $lastUpdatedAt = $instagramData->updated_at;

            // Periksa apakah data perlu diperbarui
            if ($lastUpdatedAt && $lastUpdatedAt->diffInHours(Carbon::now()) < 24) {
                // Jika waktu belum melebihi 24 jam, kembalikan data dari database
                \Log::warning('Belum 24 Jam!');
                return response()->json([
                    'followersCount' => $instagramData->follower,
                    'followingCount' => $instagramData->following,
                    'postsCount' => $instagramData->posts,
                    'profilePictureUrl' => $instagramData->pfp,
                ]);
            }

            $response = Http::get('https://www.instagram.com/plushiewhy/');
            $akunInstagram = $response->body();

            // Mencocokkan pola data didapat menggunakan ekspresi reguler
            $pattern = '/<meta property="og:description" content="([\d,]+)\s*Followers,\s*([\d,]+)\s*Following,\s*([\d,]+)\s*Posts/';
            preg_match($pattern, $akunInstagram, $match);

            // Memeriksa apakah data yang diambil sesuai
            if (!$match || count($match) < 4) {
                \Log::warning('Tidak dapat mencari jumalah followers, following, and post terbaru');
                $instagramData->update([
                    'follower' => $instagramData->follower,
                    'following' => $instagramData->following,
                    'posts' => $instagramData->posts,
                    'pfp' => $instagramData->pfp,
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s') 
                ]);
                    
                return response()->json([
                    'followersCount' => $instagramData->follower,
                    'followingCount' => $instagramData->following,
                    'postsCount' => $instagramData->posts,
                    'profilePictureUrl' => $instagramData->pfp,
                ]);
            }

            // Mendapatkan count follower, following, dan posts
            $followersCount = $match[1];
            $followingCount = $match[2];
            $postsCount = $match[3];

            // Profile Picture
            $profilePicturePattern = '/<meta property="og:image" content="([^"]+)"/';
            preg_match($profilePicturePattern, $akunInstagram, $pictureMatch);

            // Memeriksa apakah URL gambar profil ditemukan
            if (!$pictureMatch || count($pictureMatch) < 2) {
                throw new Exception('Tidak dapat menemukan URL gambar profil');
            }

            // Mendapatkan URL gambar profil
            $profilePictureUrl = html_entity_decode($pictureMatch[1]);

            \Log::info('Instagram PFP Link:' . $profilePictureUrl);

            $instagramData->update([
                'follower' => $followersCount,
                'following' => $followingCount,
                'posts' => $postsCount,
                'pfp' => $profilePictureUrl,
            ]);

            return response()->json([
                'followersCount' => $followersCount,
                'followingCount' => $followingCount,
                'postsCount' => $postsCount,
                'profilePictureUrl' => $profilePictureUrl,
            ]);

        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
