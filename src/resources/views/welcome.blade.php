<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Niagahoster</title>

        <!-- Styles -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('style.css') }}">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js" integrity="sha384-LtrjvnR4Twt/qOuYxE721u19sVFLVSA4hf/rRt6PrZTmiPltdZcI7q7PXQBYTKyf" crossorigin="anonymous"></script>
    </head>
    <body>
        <nav class="navbar border-bottom">
            <div class="container">
                <div class="row w-100">
                    <div class="col">
                        <div class="d-inline-block">
                            <p>
                                <img src="{{ asset('sc-bookmark.png') }}" alt="bookmark" height="30px" class="d-inline-block" style="margin-top: -12px;">
                                <span class="small">Gratis Ebook 9 Cara Cerdas Menggunakan Domain [x]</span>
                            </p>
                        </div>
                        <span class="d-block d-md-none"><br></span>
                        <div class="d-inline float-md-right">
                            <small>
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24"><path d="M20 22.621l-3.521-6.795c-.008.004-1.974.97-2.064 1.011-2.24 1.086-6.799-7.82-4.609-8.994l2.083-1.026-3.493-6.817-2.106 1.039c-7.202 3.755 4.233 25.982 11.6 22.615.121-.055 2.102-1.029 2.11-1.033z"/></svg>
                                <span class="mx-2">0274-5305505</span>
                            </small>
                            <small>
                                <img src="{{ asset('chat.png') }}" alt="live-chat" height="15px">
                                <span class="mx-2">Live Chat</span>
                            </small>
                            <small>
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24"><path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm0 22c-3.123 0-5.914-1.441-7.749-3.69.259-.588.783-.995 1.867-1.246 2.244-.518 4.459-.981 3.393-2.945-3.155-5.82-.899-9.119 2.489-9.119 3.322 0 5.634 3.177 2.489 9.119-1.035 1.952 1.1 2.416 3.393 2.945 1.082.25 1.61.655 1.871 1.241-1.836 2.253-4.628 3.695-7.753 3.695z"/></svg>
                                <span class="mx-2">Member Area</span>
                            </small>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <nav class="navbar navbar-expand-lg navbar-light border-bottom">
            <div class="container my-0 my-md-2">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('logo.jpg') }}" height="45" alt="logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item ">
                            <a class="nav-link" href="#">Hosting <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Domain</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Server</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Website</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Afiliasi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Promo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pembayaran</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Review</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Kontak</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Blog</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container py-5" id="hero-image">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <h1 class="hero-title">PHP Hosting</h1>
                    <p class="hero-subtitle my-5">Cepat, handal, penuh dengan modul PHP yang Anda butuhkan</p>
                    <p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#00B44F" d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-1.25 17.292l-4.5-4.364 1.857-1.858 2.643 2.506 5.643-5.784 1.857 1.857-7.5 7.643z"/></svg>
                        <span class="ml-2">Solusi PHP untuk performa query yang lebih cepat</span>
                    </p>
                    <p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#00B44F" d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-1.25 17.292l-4.5-4.364 1.857-1.858 2.643 2.506 5.643-5.784 1.857 1.857-7.5 7.643z"/></svg>
                        <span class="ml-2">Konsumsi memori yang lebih rendah.</span>
                    </p>
                    <p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#00B44F" d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-1.25 17.292l-4.5-4.364 1.857-1.858 2.643 2.506 5.643-5.784 1.857 1.857-7.5 7.643z"/></svg>
                        <span class="ml-2">Support PHP 5.3, PHP 5.4, PHP 5.5, PHP 5.6, PHP 7</span>
                    </p>
                    <p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#00B44F" d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-1.25 17.292l-4.5-4.364 1.857-1.858 2.643 2.506 5.643-5.784 1.857 1.857-7.5 7.643z"/></svg>
                        <span class="ml-2">Fitur enkripsi IonCube dan Zend Guard Loaders</span>
                    </p>
                </div>
                <div class="col-12 col-lg-6 mt-3">
                    <img src="{{ asset('/svg/illustration-banner-PHP-hosting-01.svg') }}" alt="illustration-banner-php-hosting-01" class="hero-image">
                </div>
            </div>
        </div>
        <div class="line"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-4 col-lg-3">
                    <img src="{{ asset('sc-zendguard.png') }}" alt="zendguard" class="img-hero-secondary">
                    <p class="text-center img-hero-secondary-text">PHP Zend Guard Loader</p>
                </div>
                <div class="col-12 col-md-4 col-lg-3">
                    <img src="{{ asset('sc-composer.png') }}" alt="composer" class="img-hero-secondary">
                    <p class="text-center img-hero-secondary-text">PHP Composer</p>
                </div>
                <div class="col-12 col-md-4 col-lg-3">
                    <img src="{{ asset('sc-ioncube.png') }}" alt="ioncube" class="img-hero-secondary">
                    <p class="text-center img-hero-secondary-text">PHP ionCube Loader</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row text-center my-5">
                <div class="col-12 px-0 mb-5">
                    <p class="hero-title-medium mb-0">Paket Hosting Singapura yang Tepat</p>
                    <p class="hero-subtitle-small">Diskon 40% + Domain dan SSL Gratis untuk Anda</p>
                </div>
                <div class="col-12 col-md-3 px-md-0">
                    <p class="hero-title-medium f-24 border pb-1 mb-0">Bayi</p>
                    <div class="border border-top-0 p-3">
                        <p><del>Rp {{ $harga_1->harga_asli }}</del></p>
                        <p class="hero-subtitle-small mb-0 f-20">Rp <span class="hero-title hero-number">{{ $promo_1[0] }}</span> .{{ $promo_1[1] }}/ bln</p>
                    </div>
                    <div class="border border-top-0 p-3">
                        <p class="mb-0">938 Pengguna Terdaftar</p>
                    </div>
                    <div class="border border-top-0 p-3">
                        <p><b>0.5X RESOURCE POWER</b></p>
                        <p><b>500 MB</b> Disk Space</p>
                        <p><b>Unlimited</b> Bandwidth</p>
                        <p><b>Unlimited</b> Databases</p>
                        <p><b>1</b> Domain</p>
                        <p><b>Instant</b> Backup</p>
                        <p><b>Unlimited SSL</b> Gratis Selamanya</p>
                        <button class="btn btn-outline-dark btn-pill my-3">Pilih Sekarang</button>
                    </div>
                </div>
                <div class="col-12 col-md-3 px-md-0 pt-4 pt-md-0">
                    <p class="hero-title-medium f-24 text-center border pb-1 mb-0">Pelajar</p>
                    <div class="border border-top-0 p-3">
                        <p><del>Rp {{ $harga_2->harga_asli }}</del></p>
                        <p class="hero-subtitle-small mb-0 f-20">Rp <span class="hero-title hero-number">{{ $promo_2[0] }}</span> .{{ $promo_2[1] }}/ bln</p>
                    </div>
                    <div class="border border-top-0 p-3">
                        <p class="mb-0">4.168 Pengguna Terdaftar</p>
                    </div>
                    <div class="border border-top-0 p-3">
                        <p><b>1X RESOURCE POWER</b></p>
                        <p><b>Unlimited</b> Disk Space</p>
                        <p><b>Unlimited</b> Bandwidth</p>
                        <p><b>Unlimited</b> POP3 Email</p>
                        <p><b>Unlimited</b> Databases</p>
                        <p><b>10</b> Addon Domains</p>
                        <p><b>Instant</b> Backup</p>
                        <p><b>Domain</b> Gratis Selamanya</p>
                        <p><b>Unlimited SSL</b> Gratis Selamanya</p>
                        <button class="btn btn-outline-dark btn-pill my-3">Pilih Sekarang</button>
                    </div>
                </div>
                <div class="col-12 col-md-3 px-md-0 pt-4 pt-md-0">
                    <p class="hero-title-medium f-24 text-center border-primary bg-primary text-white pb-1 mb-0">Personal</p>
                    <div class="border-primary border-top-0 border-bottom-0 bg-primary text-white p-3">
                        <p><del>Rp {{ $harga_3->harga_asli }}</del></p>
                        <p class="hero-subtitle-small mb-0 f-20 text-white">Rp <span class="hero-title hero-number">{{ $promo_3[0] }}</span> .{{ $promo_3[1] }}/ bln</p>
                    </div>
                    <div class="border-primary bg-primary-darker border-top-0 text-white p-3">
                        <p class="mb-0">10.017 Pengguna Terdaftar</p>
                    </div>
                    <div class="border-primary border-top-0 p-3">
                        <p>2X RESOURCE POWER</p>
                        <p><b>Unlimited</b> Disk Space</p>
                        <p><b>Unlimited</b> Bandwidth</p>
                        <p><b>Unlimited</b> POP3 Email</p>
                        <p><b>Unlimited</b> Databases</p>
                        <p><b>Unlimited</b> Addon Domains</p>
                        <p><b>Instant</b> Backup</p>
                        <p><b>Domain</b> Gratis Selamanya</p>
                        <p><b>Unlimited SSL</b> Gratis Selamanya</p>
                        <p><b>Private</b> Name Server</p>
                        <p><b>SpamAssasin</b> Mail Protection</p>
                        <button class="btn btn-primary btn-pill my-3">Pilih Sekarang</button>
                    </div>
                </div>
                <div class="col-12 col-md-3 px-md-0 pt-4 pt-md-0">
                    <p class="hero-title-medium f-24 text-center border pb-1 mb-0">Bisnis</p>
                    <div class="border border-top-0 p-3">
                        <p><del>Rp {{ $harga_4->harga_asli }}</del></p>
                        <p class="hero-subtitle-small mb-0 f-20">Rp <span class="hero-title hero-number">{{ $promo_4[0] }}</span> .{{ $promo_4[1] }}/ bln</p>
                    </div>
                    <div class="border border-top-0 p-3">
                        <p class="mb-0">3.552 Pengguna Terdaftar</p>
                    </div>
                    <div class="border border-top-0 p-3">
                        <p>3X RESOURCE POWER</p>
                        <p><b>Unlimited</b> Disk Space</p>
                        <p><b>Unlimited</b> Bandwidth</p>
                        <p><b>Unlimited</b> POP3 Email</p>
                        <p><b>Unlimited</b> Databases</p>
                        <p><b>Unlimited</b> Addon Domains</p>
                        <p><b>Magic Auto</b> Backup & Restore</p>
                        <p><b>Domain</b> Gratis Selamanya</p>
                        <p><b>Unlimited SSL</b> Gratis Selamanya</p>
                        <p><b>Private</b> Name Server</p>
                        <p><b>Prioritas</b> Layanan Support</p>
                        <p>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#008DEA" d="M12 .288l2.833 8.718h9.167l-7.417 5.389 2.833 8.718-7.416-5.388-7.417 5.388 2.833-8.718-7.416-5.389h9.167z"/></svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#008DEA" d="M12 .288l2.833 8.718h9.167l-7.417 5.389 2.833 8.718-7.416-5.388-7.417 5.388 2.833-8.718-7.416-5.389h9.167z"/></svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#008DEA" d="M12 .288l2.833 8.718h9.167l-7.417 5.389 2.833 8.718-7.416-5.388-7.417 5.388 2.833-8.718-7.416-5.389h9.167z"/></svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#008DEA" d="M12 .288l2.833 8.718h9.167l-7.417 5.389 2.833 8.718-7.416-5.388-7.417 5.388 2.833-8.718-7.416-5.389h9.167z"/></svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#008DEA" d="M12 .288l2.833 8.718h9.167l-7.417 5.389 2.833 8.718-7.416-5.388-7.417 5.388 2.833-8.718-7.416-5.389h9.167z"/></svg>
                        </p>
                        <p><b>SpamExpert</b> Pro Mail Protection</p>
                        <button class="btn btn-outline-dark btn-pill my-3">Diskon 40%</button>
                    </div>
                </div>
            </div>
            <div class="row mb-5 justify-content-center">
                <div class="col-12">
                    <p class="hero-subtitle text-center my-5">Powerful dengan Limit PHP yang Lebih Besar</p>
                </div>
                <div class="col-12 col-md-5">
                    <table class="table table-striped border">
                        <tbody>
                            <tr>
                                <td>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#00B44F" d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-1.25 17.292l-4.5-4.364 1.857-1.858 2.643 2.506 5.643-5.784 1.857 1.857-7.5 7.643z"/></svg>
                                </td>
                                <td class="text-center">max execution time 300s</td>
                            </tr>
                            <tr>
                                <td>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#00B44F" d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-1.25 17.292l-4.5-4.364 1.857-1.858 2.643 2.506 5.643-5.784 1.857 1.857-7.5 7.643z"/></svg>
                                </td>
                                <td class="text-center">max execution time 300s</td>
                            </tr>
                            <tr>
                                <td>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#00B44F" d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-1.25 17.292l-4.5-4.364 1.857-1.858 2.643 2.506 5.643-5.784 1.857 1.857-7.5 7.643z"/></svg>
                                </td>
                                <td class="text-center">php memory limit 1024 MB</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-12 col-md-5">
                    <table class="table table-striped border">
                        <tbody>
                            <tr>
                                <td>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#00B44F" d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-1.25 17.292l-4.5-4.364 1.857-1.858 2.643 2.506 5.643-5.784 1.857 1.857-7.5 7.643z"/></svg>
                                </td>
                                <td class="text-center">post max size 128 MB</td>
                            </tr>
                            <tr>
                                <td>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#00B44F" d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-1.25 17.292l-4.5-4.364 1.857-1.858 2.643 2.506 5.643-5.784 1.857 1.857-7.5 7.643z"/></svg>
                                </td>
                                <td class="text-center">upload max filesize 128 MB</td>
                            </tr>
                            <tr>
                                <td>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#00B44F" d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-1.25 17.292l-4.5-4.364 1.857-1.858 2.643 2.506 5.643-5.784 1.857 1.857-7.5 7.643z"/></svg>
                                </td>
                                <td class="text-center">max input vars 2500</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="separator"></div>
        <div class="container">
            <div class="row text-center pb-md-5">
                <div class="col-12">
                    <p class="hero-subtitle text-center my-5">Semua Paket Hosting Sudah Termasuk</p>
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('/svg/php.svg')  }}" alt="php" class="img-fitur-hosting">
                    <p class="hero-title-small">PHP Semua Versi</p>
                    <p class="text">Pilih mulai dari versi PHP 5.3 s/d PHP 7. Ubah sesuka Anda!</p>
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('/svg/db.svg')  }}" alt="db" class="img-fitur-hosting">
                    <p class="hero-title-small">MySQL Versi 5.6</p>
                    <p class="text">Nikmati MySQL versi terbaru, tercepat dan kaya akan fitur.</p>
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('/svg/cpanel.svg')  }}" alt="cpanel" class="img-fitur-hosting">
                    <p class="hero-title-small">Panel Hosting cPanel</p>
                    <p class="text">Kelola website dengan panel canggih yang familiar di hati Anda.</p>
                </div>
            </div>
            <div class="row text-center pt-md-5 pb-5">
                <div class="col-md-4">
                    <img src="{{ asset('/svg/shield.svg')  }}" alt="shield" class="img-fitur-hosting">
                    <p class="hero-title-small">Garansi Uptime 99.9%</p>
                    <p class="text">Data center yang mendukung kelangsungan website Anda 24/7.</p>
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('/svg/innodb.svg')  }}" alt="innodb" class="img-fitur-hosting">
                    <p class="hero-title-small">Database InnoDB Unlimited</p>
                    <p class="text">Jumlah dan ukuran database yang tumbuh sesuai kebutuhan Anda.</p>
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('/svg/db-remote.svg')  }}" alt="db-remote" class="img-fitur-hosting">
                    <p class="hero-title-small">Wildcard Remote MySQL</p>
                    <p class="text">Mendukung s/d 25 max_user_connections dan 100 max_connections.</p>
                </div>
            </div>
        </div>
        <div class="separator"></div>
        <div class="container">
            <div class="row mt-5">
                <div class="col-12">
                    <p class="hero-subtitle text-center">Mendukung Penuh Framework Laravel</p>
                </div>
                <div class="col-12 col-lg-7">
                    <p class="hero-subtitle-small mb-5">Tak perlu menggunakan dedicated server ataupun VPS yang mahal. Layanan PHP hosting murah kami mendukung penuh framework favorit Anda</p>
                    <p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#00B44F" d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-1.25 17.292l-4.5-4.364 1.857-1.858 2.643 2.506 5.643-5.784 1.857 1.857-7.5 7.643z"/></svg>
                        <span class="ml-2">Install Laravel 1 klik dengan Softaculous Installer.</span>
                    </p>
                    <p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#00B44F" d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-1.25 17.292l-4.5-4.364 1.857-1.858 2.643 2.506 5.643-5.784 1.857 1.857-7.5 7.643z"/></svg>
                        <span class="ml-2">Mendukung ekstensi <b>PHP, MCrypt, phar, mbstring, json,</b> dan <b>fileinfo</b>.</span>
                    </p>
                    <p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#00B44F" d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-1.25 17.292l-4.5-4.364 1.857-1.858 2.643 2.506 5.643-5.784 1.857 1.857-7.5 7.643z"/></svg>
                        <span class="ml-2">Tersedia <b>Composer</b> dan <b>SSH</b> untuk menginstal packages pilihan Anda.</span>
                    </p>
                    <p>
                        <small>Nb. Composer dan SSH hanya tersedia pada paket Personal dan Bisnis</small>
                    </p>
                    <button class="btn btn-primary btn-pill mt-2">Pilih Hoting Anda</button>
                </div>
                <div class="col-12 col-lg-5 mt-5 mt-lg-0">
                    <img src="{{ asset('/svg/banner-laravel.svg') }}" alt="banner-laravel" class="banner-laravel">
                </div>
            </div>
        </div>
        <div class="line"></div>
        <div class="container" style="margin-bottom: -50px;">
            <div class="row">
                <div class="col-12 text-center">
                    <p class="hero-subtitle my-5">Modul Lengkap untuk Menjalankan Aplikasi PHP Anda.</p>
                </div>
                <div class="col-6 col-md-3 text-center">
                    <ul class="no-bullets center-align-left">
                        <li>IcePHP</li>
                        <li>apc</li>
                        <li>apcu</li>
                        <li>apm</li>
                        <li>ares</li>
                        <li>bcmath</li>
                        <li>bcompiler</li>
                        <li>big_int</li>
                        <li>bitset</li>
                        <li>bloomy</li>
                        <li>bz2_filter</li>
                        <li>clamav</li>
                        <li>coin_acceptor</li>
                        <li>crack</li>
                        <li>dba</li>
                    </ul>
                </div>
                <div class="col-6 col-md-3 text-center">
                    <ul class="no-bullets center-align-left">
                        <li>http</li>
                        <li>huffman</li>
                        <li>idn</li>
                        <li>igbinary</li>
                        <li>imagick</li>
                        <li>imap</li>
                        <li>inclued</li>
                        <li>inotify</li>
                        <li>interbase</li>
                        <li>intl</li>
                        <li>ioncube_loader</li>
                        <li>ioncube_loader_4</li>
                        <li>jsmin</li>
                        <li>json</li>
                        <li>ldap</li>
                    </ul>
                </div>
                <div class="col-6 col-md-3 text-center">
                    <ul class="no-bullets center-align-left">
                        <li>nd_pdo_mysql</li>
                        <li>oauth</li>
                        <li>oci8</li>
                        <li>odbc</li>
                        <li>opcache</li>
                        <li>pdf</li>
                        <li>pdo</li>
                        <li>pdo_dlblib</li>
                        <li>pdo_firebird</li>
                        <li>pdo_mysql</li>
                        <li>pdo_odbc</li>
                        <li>pdo_pgsql</li>
                        <li>pdo_sqlite</li>
                        <li>pgsql</li>
                        <li>phalcon</li>
                    </ul>
                </div>
                <div class="col-6 col-md-3 text-center">
                    <ul class="no-bullets center-align-left">
                        <li>stats</li>
                        <li>stem</li>
                        <li>stomp</li>
                        <li>suhosin</li>
                        <li>sybase_ct</li>
                        <li>sysvmsg</li>
                        <li>sysvsem</li>
                        <li>sysvshm</li>
                        <li>tidy</li>
                        <li>timezonedb</li>
                        <li>trader</li>
                        <li>translit</li>
                        <li>uploadprogress</li>
                        <li>uri_template</li>
                        <li>uuid</li>
                    </ul>
                </div>
                <div class="col-12 text-center my-5">
                    <button class="btn btn-outline-dark btn-pill mt-3">Selengkapnya</button>
                </div>
            </div>
            <div class="row my-5">
                <div class="col-12 col-lg-6">
                    <p class="hero-subtitle">Linux Hosting yang Stabil dengan Teknologi LVE</p>
                    <p>SuperMicro <b>Intel Xeon 24-Cores</b> server dengan RAM <b>128 GB</b> dan teknologi <b>LVE CloudLinux</b> untuk stabilitas server Anda. Dilengkapi dengan <b>SSD</b> untuk
                    kecepatan <b>MySQL</b> dan caching, Apache load balancer berbasis LiteSpeed Technologies, <b>CageFS</b> security, <b>Raid-10</b> protection dan auto backup untuk keamanan website PHP Anda.
                    </p>
                    <button class="btn btn-primary btn-pill mt-3 mb-5">Pilih Hoting Anda</button>
                </div>
                <div class="col-12 col-lg-6">
                    <img src="{{ asset('/support.png') }}" alt="support" class="w-100 mt-md-5">
                </div>
            </div>
        </div>
        <div style="background: #F7F7F7">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p class="py-4 mb-0">
                            Bagikan jika Anda menyukai halaman ini.
                            <span class="d-block d-md-none"><br></span>
                            <span class="float-md-right">
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24"><path fill="#1D5898" d="M22.675 0h-21.35c-.732 0-1.325.593-1.325 1.325v21.351c0 .731.593 1.324 1.325 1.324h11.495v-9.294h-3.128v-3.622h3.128v-2.671c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.622h-3.12v9.293h6.116c.73 0 1.323-.593 1.323-1.325v-21.35c0-.732-.593-1.325-1.325-1.325z"/></svg>
                                <span class="border px-3 mr-2"><span class="small">80k</span></span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24"><path fill="#00ADEE" d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-.139 9.237c.209 4.617-3.234 9.765-9.33 9.765-1.854 0-3.579-.543-5.032-1.475 1.742.205 3.48-.278 4.86-1.359-1.437-.027-2.649-.976-3.066-2.28.515.098 1.021.069 1.482-.056-1.579-.317-2.668-1.739-2.633-3.26.442.246.949.394 1.486.411-1.461-.977-1.875-2.907-1.016-4.383 1.619 1.986 4.038 3.293 6.766 3.43-.479-2.053 1.08-4.03 3.199-4.03.943 0 1.797.398 2.395 1.037.748-.147 1.451-.42 2.086-.796-.246.767-.766 1.41-1.443 1.816.664-.08 1.297-.256 1.885-.517-.439.656-.996 1.234-1.639 1.697z"/></svg>
                                <span class="border px-3"><span class="small">450</span></span>
                                <img src="{{ asset('google-plus.png') }}" alt="google-plus" height="28px">
                                <span class="border px-3"><span class="small">1900</span></span>
                            </span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div style="background: #00A1EF">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-9">
                        <p class="hero-title-medium text-bantuan text-center text-lg-left text-white py-3 py-lg-5">
                            <b>Perlu</b> BANTUAN?
                            <b>Hubungi Kami :</b>
                            <span class="d-block d-md-none"><span style="white-space: pre-line"></span></span>
                            0274-5305505</p>
                    </div>
                    <div class="col-12 col-lg-3 align-self-center">
                        <button class="btn btn-lg btn-outline-light btn-bantuan mb-3 px-5 rounded-borders">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill-rule="evenodd" clip-rule="evenodd"><path fill="white" d="M20 9.999v-2h4v12.001h-3v4l-5.333-4h-7.667v-4h12v-6.001zm-2 4.001h-9.667l-5.333 4v-4h-3v-14.001h18v14.001z"/></svg>
                            Live Chat
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <footer>
        <div style="background: #303030">
            <div class="container py-5">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-3 mb-5">
                        <p class="footer-title">hubungi kami</p>
                        <ul class="no-bullets text-gray">
                            <li>0274-5305505</li>
                            <li>Senin - Minggu</li>
                            <li>24 Jam Nonstop</li>
                            <li></li>
                            <li>Jl. Selokan Mataram Monjali</li>
                            <li>Karangjati MT I/304</li>
                            <li>Sinduadi, Mlati, Sleman</li>
                            <li>Yogyakarta 55284</li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 mb-5">
                        <p class="footer-title">layanan</p>
                        <ul class="no-bullets text-gray">
                            <li>Domain</li>
                            <li>Shared Hosting</li>
                            <li>Cloud VPS Hosting</li>
                            <li>Managed VPS Hosting</li>
                            <li>Web Builder</li>
                            <li>Keamanan SSL / HTTPS</li>
                            <li>Jasa Pembuatan Website</li>
                            <li>Program Afiliasi</li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 mb-5">
                        <p class="footer-title">service hosting</p>
                        <ul class="no-bullets text-gray">
                            <li>Hosting Murah</li>
                            <li>Hosting Indonesia</li>
                            <li>Hosting Singapura SG</li>
                            <li>Hosting PHP</li>
                            <li>Hosting Wordpress</li>
                            <li>Hosting Laravel</li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 mb-5">
                        <p class="footer-title">tutorial</p>
                        <ul class="no-bullets text-gray">
                            <li>Knowledgebase</li>
                            <li>Blog</li>
                            <li>Cara Pembayaran</li>
                        </ul>
                    </div>
                </div>
                <div class="row mt-0 mt-md-5">
                    <div class="col-12 col-md-6 col-lg-3 mb-5">
                        <p class="footer-title">tentang kami</p>
                        <ul class="no-bullets text-gray">
                            <li>Tim Niagahoster</li>
                            <li>Karir</li>
                            <li>Events</li>
                            <li>Penawaran & Promo Spesial</li>
                            <li>Kontak Kami</li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 mb-5">
                        <p class="footer-title">kenapa pilih niagahoster?</p>
                        <ul class="no-bullets text-gray">
                            <li>Support Terbaik</li>
                            <li>Garansi Harga Termurah</li>
                            <li>Domain Gratis Selamanya</li>
                            <li>Datacenter Hosting Terbaik</li>
                            <li>Review Pelanggan</li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 mb-5">
                        <p class="footer-title">newsletter</p>
                        <div class="input-group mb-2">
                            <input type="text" class="form-control rounded-pill input-newsletter" placeholder="Email"/>
                            <span class="input-group-append">
                                  <button class="btn btn-newsletter py-1" style="border-radius: 25px">Berlangganan</button>
                              </span>
                        </div>
                        <small class="text-darkgray">Dapatkan promo dan konten menarik dari penyedia hosting terbaik Anda.</small>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 mb-5">
                        <div class="row h-100">
                            <div class="col-4">
                                <div class="h-100 m-auto d-flex align-items-center pb-md-2 pb-md-4 pl-3 pl-md-0">
                                    <img src="{{ asset('facebook-bw.png') }}" alt="facebook">
{{--                                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24"><path fill="white" d="M12 2c5.514 0 10 4.486 10 10s-4.486 10-10 10-10-4.486-10-10 4.486-10 10-10zm0-2c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-2 10h-2v2h2v6h3v-6h1.82l.18-2h-2v-.833c0-.478.096-.667.558-.667h1.442v-2.5h-2.404c-1.798 0-2.596.792-2.596 2.308v1.692z"/></svg>--}}
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="h-100 m-auto d-flex align-items-center pb-md-2 pb-md-4 pl-3 pl-md-0">
                                    <img src="{{ asset('twitter-bw.png') }}" alt="twitter">
{{--                                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24"><path fill="white" d="M12 2c5.514 0 10 4.486 10 10s-4.486 10-10 10-10-4.486-10-10 4.486-10 10-10zm0-2c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm6.5 8.778c-.441.196-.916.328-1.414.388.509-.305.898-.787 1.083-1.362-.476.282-1.003.487-1.564.597-.448-.479-1.089-.778-1.796-.778-1.59 0-2.758 1.483-2.399 3.023-2.045-.103-3.86-1.083-5.074-2.572-.645 1.106-.334 2.554.762 3.287-.403-.013-.782-.124-1.114-.308-.027 1.14.791 2.207 1.975 2.445-.346.094-.726.116-1.112.042.313.978 1.224 1.689 2.3 1.709-1.037.812-2.34 1.175-3.647 1.021 1.09.699 2.383 1.106 3.773 1.106 4.572 0 7.154-3.861 6.998-7.324.482-.346.899-.78 1.229-1.274z"/></svg>--}}
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="h-100 m-auto d-flex align-items-center pb-md-2 pb-md-4 pl-3 pl-md-0">
                                    <img src="{{ asset('google-plus-bw.png') }}" alt="google-plus">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <p class="footer-title">pembayaran</p>
                        <img src="{{ asset('sc-bank.png') }}" alt="banks" style="max-width: 100%">
                        <br><br>
                        <small class="text-darkgray">Aktivasi instan dengan e-Payment. Hosting dan domain langsung aktif!</small>
                    </div>
                    <div class="col-12">
                        <hr>
                    </div>
                    <div class="col-12 text-white">
                        <p class="copyright-text">
                            Copyright ©2016 Niagahoster | Hosting poweered by PHP7, CloudLinux, CloudFlare, Bit Ninja and DC Biznet Technovillage Jakarta
                            <span class="float-lg-right">
                                <span class="d-block d-lg-none"><br></span>
                                Syarat dan Ketentuan | Kebijakan Privasi
                            </span>
                        </p>
                        <p class="copyright-text">Cloud VPC Murah powered by Webuzo Softaculous, Intel SSD and cloud computing technology</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</html>
