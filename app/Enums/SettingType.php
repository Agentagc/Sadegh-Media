<?php

namespace App\Enums;

enum SettingType: string
{
    case Text = 'text';
    case Textarea = 'textarea';
    case RichText = 'rich_text';
    case Number = 'number';
    case Boolean = 'boolean';
    case Email = 'email';
    case Url = 'url';
    case Phone = 'phone';
    case Image = 'image';
    case Video = 'video';
    case File = 'file';
    case Icon = 'icon';
    case Color = 'color';
    case Json = 'json';

    public function label(): string
    {
        return match ($this) {
            self::Text => 'متن کوتاه',
            self::Textarea => 'متن بلند',
            self::RichText => 'ویرایشگر پیشرفته',
            self::Number => 'عدد',
            self::Boolean => 'بله / خیر',
            self::Email => 'ایمیل',
            self::Url => 'لینک',
            self::Phone => 'شماره تلفن',
            self::Image => 'تصویر',
            self::Video => 'ویدیو',
            self::File => 'فایل',
            self::Icon => 'آیکون',
            self::Color => 'رنگ',
            self::Json => 'داده JSON',
        };
    }

    public static function options(): array
    {
        return collect(self::cases())
            ->mapWithKeys(fn (self $type) => [
                $type->value => $type->label(),
            ])
            ->toArray();
    }
}
