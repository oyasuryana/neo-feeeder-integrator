# Neo Feeder Integrator

## Apa itu Neo Feeder Integrator?

Neo Feeder Integrator merupakan aplikasi web service client untuk pelaporan akademik Perguruan Tinggi swasta di Indonesia.

More information can be found at the [official site](http://codeigniter.com).

This repository holds a composer-installable app starter.
It has been built from the
[development repository](https://github.com/codeigniter4/CodeIgniter4).

More information about the plans for version 4 can be found in [the announcement](http://forum.codeigniter.com/thread-62615.html) on the forums.

The user guide corresponding to this version of the framework can be found
[here](https://codeigniter4.github.io/userguide/).

## Prasyarat
Untuk menginstall aplikasi ini diperlukan aplikasi-aplikasi berikut :
1. PHP min versi 7.3 dengan extension berikut 
	- [intl](http://php.net/manual/en/intl.requirements.php)
	- [libcurl](http://php.net/manual/en/curl.requirements.php) 

2. MySQL ver 14.14 
3. composer 2.1.5 
4. git 2.32.0 / gitbash for windows ver 


## Instalasi
Berikut langkah-langkah instalasi neoFeeder integrator, dengan asumsi telah menginstal semua aplikasi prasyarat yang dibutuhkan diatas.
1. Jalankan file manager di windows
2. Masuk ke drive dimana apiikasi akan disimpan, misal di drive D:
3. klik kanan di area kosong kemudian pilih git 
4. ketik perintah 
	<code>git clone https://github.com/oyasuryana/neo-feeeder-integrator.git</code>

## Setup

Copy `env` to `.env` and tailor for your app, specifically the baseURL
and any database settings.

## Important Change with index.php

`index.php` is no longer in the root of the project! It has been moved inside the *public* folder,
for better security and separation of components.

This means that you should configure your web server to "point" to your project's *public* folder, and
not to the project root. A better practice would be to configure a virtual host to point there. A poor practice would be to point your web server to the project root and expect to enter *public/...*, as the rest of your logic and the
framework are exposed.

**Please** read the user guide for a better explanation of how CI4 works!

## Repository Management

We use GitHub issues, in our main repository, to track **BUGS** and to track approved **DEVELOPMENT** work packages.
We use our [forum](http://forum.codeigniter.com) to provide SUPPORT and to discuss
FEATURE REQUESTS.

This repository is a "distribution" one, built by our release preparation script.
Problems with it can be raised on our forum, or as issues in the main repository.

## Server Requirements

PHP version 7.3 or higher is required, with the following extensions installed:

- [intl](http://php.net/manual/en/intl.requirements.php)
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php)
- xml (enabled by default - don't turn it off)
# neo-feeeder-integrator
