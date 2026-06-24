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
                'title' => 'فیلمبرداری',
                'short_description' => 'تولید و ضبط ویدیوهای حرفه‌ای تبلیغاتی',
                'icon' => 'fa-video',
                'sort_order' => 1,
            ],
            [
                'title' => 'عکاسی',
                'short_description' => 'عکاسی صنعتی، تبلیغاتی و پرتره',
                'icon' => 'fa-camera',
                'sort_order' => 2,
            ],
            [
                'title' => 'تدوین ویدیو',
                'short_description' => 'تدوین حرفه‌ای برای شبکه‌های اجتماعی',
                'icon' => 'fa-film',
                'sort_order' => 3,
            ],
            [
                'title' => 'طراحی گرافیک',
                'short_description' => 'طراحی بنر، پوستر و هویت بصری',
                'icon' => 'fa-palette',
                'sort_order' => 4,
            ],
            [
                'title' => 'مدیریت شبکه‌های اجتماعی',
                'short_description' => 'مدیریت و برنامه‌ریزی محتوای صفحات',
                'icon' => 'fa-hashtag',
                'sort_order' => 5,
            ],
            [
                'title' => 'تبلیغات دیجیتال',
                'short_description' => 'اجرای کمپین‌های تبلیغاتی آنلاین',
                'icon' => 'fa-bullhorn',
                'sort_order' => 6,
            ],
            [
                'title' => 'برندینگ',
                'short_description' => 'ساخت و توسعه هویت برند',
                'icon' => 'fa-award',
                'sort_order' => 7,
            ],
            [
                'title' => 'مشاوره رسانه',
                'short_description' => 'مشاوره تخصصی در حوزه رسانه و محتوا',
                'icon' => 'fa-lightbulb',
                'sort_order' => 8,
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
