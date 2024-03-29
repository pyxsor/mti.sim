<h1 align="center">Sistem Informasi Manajemen MTI 👋</h1>

## Fitur apa saja yang tersedia di SIM MTI?

- Autentikasi Admin & Mahasiswa 
- Role Hak Akses
- User & CRUD
- Jadwal & CRUD
- Kelas & CRUD
- Mata Kuliah & CRUD
- Dosen & CRUD
- Mahasiswa & CRUD
- Transkrip Nilai
- Dan lain-lain

---

## Default Account for testing

**Admin Default Account**

- email: admin@gmail.com
- Password: 12345678

---

## Install

1. **Setup Awal**

```bash
composer install
cp .env.example .env
```

2. **Instalasi website**

```bash
php artisan key:generate
php artisan migrate --seed
```

3. **Jalankan website**

```bash
php artisan serve
```

## Contributing

Repo ini dibuat untuk tugas dan pembelajaran saja yaa!!