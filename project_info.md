# Sadegh Media — Project Info

## Overview
Laravel 13 + Filament 5 demo website for a media team.
Public website + Admin panel with dynamic content management.

## Tech Stack
- Laravel 13
- PHP 8.4+
- MySQL
- Filament 5
- Laragon (local dev)
- PhpStorm
- Git / GitHub

---

## Architecture

### Settings System
- Model: `app/Models/Setting.php`
  - `$guarded = []`
  - Cache invalidation on `saved` / `deleted` via `Cache::forget('settings')`
- Enum: `app/Enums/SettingType.php`
  - 14 cases: Text, Textarea, RichText, Number, Boolean, Email, Url, Phone, Image, Video, File, Icon, Color, Json
  - `label()` method (Persian labels)
  - `options()` static method for Filament Select
- Helper: `app/Helpers/SettingHelper.php`
  - `setting(string $key, $default = null)`
  - Uses `Cache::rememberForever('settings', ...)`
  - Autoloaded via `composer.json` → `"files": ["app/Helpers/SettingHelper.php"]`
- Filament Resource: `app/Filament/Resources/Settings/`
  - `SettingResource.php`
  - `Schemas/SettingForm.php` — dynamic schema based on type (Section + closure-based schema())
  - `Tables/SettingsTable.php`

### Settings Form Pattern (Filament 5)
- `Select::make('type')` with `->live()` + `->afterStateUpdated()` that calls `->fill()` on the dynamic section
- `Section::make('مقدار')->key('dynamicValueField')->schema(fn(Get $get) => match(...))`
- Only ONE component ever built per render — no visible()/hidden() multi-value approach
- All `FileUpload` components MUST have `->disk('public')` — otherwise files go to private disk and return 403

### Key Rule: FileUpload
Every FileUpload that needs to be publicly accessible MUST have:
```php
->disk('public')
```
Without it, Filament uses the default disk (local/private) and files get 403.

### System Setting Keys
| Key | Type | Usage |
|-----|------|-------|
| site_title | text | Homepage h1, footer copyright |
| site_description | textarea | Footer description |
| hero_title | text | Homepage hero p |
| hero_description | textarea | (post-demo) |
| hero_button_text | text | (post-demo) |
| hero_button_url | url | (post-demo) |
| hero_video | video | Homepage background video |
| about_title | text | (available) |
| about_description | textarea | (available) |
| about_text | textarea (HTML) | Homepage about section — rendered with {!! !!} |
| contact_email | email | Footer + contact section |
| contact_phone | phone | Footer + contact section |
| address | text | Footer + contact section |
| instagram | url | Social links |
| telegram | url | Social links |
| linkedin | url | Social links |
| github | url | Social links |

### Models
- `Setting` — key/type/value, cache invalidation
- `TeamMember` — full_name, slug, role_title, bio, avatar, cover_image, is_active, belongs to TeamGroup, User; has many Projects
- `TeamGroup` — has many TeamMembers
- `Service` — title, short_description, icon, is_active, sort_order
- `Stat` — key, title, value, icon (key-based access)
- `Project` — is_featured, published_at

### Filament Resources
- Settings — SettingResource (SettingForm, SettingsTable)
- TeamMembers — TeamMemberForm (avatar/cover_image both with ->disk('public') ->directory('team-members'))
- TeamGroups
- Services
- Stats
- Projects

---

## Frontend

### Layout
- `resources/views/main/layouts/master.blade.php`
- `resources/views/main/partials/header.blade.php` — standalone, no controller needed (uses setting() helper directly)
- `resources/views/main/partials/footer.blade.php` — standalone, no controller needed

### Homepage
- View: `resources/views/main/pages/home.blade.php`
- Controller: `app/Http/Controllers/HomeController.php`
- Route: `GET /` → `HomeController@index`
- `@php use Illuminate\Support\Facades\Storage; @endphp` at top of view

#### Controller passes:
- `$leftServices` / `$rightServices` — Service::where(is_active)->orderBy(sort_order)->get() split at 4
- `$stats` — Stat::all() (Collection, use ->firstWhere('key', '...') in Blade)
- `$teamGroups` — TeamGroup::with(['members.projects'])->orderBy(sort_order)->get()
- `$teamMembers` — TeamMember::where(is_active)->orderBy(full_name)->get()
- `$projects` — Project::where(is_featured)->latest(published_at)->get()

#### Section IDs (for header nav):
| Section | id |
|---|---|
| Hero | `home` |
| About | `about` |
| Team Members | `team` |
| Skills | `skills` |
| Services | `services` |
| Stats | `stats` |
| Contact | `contacts` |

### Important Blade Rules
- Plain text settings: `{{ setting('key') }}`
- HTML settings (e.g. about_text): `{!! setting('key') !!}`
- File/image/video URLs: `{{ Storage::url(setting('key')) }}`
- Team member avatars: `{{ $member->avatar ? Storage::url($member->avatar) : asset('assets/images/default-avatar.png') }}`
- Phone numbers: always add `style="unicode-bidi: plaintext; direction: ltr; white-space: nowrap;"` to avoid RTL rendering issues
- Storage import at top of view: `@php use Illuminate\Support\Facades\Storage; @endphp`

---

## Livewire / Upload Config
- `config/livewire.php` → `temporary_file_upload.rules`: `['required', 'file', 'max:102400']` (100MB)
- `config/livewire.php` → `temporary_file_upload.max_upload_time`: `30` (minutes)
- `php.ini` (Laragon): `upload_max_filesize=100M`, `post_max_size=100M`, `max_execution_time=300`

---

## Coding Guidelines
- Prefer simplicity — no premature optimization
- No unnecessary factories/classes
- One responsibility per file where reasonable
- Always `->disk('public')` on FileUpload
- Commit after each stable milestone
