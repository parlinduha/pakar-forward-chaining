<img src="https://github.com/parlinduha/my-image/blob/main/pakar-forward-chaining/6.png"  alt="Dashboard Logo">

<img src="https://github.com/parlinduha/my-image/blob/main/pakar-forward-chaining/1.png"  alt="Dashboard Logo">
<img src="https://github.com/parlinduha/my-image/blob/main/pakar-forward-chaining/9.png"  alt="Dashboard Logo">

## Fitur

Fitur Admin :

- Dashboard.
- About.
- Master (Gejala, Kerusakan, Basis Pengetahuan).
- Education.
- User Management.
- History Diagnosa.


Fitur Pengguna :

- Home.
- About.
- Diagnosa.
- Education.



## Cara Install Project

Install project to local:

- Clone project pakar-forward-chaining
  ````bash
  git clone (https://github.com/parlinduha/https://github.com/parlinduha/pakar-forward-chaining.git)
  ````
- Masuk ke direktori
  ````bash
  cd pakar-forward-chaining
  ````
- Jalankan perintah composer
  ````bash
  composer install
  ````
- Copy file .env.exaple dan buat .env baru
  ````bash
  cp .env.example .env
  ````
- Jalankan perintah key generate
  ````bash
  php artisan key:generate
  ````
- Jalankan Perintah Migrate
  ````bash
  php artisan migrate
  ````
- Running App
  ````bash
  php artisan serve
  ````
