# 📚 MardekaLiterasi

MardekaLiterasi adalah aplikasi berbasis **Laravel** yang dijalankan menggunakan **Docker**.
Project ini bertujuan untuk mempermudah pengelolaan literasi seperti peminjaman buku, anggota, dan admin.

---

## 🚀 Teknologi yang Digunakan

* ⚙️ Laravel (PHP Framework)
* 🐳 Docker
* 🌐 Nginx
* 🗄️ MySQL
* 📊 phpMyAdmin

---

## 📂 Struktur Project

```
MardekaLiterasi/
│
├── docker-compose.yml
├── nginx/
│   └── default.conf
└── mardekaliterasi/
    ├── app/
    ├── routes/
    ├── public/
    └── ...
```

---

## ⚙️ Cara Menjalankan Project

### 1. Jalankan Docker

```
docker compose up -d
```

---

### 2. Masuk ke Container

```
docker exec -it laravel_app bash
```

---

### 3. Install Laravel (jika belum)

```
composer create-project laravel/laravel mardekaliterasi
```

---

### 4. Set Permission

```
cd mardekaliterasi
chmod -R 777 storage bootstrap/cache
```

---

### 5. Restart Container

```
docker compose restart
```

---

## 🌍 Akses Aplikasi

* Laravel: http://localhost:8000
* phpMyAdmin: http://localhost:8080

### Login phpMyAdmin:

* Host: `db`
* Username: `root`
* Password: `root`

---

## 🧠 Alur Sistem

```
Browser → Nginx → Laravel → MySQL
```

---

## 📌 Catatan

* Pastikan Docker sudah berjalan sebelum menjalankan project
* Gunakan `docker compose down` untuk menghentikan container
* Gunakan `docker compose up -d` untuk menjalankan kembali

---

## 👨‍💻 Author

Dikembangkan oleh: **MardekaLiterasi Team**

---

## 📄 License

Project ini digunakan untuk pembelajaran dan pengembangan pribadi.
