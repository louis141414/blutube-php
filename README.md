# Blutube (PHP + MySQL)

YouTube-style video platform for **InfinityFree** (or any PHP + MySQL host).

## Features

- User accounts: register, login, logout
- Roles: `user` and `admin`
- Videos by public MP4 URL (no file upload needed)
- Watch page: player, views, likes, subscribe, comments
- Search, Trending, Subscriptions, History, Channel pages
- Studio: publish / delete your videos
- Admin panel: stats, ban/promote users, hide/delete videos
- CSRF protection, password hashing, prepared statements

## InfinityFree setup

### 1. Create the database

In InfinityFree control panel you already have:

| Setting   | Value                      |
|-----------|----------------------------|
| Host      | `sql307.infinityfree.com`  |
| Port      | `3306`                     |
| Database  | `if0_43009643_blutube`     |
| Username  | `if0_43009643`             |
| Password  | *(your password)*          |

Open **phpMyAdmin** → select database `if0_43009643_blutube` → **SQL** tab → paste the entire contents of `install.sql` → Go.

### 2. Upload the site

Upload **all files** from this folder into your site’s `htdocs` (or public_html) directory.

### 3. Config

`config.php` is already filled with your InfinityFree credentials.

### 4. Default admin

After running `install.sql`:

- **Username:** `admin`
- **Password:** `admin123`

Log in immediately and change the password.

### 5. Test

1. Open your site URL
2. Log in as admin
3. Home should show seed videos
4. Studio → paste any public `https://...mp4` URL
5. Admin → manage users / videos
