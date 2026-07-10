<div align="center">

<img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="300" alt="Laravel Logo">

# 🎬 Sadegh Media

**A media team showcase website — built with Laravel 13 + Filament 5**

[![PHP](https://img.shields.io/badge/PHP-8.4%2B-777BB4?logo=php&logoColor=white)](https://php.net)
[![Laravel](https://img.shields.io/badge/Laravel-13-FF2D20?logo=laravel&logoColor=white)](https://laravel.com)
[![Filament](https://img.shields.io/badge/Filament-5-FDAE4B?logo=filament&logoColor=white)](https://filamentphp.com)
[![MySQL](https://img.shields.io/badge/MySQL-8.0%2B-4479A1?logo=mysql&logoColor=white)](https://mysql.com)
[![License](https://img.shields.io/badge/License-MIT-green.svg)](LICENSE)

[Overview](#-overview) • [Features](#-features) • [Architecture](#-architecture) • [Installation](#-installation) • [Configuration](#-configuration) • [Project Structure](#-project-structure)

</div>

---

> ## ⚡ Zero Code Changes. Fully Dynamic. Ready for Any Brand.
>
> **Every single piece of content — logo, hero video, team members, services, stats, contact info — is managed entirely through the admin panel.**
>
> Want to rebrand it for a different team or company?
> Just log in, update the settings, and you're done.
> **No touching the code. Ever.**

---

## 📖 Overview

**Sadegh Media** is a demo website for showcasing a media team, built with **Laravel 13** and **Filament 5**. It consists of a fully dynamic public-facing website and a complete admin panel for managing all site content — from hero videos to team member skill cards.

The project prioritizes **simplicity and clean architecture** over premature optimization, making it easy to understand, extend, and deploy.

---

## ✨ Features

### Public Website
- **Homepage** with Hero, About, Team Members, Skills, Services, Stats, and Contact sections
- **Individual team member pages** showing roles, abilities, skills, and contact info
- **Fully dynamic content** — all text, images, and videos are editable via the admin panel
- RTL/Persian language support

### Admin Panel (Filament 5)
- **Settings management** with 14 field types (text, image, video, color, JSON, and more)
- **Team member management** with Repeaters for roles, abilities, and skills
- **Team group management**
- **Services, Stats, and Projects** management
- Persian labels throughout the admin UI

### Architecture Highlights
- Cache-first settings system with automatic invalidation
- Dynamic Filament form schema based on setting type
- Global `setting()` helper function — autoloaded via Composer
- File uploads up to 100MB supported

---

## 🏛️ Architecture

### 1. Settings System

One of the core strengths of this project is its flexible, cache-first settings system:

```
Setting (Model)
  ├── key / type / value
  ├── Cache invalidation on save/delete
  └── 14 types via SettingType enum

setting('key', $default)  ←  Global helper (autoloaded)
  └── Cache::rememberForever('settings', ...)
```

Instead of hard-coding text in Blade templates, all site content is stored in the database and cached indefinitely — no extra queries per request, no manual cache management.

### 2. Dynamic Filament Form

The settings form renders the appropriate field based on the selected type — using a single closure-based `Section` schema instead of toggling visibility on multiple fields:

```php
Section::make('Value')
    ->key('dynamicValueField')
    ->schema(fn(Get $get) => match($get('type')) {
        'image'  => [FileUpload::make('value')->disk('public')],
        'video'  => [FileUpload::make('value')->disk('public')],
        'text'   => [TextInput::make('value')],
        'color'  => [ColorPicker::make('value')],
        // ...
    })
```

### 3. Models & Relationships

```
TeamGroup
  └── has many TeamMember
        ├── has many MemberRole
        ├── has many MemberAbility
        ├── has many MemberSkill
        └── has many Project

Setting      Service      Stat
```

### 4. Frontend Data Flow

```
HomeController
  ├── Services   → split into left/right columns
  ├── Stats      → key-based access in Blade
  ├── TeamGroups → with members & projects (eager loaded)
  └── Featured Projects

TeamMemberController
  └── loads member with roles, abilities, skills
```

---

## 🚀 Installation

### Prerequisites

Make sure the following are installed on your machine:

| Tool | Version |
|------|---------|
| PHP | 8.4 or higher |
| Composer | 2.x |
| Node.js | 18.x or higher |
| MySQL | 8.0 or higher |
| Git | Any recent version |

> **Recommended for Windows:** Use [Laragon](https://laragon.org) — it provides PHP, MySQL, and a web server in a single portable package with zero configuration.

---

### Step 1 — Clone the repository

```bash
git clone https://github.com/Agentagc/Sadegh-Media.git
cd Sadegh-Media
```

---

### Step 2 — Install PHP dependencies

```bash
composer install
```

---

### Step 3 — Install JavaScript dependencies

```bash
npm install
```

---

### Step 4 — Set up your `.env` file

Copy the example environment file:

```bash
cp .env.example .env
```

Open `.env` and update the following values:

```env
APP_NAME="Sadegh Media"
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=sadegh_media
DB_USERNAME=root
DB_PASSWORD=
```

> If you're using Laragon, the default credentials are `root` with an empty password.

---

### Step 5 — Generate the application key

```bash
php artisan key:generate
```

---

### Step 6 — Create the database

In MySQL, create a new database:

```sql
CREATE DATABASE sadegh_media CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
```

Then run the migrations:

```bash
php artisan migrate
```

---

### Step 7 — Create the storage symlink

```bash
php artisan storage:link
```

This makes uploaded files (images, videos) publicly accessible in the browser.

---

### Step 8 — Create an admin user

```bash
php artisan make:filament-user
```

Enter your name, email, and password when prompted.

---

### Step 9 — Build frontend assets

For local development (with hot reload):

```bash
npm run dev
```

For production:

```bash
npm run build
```

---

### Step 10 — Start the development server

```bash
php artisan serve
```

The site is now live at **http://localhost:8000**

Admin panel: **http://localhost:8000/admin**

---

### ✅ Quick Checklist

```
 □  composer install          ✓
 □  npm install               ✓
 □  .env configured           ✓
 □  php artisan key:generate  ✓
 □  database created          ✓
 □  php artisan migrate       ✓
 □  php artisan storage:link  ✓
 □  admin user created        ✓
 □  npm run dev / build       ✓
 □  php artisan serve         ✓
```

---

## ⚙️ Configuration

### Large File Uploads (Optional)

To support uploading heavy videos, update your `php.ini` (Laragon path: `C:\laragon\bin\php\phpX.X\php.ini`):

```ini
upload_max_filesize = 100M
post_max_size = 100M
max_execution_time = 300
```

These values are already configured in `config/livewire.php`:

```php
'temporary_file_upload' => [
    'rules'           => ['required', 'file', 'max:102400'], // 100MB
    'max_upload_time' => 30,                                  // minutes
],
```

### Managing Content via Admin Panel

After logging in at `/admin`, go to **Settings** to manage all site content:

| Key | Type | Used In |
|-----|------|---------|
| `site_title` | text | Homepage h1, footer copyright |
| `site_description` | textarea | Footer description |
| `hero_title` | text | Hero section |
| `hero_video` | video | Hero background video |
| `about_text` | textarea (HTML) | About section |
| `contact_email` | email | Footer + contact section |
| `contact_phone` | phone | Footer + contact section |
| `address` | text | Footer + contact section |
| `instagram` | url | Social links |
| `telegram` | url | Social links |
| `linkedin` | url | Social links |
| `github` | url | Social links |

---

## 📁 Project Structure

```
Sadegh-Media/
├── app/
│   ├── Enums/
│   │   └── SettingType.php          # 14 setting types
│   ├── Filament/
│   │   └── Resources/
│   │       ├── Settings/            # Dynamic settings management
│   │       ├── TeamMemberResource/  # Team member CRUD + Repeaters
│   │       ├── TeamGroupResource/
│   │       ├── ServiceResource/
│   │       ├── StatResource/
│   │       └── ProjectResource/
│   ├── Helpers/
│   │   └── SettingHelper.php        # Global setting() function
│   ├── Http/Controllers/
│   │   ├── HomeController.php
│   │   └── TeamMemberController.php
│   └── Models/
│       ├── Setting.php
│       ├── TeamMember.php
│       ├── TeamGroup.php
│       ├── MemberRole.php
│       ├── MemberAbility.php
│       ├── MemberSkill.php
│       ├── Service.php
│       ├── Stat.php
│       └── Project.php
├── resources/views/
│   └── main/
│       ├── layouts/master.blade.php
│       ├── partials/
│       │   ├── header.blade.php
│       │   └── footer.blade.php
│       └── pages/
│           ├── home.blade.php
│           └── team-member.blade.php
├── routes/web.php
├── .env.example
└── README.md
```

---

## 🔑 Developer Notes

### FileUpload Rule
Every `FileUpload` component that needs to be publicly accessible **must** include `->disk('public')`:

```php
// ✅ Correct
FileUpload::make('avatar')->disk('public')

// ❌ Wrong — file goes to private disk and returns 403
FileUpload::make('avatar')
```

### Using `setting()` in Blade

```blade
{{-- Plain text --}}
{{ setting('site_title') }}

{{-- HTML content --}}
{!! setting('about_text') !!}

{{-- File / image / video URL --}}
{{ Storage::url(setting('hero_video')) }}

{{-- With a fallback default --}}
{{ setting('contact_phone', '—') }}
```

### Phone Numbers in RTL Layouts
Always wrap phone numbers with this style to prevent incorrect RTL rendering:

```blade
<span style="unicode-bidi: plaintext; direction: ltr; white-space: nowrap;">
    {{ setting('contact_phone') }}
</span>
```

---

## 🛣️ Roadmap

See [Project-RoadMap.md](Project-RoadMap.md) for the full development phases.

### Post-Demo
- [ ] Dynamic social links in header/footer
- [ ] Roles & Permissions system
- [ ] User management
- [ ] N+1 query optimization
- [ ] Image optimization / lazy loading

### Future Features
- [ ] Blog / News module
- [ ] Contact form handler
- [ ] Member personal dashboard
- [ ] Analytics integration
- [ ] Mobile application / API

---

## 🧰 Tech Stack

| Tool | Version | Purpose |
|------|---------|---------|
| [Laravel](https://laravel.com) | 13 | Backend framework |
| [Filament](https://filamentphp.com) | 5 | Admin panel |
| [PHP](https://php.net) | 8.4+ | Language |
| [MySQL](https://mysql.com) | 8.0+ | Database |
| [Vite](https://vitejs.dev) | — | Frontend build tool |
| [Laragon](https://laragon.org) | — | Local dev environment |

---

## 📄 License

This project is open-source and available under the [MIT License](https://opensource.org/licenses/MIT).

---

<div align="center">

Built with ❤️ by [Agentagc](https://github.com/Agentagc)

</div>
