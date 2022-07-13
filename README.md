# Web-Penjadwalan-Laravel
Web penjadwalan menggunakan framework laravel
<br>
framework yang digunakan `laravel` 
<br>
laravel: `8.83.6`

# Fitur
- Tambah;update;hapus;lihat data jadwal, dosen, matkul, ruangan
- Tampilan Home

# Screenshoot
<details>
    <summary>Foto Web</summary>
    <br>

|  |  |
| :---:  | :---:  |
| ![](screenshot/login.jpeg)            | ![](screenshot/home.jpeg)          
![](screenshot/dashboard.jpeg)  | ![](screenshot/matkul.jpeg)            
![](screenshot/dosen.jpeg)               | ![](screenshot/ruangan.jpeg)  
![](screenshot/jadwal.jpeg)            | ![](screenshot/jadwal2.jpeg)                


</details>  

# Cara install

#### Via Git
```bash
git clone https://github.com/EriSetyawan166/Web-Penjadwalan-Laravel.git
```

### Download ZIP
[Link](https://github.com/EriSetyawan166/Web-Penjadwalan-Laravel/archive/refs/heads/master.zip)

### Setup Aplikasi
Jalankan perintah 
```bash
composer install --ignore-platform-reqs
```
Copy file .env dari .env.example
```bash
copy .env.example .env
```
Konfigurasi file .env
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nama_database
DB_USERNAME=root
DB_PASSWORD=
```
Generate key
```bash
php artisan key:generate
```
Migrate database
```bash
php artisan migrate
```
Seeder table User
```bash
php artisan db:seed
```
Ubah 'email' menjadi 'username' di file AuthenticatesUsers.php
|  |
| :---:  |
|![](screenshot/install.png) |

Menjalankan aplikasi
```bash
php artisan serve
```

username: admin
<br>
password: admin

## Contributors ✨
<table>
  <tr>
    <td align="center"><a href="https://github.com/EriSetyawan166"><img src="https://avatars.githubusercontent.com/u/72864742?v=4" width="100px;" alt=""/><br /><sub><b>Muhammad Eri Setyawan</b></sub></a><br/><a href="#" title="Code">💻</a> <a href="#" title="Documentation">📖</td>
    <td align="center"><a href="https://github.com/BayuPrap"><img src="https://avatars.githubusercontent.com/u/109055176?v=4" width="100px;" alt=""/><br /><sub><b>Maulana Krisna</b></sub></a><br/><a href="#" title="Bug reports">🐛</a> <a href="#" title="erd, database">📙</a></td>
    <td align="center"><a href="#"><img src="https://github.com/github.png" width="100px;" alt=""/><br /><sub><b>Bariq Gian Gumilang</b></sub></a><br/><a href="#" title="Bug reports">🐛</a> <a href="#" title="Ideas, Planning, & Feedback">🤔</a></td>
  </tr>
</table>
