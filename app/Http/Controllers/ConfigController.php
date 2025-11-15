<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BaseTextConfiguration;
use App\Models\BaseImageConfiguration;
use App\Models\BaseColorConfig;
use App\Models\Profildesa;
use Illuminate\Support\Facades\Cache;
class ConfigController
{
    public function config(Request $request)
    {
        $config = Cache::remember('site_config', now()->addMinutes(30), function () {

            $colors = BaseColorConfig::first();
            $texts = BaseTextConfiguration::first();
            $images = BaseImageConfiguration::first();
            $profile = Profildesa::first();
            return [
                'version' => now()->timestamp,
                'colors' => [
                    'base_color' => $colors->base_color ?? '#ffffff',
                    'pr_color' => $colors->pr_color ?? '#000000',
                    'sec_color' => $colors->sec_color ?? '#cccccc',
                    'third_color' => $colors->third_color ?? '#f8f9fa',
                ],
                'images' => [
                    'logo_path' => $images->logo_full_path ?? '/default-logo.png',
                ],
                'texts' => [
                    'nama_desa' => "Desa ".$texts->nama_desa ?? 'Default',
                    'nama_kecamatan' => "Kecamatan ".$texts->nama_kecamatan ?? 'Kecamatan Default',
                    'tentang_desa'=>$texts->tentang_desa ?? "Data Belum Tersedia",
                    'whatsapp'=>$texts->whatsapp ?? "-",
                    'email'=>$texts->gmail ?? "-",
                    'alamat'=>$texts->alamat ?? "-",
                    'facebook'=>$texts->facebook ?? "-",
                    'instagram'=>$texts->instagram ?? "-",
                    'youtube'=>$profile->link_video_profile ?? "-",
                ],
            ];
        });
        return response()->json($config);

    }
}
