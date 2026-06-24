<?php

namespace Database\Seeders;

use App\Models\Service;
use App\Models\Stat;
use Illuminate\Database\Seeder;

class SiteSeeder extends Seeder
{
    public function run(): void
    {
        Service::insert([
            [
                'title' => 'تولید محتوا',
                'short_description' => 'تولید محتوای حرفه‌ای برای برندها',
                'icon' => 'fa-video',
                'sort_order' => 1,
            ],
            [
                'title' => 'مدیریت شبکه‌های اجتماعی',
                'short_description' => 'مدیریت و رشد شبکه‌های اجتماعی',
                'icon' => 'fa-instagram',
                'sort_order' => 2,
            ],
        ]);

        Stat::insert([
            [
                'key' => 'projects',
                'title' => 'پروژه موفق',
                'value' => '120',
            ],
            [
                'key' => 'clients',
                'title' => 'مشتری',
                'value' => '45',
            ],
        ]);
    }
}
