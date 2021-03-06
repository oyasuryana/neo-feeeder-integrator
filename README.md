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
	- xml (enabled secara default - jangan dinonaktifkan)
2. MySQL ver 14.14 
3. composer 2.1.5 
4. git 2.32.0 / gitbash for windows 


## Instalasi
Berikut langkah-langkah instalasi neoFeeder integrator, dengan asumsi telah menginstal semua aplikasi prasyarat yang dibutuhkan diatas.
1. Jalankan file manager di windows
2. Masuk ke drive dimana apiikasi akan disimpan, misal di drive D:
3. klik kanan di area kosong kemudian pilih git 
4. ketik perintah 
<code>git clone https://github.com/oyasuryana/neo-feeeder-integrator.git</code>
5. setelah selesai masuk ke direktori neo-feeder-integrator
6. ketik perintah (pastikan terkoneksi ke internet)
<code>composer update</code> 
7. buat database di mysql dengan nama <code>feeder_db</code>
8. import file <code>feeder_db.sql</code> yang ada di folder neo-feeder-integrator


## Seting Aplikasi

1. Rename `env` menjadi `.env` 
2. Sesuaikan  <code>app.baseURL = 'http://localhost:8080'</code> dengan domain atau alamat host anda
3. Sesuaikan seting database pada bagian
	* <code>database.default.hostname = localhost</code>
	* <code>database.default.database = feeder_db</code>
	* <code>database.default.username = root</code>
	* <code>database.default.password = </code>
	* <code>database.default.DBDriver = MySQLi</code>
4. Sesuaikan setting neoFeeder Integrator pada bagian :
	* <code>neofeeder.urlFeeder = http://localhost:3003/ws/live2.php</code>
	* <code>neofeeder.ipFeeder = isi_dengan_ip_address_urlFeeder</code>
	* <code>neofeeder.userFeeder = isi_dengan_kode_pt</code>
	* <code>neofeeder.passFeeder = isi_dengan_password_pt</code>
	* <code>neofeeder.limitDataFeeder = 25</code>

## Menjalankan Aplikasi

1. Jalankan file manager
2. Masuk ke folder aplikasi neo-feeder-integrator
3. Klik kanan area kosong pilih  
<code>git bash here</code>
4. ketik perintah   
<code>php spark serve</code>
5. Jalankan browser, akses url yang ditampikan dari perintah diatas biasanya http://localhost:8080

## Screenshoot
1. Halaman Login Mahasiswa 
![image](https://drive.google.com/uc?export=view&id=1BAsmCcY32rUeRx6x9jiLRKT4KOMTGcHd)

2. Halaman Login Admin PT
![image](https://drive.google.com/uc?export=view&id=1-Szvl8_TT1-XXXGn9sn3e7HGD6_ZiJDd)

3. Halaman Dashboard Admin PT
![image](https://drive.google.com/uc?export=view&id=1GoFSOCh94-AnshQVVgG-CRBRx8uOXdnv)



## Support & Donasi

Info menyusul :D
