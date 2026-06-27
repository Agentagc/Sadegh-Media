<?php

use App\Models\Setting;
use Illuminate\Support\Facades\Cache;

if (! function_exists('setting')) {
    function setting(string $key, $default = null)
    {
        $settings = Cache::rememberForever('settings', function () {
            return Setting::query()
                ->pluck('value', 'key')
                ->toArray();
        });

        return $settings[$key] ?? $default;
    }
}
