# TugasWeb-P10-BlogCRUD

Tugas Rutin 10 - Blog CRUD Laravel

## Langkah Install
1. Clone repo ini
2. Jalankan `composer install`
3. Copy file `.env.example` menjadi `.env`
4. Buat database baru, sesuaikan nama database di file `.env`
5. Jalankan `php artisan key:generate`
6. Jalankan `php artisan migrate`
7. Jalankan `php artisan serve`
8. Buka browser ke `http://127.0.0.1:8000/posts`

## Fitur
- CRUD lengkap untuk data Post (Create, Read, Update, Delete)
- Resource Controller dengan Route::resource
- Route Model Binding
- Validasi form dengan pesan error per field dan old input
- Flash message sukses/gagal
- Pagination
- Komponen Blade (Alert & Card)
- Layout master dengan @extends/@yield

## Struktur Folder Penting
- `app/Http/Controllers/PostController.php` — logic CRUD
- `app/Models/Post.php` — model data Post
- `database/migrations` — struktur tabel posts
- `resources/views/layouts/app.blade.php` — layout master
- `resources/views/components` — komponen Alert & Card
- `resources/views/posts` — view index, create, edit, show
- `routes/web.php` — Route::resource('posts', PostController::class)