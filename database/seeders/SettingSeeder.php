<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    public function run(): void
    {
        $settings = [

            // General
            ['key' => 'site_title', 'value' => 'Sadegh Media', 'type' => 'text'],
            ['key' => 'site_description', 'value' => 'Creative Digital Agency', 'type' => 'textarea'],

            // Hero
            ['key' => 'hero_title', 'value' => 'ما ایده‌ها را به واقعیت تبدیل می‌کنیم', 'type' => 'text'],
            ['key' => 'hero_description', 'value' => 'تیم ما با تجربه و خلاقیت، بهترین راهکارهای دیجیتال را برای رشد کسب‌وکار شما ارائه می‌دهد.', 'type' => 'textarea'],
            ['key' => 'hero_button_text', 'value' => 'مشاهده خدمات', 'type' => 'text'],
            ['key' => 'hero_button_url', 'value' => '#services', 'type' => 'url'],
            ['key' => 'hero_video', 'value' => '', 'type' => 'video'],

            // About
            ['key' => 'about_title', 'value' => 'درباره ما', 'type' => 'text'],
            ['key' => 'about_description', 'value' => 'ما یک تیم متخصص در زمینه طراحی، توسعه و تولید محتوای دیجیتال هستیم.', 'type' => 'textarea'],

            // Contact
            ['key' => 'contact_email', 'value' => 'info@example.com', 'type' => 'email'],
            ['key' => 'contact_phone', 'value' => '+98 912 000 0000', 'type' => 'phone'],

            // Social
            ['key' => 'instagram', 'value' => 'https://instagram.com/', 'type' => 'url'],
            ['key' => 'telegram', 'value' => 'https://t.me/', 'type' => 'url'],
            ['key' => 'linkedin', 'value' => 'https://linkedin.com/', 'type' => 'url'],
            ['key' => 'github', 'value' => 'https://github.com/', 'type' => 'url'],

        ];

        foreach ($settings as $setting) {
            Setting::updateOrCreate(
                ['key' => $setting['key']],
                $setting
            );
        }
    }
}
