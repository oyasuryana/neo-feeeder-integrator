# Neo Feeder Integrator

## Apa itu Neo Feeder Integrator?

Neo Feeder Integrator merupakan aplikasi web service client untuk pelaporan akademik Perguruan Tinggi swasta di Indonesia.


## Prasyarat
Untuk menginstall aplikasi ini diperlukan aplikasi-aplikasi berikut :
1. PHP min versi 7.3 dengan extension berikut 
	- [intl](http://php.net/manual/en/intl.requirements.php)
	- [libcurl](http://php.net/manual/en/curl.requirements.php) 
	- json (enabled secara default - jangan dinonaktifkan)
	- [mbstring](http://php.net/manual/en/mbstring.installation.php)
	- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php)
	- xml (enabled secara default - jangan dimatikan)

2. MySQL ver 14.14 
3. composer 2.1.5 
4. git 2.32.0 / gitbash for windows ver 


## Instalasi
Berikut langkah-langkah instalasi neoFeeder integrator, dengan asumsi telah menginstal semua aplikasi prasyarat yang dibutuhkan diatas.
1. Jalankan file manager di windows
2. Masuk ke drive dimana apiikasi akan disimpan, misal di drive D:
3. klik kanan di area kosong kemudian pilih git 
4. ketik perintah <code>git clone https://github.com/oyasuryana/neo-feeeder-integrator.git</code>
5. setelah selesai masuk ke direktori neo-feeder-integrator
6. ketik perintah <code>composer update</code>, pastikan terkoneksi ke internet
7. buat database di mysql dengan nama <code>feeder_db</code>
8. import file <code>feeder_db.sql</code> yang ada di folder neo-feeder-integrator


## Seting aplikasi

1. Rename `env` menjadi `.env` 
2. Sesuaikan  <code>app.baseURL = 'http://localhost:8080'</code> dengan domain atau alamat host anda
3. Sesuaikan seting database pada bagian
	<code>
	database.default.hostname = localhost
	database.default.database = feeder_db
	database.default.username = root
	database.default.password = 
	database.default.DBDriver = MySQLi
	</code>
4. Sesuaikan setting neoFeeder Integrator pada bagian :
	<code>
	neofeeder.urlFeeder = http://localhost:3003/ws/live2.php
	neofeeder.ipFeeder = isi_dengan_ip_address_urlFeeder
	neofeeder.userFeeder = isi_dengan_kode_pt
	neofeeder.passFeeder = isi_dengan_password_pt
	neofeeder.limitDataFeeder = 25
	</code>


## Menjalankan aplikasi

1. Jalankan file manager
2. Masuk ke folder aplikasi neo-feeder-integrator
3. Klik kanan area kosong pilih  
<code>git bash here</code>
4. ketik perintah   
<code>php spark serve</code>
5. Jalankan browser, akses url yang ditampikan dari perintah diatas biasanya http://localhost:8080

