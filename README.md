# Cara Menjalankan Kliniku

1. Clone melalui git atau lainnya
2. Extract file Vendor
3. Buat file .env dari file env yang ada.
4. Pada line 17 (Tidak Selalu Sama) yaitu #CI_ENVIRONMENT = production ubah menjadi CI_ENVIRONMENT = development
5. Pada line 23 (Tidak Selalu Sama) yaitu #app.baseURL = '' ubah menjadi app.baseURL = 'http://localhost:8080/'
6. Pada line 40-45 (Tidak Selalu Sama) hapus semua pagar kemudian isi hostname = localhost, database = klinik, username = root, password = , dan sisanya default
7. Buka visual studio code, ketik php spark serve di terminal
8. Kliniku berhasil dijalankan
