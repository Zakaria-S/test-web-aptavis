# test-web-aptavis
Tes kebidangan untuk posisi Web Developer di Aptavis oleh Muhamad Zakaria Saputra

# Instalasi
jalankan perintah di bawah ini:
```bash
composer install
php artisan migrate
php artisan db:seed --class=TeamSeeder
php artisan serve
```

# NOTE
Tiap team hanya bisa bertanding dengan team yang sama maksimal 2 kali.<br>
Itu pun dengan syarat team tersebut harus berada di posisi yang berbeda dari pertandingan sebelumnya<br>
Misalkan, team Persib bertanding dengan Persija, dengan skenario team Persib sebagai team Home<br>
Team Persib dapat bertanding sekali lagi dengan team Persija hanya jika team Persib menjadi team Away
<br>
