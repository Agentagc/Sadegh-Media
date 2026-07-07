# Sadegh Media — Todo

---

## ✅ Done

- Laravel 13 + Filament 5 setup
- Git repository
- Setting model + enum (14 types) + cache invalidation
- setting() helper (autoloaded via composer.json)
- Dynamic SettingForm (Filament 5 closure-based schema, no visible()/hidden())
- Loading indicator on type change (wire:loading in Section header)
- FileUpload disk fix (->disk('public') on all FileUpload components)
- Livewire upload config (100MB limit, 30min timeout)
- Homepage wired: site_title, hero_title, about_text, hero_video
- Team Members section dynamic (HomeController + @foreach)
- Footer dynamic: contact_email, contact_phone, address, site_description
- Homepage section IDs fixed (home, about, team, skills, services, stats, contacts)
- Header nav links fixed (desktop + mobile)
- Phone number RTL fix (unicode-bidi + direction: ltr)
- MemberRole, MemberAbility, MemberSkill models + migrations
- TeamMember relations: roles(), abilities(), skills()
- TeamMemberForm: Repeaters for roles/abilities/skills
- TeamMemberController + Route (GET /team/{slug} → team.show)
- team-member.blade.php view added (template, not yet dynamic)

---

## 🔄 In Progress

- Team Member detail page — wire $member data to Blade

---

## 🎯 Demo — remaining

- [ ] Team Member detail page dynamic
  - avatar → profile image
  - full_name, role_title → h3 title
  - bio → sidebar description
  - roles → animated titles (cd-words-wrapper)
  - abilities → progress bars (title + percentage)
  - skills → skill cards (icon + percentage + title)
  - contact info → setting('contact_phone'), setting('contact_email')

- [ ] Stats section dynamic (key-based via $stats->firstWhere('key', '...'))
  - years_experience → special card (left side)
  - completed_projects, products, happy_clients, client_reviews → counter cards

---

## ⏸️ Post-Demo

### Settings
- [ ] hero_description wired to homepage
- [ ] hero_button_text + hero_button_url — add button to hero section
- [ ] Social links dynamic (instagram, telegram, linkedin, github in header/footer)

### Admin
- [ ] RelationManagers for TeamMember (roles/abilities/skills) — currently disabled, using Repeaters
- [ ] Roles & Permissions
- [ ] User management

### Validation
- [ ] Required/max size rules per SettingType in SettingForm
- [ ] JSON editor improvement
- [ ] RichEditor styling in frontend

### Optimization
- [ ] Query optimization (N+1 checks)
- [ ] Image optimization / lazy loading
- [ ] Cache strategy review

### Future Features
- [ ] Blog / News module
- [ ] Messaging / Contact form handler (currently posts to external URL)
- [ ] Analytics integration
- [ ] Mobile app consideration
