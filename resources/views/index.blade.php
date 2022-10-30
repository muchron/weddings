<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wedding</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Root-Icon -->
    <link rel="stylesheet" href="https://cdn.rootpixel.net/assets/rooticon/v2/rooticon.css">
    <!-- Glide -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.core.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.theme.min.css">
    <!-- Lightgallery -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.5.0/css/lightgallery-bundle.min.css">
    <!-- Aos Animation on scroll -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- App -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

    <style>
        /* .btn#btn-home {
            position: fixed;
            bottom: 16rem;
            right: 10rem;
            display: none;
            animation: pop-out .3s linear forwards
        } */
    </style>
</head>

<!-- <body id="index" class="opening-hide" style="cursor: default !important;"> -->

<body id="index" class="opening-show" style="cursor: default !important;" data-aos-easing="ease"
    data-aos-duration="400" data-aos-delay="0">

    <section id="opening">
        <div class="container text-white text-center">
            <h1 class="font-type-secondary mb-3">Ardli & Inggit</h1>
            <img src="{{ asset('svg/ornament.svg') }}" alt="" class="w-24rem w-lg-35rem mb-8">

            <div class="font-bold mb-2">
                <p class="h2">Halo, <span id="guest"></span></p>
            </div>
            <div class="mb-5">
                <p>Kami mengundang anda di acara pernikahan kami pada:</p>
                <p class="h2">Sabtu, 05 November 2022, pukul 12.00 WIB</p>
            </div>
            <div id="timer" class="flex-wrap d-flex justify-content-center mb-10">
                <div data-aos="zoom-in-up" data-aos-duration="400"
                    class="shadow-lg align-items-center flex-column d-flex justify-content-center aos-init aos-animate">
                    <span id="days" class="time">0</span>
                    <span>Hari</span>
                </div>
                <div data-aos="zoom-in-up" data-aos-duration="400"
                    class="shadow-lg align-items-center flex-column d-flex justify-content-center aos-init aos-animate">
                    <span id="hours" class="time">0</span>
                    <span>Jam</span>
                </div>
                <div data-aos="zoom-in-up" data-aos-duration="400"
                    class="shadow-lg align-items-center flex-column d-flex justify-content-center aos-init aos-animate">
                    <span id="minutes" class="time">0</span>
                    <span>Menit</span>
                </div>
                <div data-aos="zoom-in-up" data-aos-duration="400"
                    class="shadow-lg align-items-center flex-column d-flex justify-content-center aos-init aos-animate">
                    <span id="seconds" class="time">0</span>
                    <span>Detik</span>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-auto">
                    <button id="btn-open-opening" class="btn btn-secondary text-black-50">Buka Undangan</button>
                </div>
            </div>
        </div>
    </section>
    <div class="navigation">
        <div class="row">
            <div class="col">
                <a class="page-scroll item-nav text-white nav-link" href="#section-3">
                    <i class="fa-brands fa-gratipay"></i>
                    Mempelai</a>
            </div>
            <div class="col">
                <a class="page-scroll item-nav text-white nav-link" href="#section-4">
                    <i class="fa-solid fa-calendar-days"></i>
                    Acara</a>
            </div>
            <div class="col">
                <a class="page-scroll item-nav text-white nav-link" href="#section-5">
                    <i class="fa-solid fa-map-location-dot"></i>
                    Lokasi</a>
            </div>
            <div class="col">
                <a class="page-scroll item-nav text-white nav-link" href="#section-9">
                    <i class="fa-solid fa-gift"></i>
                    Kado</a>
            </div>
            <div class="col">
                <a class="page-scroll item-nav text-white nav-link" href="#section-8">
                    <i class="fa-solid fa-file-pen"></i>
                    Ucapan</a>
            </div>
        </div>
    </div>
    <header id="header">
        <div class="container text-white text-center">
            <img src="{{ asset('svg/ornament.svg') }}" alt="" class="w-24rem w-lg-35rem">
            <h1 class="font-type-secondary my-6">Ardli &amp; Inggit</h1>
            <div class="mb-7">
                Senin, 02 Agustus 2021, pukul 19.00 WIB
            </div>
        </div>
    </header>

    <section id="section-1">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <p class="mb-8 aos-init" data-aos="fade-up" data-aos-duration="1000">
                        “Dan di antara tanda-tanda (kebesaran)-Nya ialah Dia menciptakan pasangan-pasangan untukmu dari
                        jenismu sendiri, agar kamu cenderung dan merasa tenteram kepadanya, dan Dia menjadikan di
                        antaramu rasa kasih dan sayang. Sungguh, pada yang demikian itu benar-benar terdapat tanda-tanda
                        (kebesaran Allah) bagi kaum yang berpikir.”
                    </p>

                    <div data-aos="fade-up" data-aos-duration="1200" class="aos-init">
                        QS. Ar-Rum (30): 21
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="section-2">
        <div class="container text-center">
        </div>
    </section>

    <section id="section-3">
        <div class="container">
            <div class="text-center mb-16">
                <img src="{{ asset('svg/ornament.svg') }}" alt="" class="w-20rem w-lg-26rem">
                <h6 class="my-4">Mempelai</h6>
                <h5 class="font-bold">Perkenalkan kami</h5>
            </div>

            <div class="row justify-content-between">
                <div class="col-md-6 col-lg-5 d-flex flex-column align-items-center text-center mb-8 mb-md-0">
                    <div class="obj-fit obj-fit-cover rounded-circle w-19rem h-19rem aos-init" data-aos="fade-up"
                        data-aos-duration="1000">
                        <img src="{{ asset('img/ardli.jpg') }}" alt="">
                    </div>

                    <h2 class="font-type-secondary mt-4 aos-init" data-aos="fade-up" data-aos-duration="1200">
                        Ashshohwah Mulia Ardli P.
                    </h2>
                    <p class="text-gray px-5 px-md-0 aos-init" data-aos="fade-up" data-aos-duration="1400">
                        Putra Bapak Amat Setiawan - Ibu Kastumi
                        <br>
                        Perum.GPI, Desa Tanjungsari, Kec.Kajen, Kab.Pekalongan
                    </p>
                </div>
                <div class="col-md-6 col-lg-5 d-flex flex-column align-items-center text-center">
                    <div class="obj-fit obj-fit-cover rounded-circle w-19rem h-19rem aos-init" data-aos="fade-up"
                        data-aos-duration="1000">
                        <img src="{{ asset('img/inggit.jpg') }}" alt="">
                    </div>

                    <h2 class="font-type-secondary mt-4 aos-init" data-aos="fade-up" data-aos-duration="1200">Inggit
                        Baitul Qisti
                    </h2>
                    {{-- <h6 class="font-bold mb-4 aos-init" data-aos="fade-up" data-aos-duration="1300">The Groom</h6> --}}
                    <p class="text-gray px-5 px-md-0 aos-init" data-aos="fade-up" data-aos-duration="1400">
                        Putri Bapak Suciadi - Ibu Nur Indah
                        <br>
                        Dk.Jomblang, Desa Sumurjomblangbogo, Kec.Bojong, Kab.Pekalongan
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="section-4">
        <div class="container">
            <div class="text-center mb-10 mb-lg-10">
                <img src="{{ asset('svg/ornament.svg') }}" alt="" class="w-20rem w-lg-26rem">
                <h6 class="my-4">Waktu Acara</h6>
                <h5 class="font-bold">Undangan Anda</h5>
                <div id="timer" class="flex-wrap d-flex justify-content-center mt-10">
                    <div data-aos="zoom-in-up" data-aos-duration="400"
                        class="shadow-lg align-items-center flex-column d-flex justify-content-center aos-init aos-animate">
                        <span id="days" class="time">0</span>
                        <span>Hari</span>
                    </div>
                    <div data-aos="zoom-in-up" data-aos-duration="400"
                        class="shadow-lg align-items-center flex-column d-flex justify-content-center aos-init aos-animate">
                        <span id="hours" class="time">0</span>
                        <span>Jam</span>
                    </div>
                    <div data-aos="zoom-in-up" data-aos-duration="400"
                        class="shadow-lg align-items-center flex-column d-flex justify-content-center aos-init aos-animate">
                        <span id="minutes" class="time">0</span>
                        <span>Menit</span>
                    </div>
                    <div data-aos="zoom-in-up" data-aos-duration="400"
                        class="shadow-lg align-items-center flex-column d-flex justify-content-center aos-init aos-animate">
                        <span id="seconds" class="time">0</span>
                        <span>Detik</span>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center  mb-12">
                <div class="col-lg-8">
                    <p class="text-center">
                        Dengan memohon rahmat dan ridho Allah, kami mengundang Bapak/Ibu/Saudara/i untuk menghadiri
                        resepsi pernikahan kami yang insyaa Allah akan diselenggarakan pada:
                    </p>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="row gx-4 align-items-center mb-12 overflow-hidden">
                        <div class="col-auto aos-init" data-aos="fade-right" data-aos-duration="1200">

                            <div
                                class="obj-fit obj-fit-cover rounded-3 w-8rem w-md-18rem w-lg-23rem h-8rem h-md-18rem h-lg-23rem">
                                <img src="{{ asset('img/hands-1.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="col">
                            <div class="row align-items-center">
                                <div class="col-md aos-init" data-aos="fade-right" data-aos-duration="1300">
                                    <h6 class="my-4 font-bold">Akad Nikah</h6>
                                    <div class="font-semibold">Sabtu</div>
                                    <div class="font-semibold">05 November 2022</div>
                                </div>
                                <div class="col-md-2 my-1 aos-init" data-aos="fade-right" data-aos-duration="1400">
                                    <div
                                        class="divider divider-horizontal divider-md-vertical h-md-8rem h-lg-15rem bg-gray-800">
                                    </div>
                                </div>
                                <div class="col-md aos-init" data-aos="fade-right" data-aos-duration="1500">
                                    <div class="font-semibold">08.00 WIB</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row gx-4 align-items-center">
                        <div class="col-auto aos-init" data-aos="fade-right" data-aos-duration="1200">
                            <div
                                class="obj-fit obj-fit-cover rounded-3 w-8rem w-md-18rem w-lg-23rem h-8rem h-md-18rem h-lg-23rem">
                                <img src="{{ asset('img/hands-2.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="col">
                            <div class="row align-items-center">
                                <div class="col-md aos-init" data-aos="fade-right" data-aos-duration="1300">
                                    <h6 class="my-4 font-bold">Resepsi</h6>
                                    <div class="font-semibold">Sabtu</div>
                                    <div class="font-semibold">05 November 2022</div>
                                </div>
                                <div class="col-md-2 my-1 aos-init" data-aos="fade-right" data-aos-duration="1400">
                                    <div
                                        class="divider divider-horizontal divider-md-vertical h-md-8rem h-lg-15rem bg-gray-800">
                                    </div>
                                </div>
                                <div class="col-md aos-init" data-aos="fade-right" data-aos-duration="1500">
                                    <div class="font-semibold">12.00 WIB</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="section-5">
        <div class="container">
            <div class="text-center mb-10">
                <img src="{{ asset('svg/ornament.svg') }}" alt="" class="w-20rem w-lg-26rem">
                <h5 class="my-4 font-bold">Lokasi Akad Nikah &amp; Resepsi</h5>
            </div>

            <div class="row justify-content-between align-items-lg-center mb-16 overflow-hidden">
                <div class="col-md-5 order-lg-2 mb-4 mb-lg-0 aos-init" data-aos="fade-right"
                    data-aos-duration="1200">
                    <iframe class=" shadow-lg"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.1878638390845!2d109.57817231477324!3d-6.987138994952493!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x53413ff210e473e8!2zNsKwNTknMTMuNyJTIDEwOcKwMzQnNDkuMyJF!5e0!3m2!1sid!2sid!4v1667135236988!5m2!1sid!2sid"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade" width="600" height="450"
                        style="border:0;"></iframe>
                </div>
                <div class="col-md-6 col-lg-5 aos-init" data-aos="fade-left" data-aos-duration="1200">
                    <h6 class="font-bold mb-2">Kediaman Mempelai Wanita</h6>
                    <div class="text-dark-500 font-semibold mb-4">Dk. Jomblang, Desa Sumurjomblangbogo,
                        Kec. Bojong, Kab. Pekalongan </div>
                    <a href="https://goo.gl/maps/JEjoB8MS4dK4LdcC6" class="btn btn-primary">Lihat
                        Map</a>
                </div>
            </div>
        </div>
    </section>

    {{-- <section id="section-6">
        <div class="container">
            <div class="text-center mb-16">
                <img src="{{ asset('svg/ornament.svg') }}" alt="" class="w-20rem w-lg-26rem">
                <h6 class="my-4">Tentang cerita kami berdua</h6>
                <h5 class="font-bold">Story</h5>
            </div>

            <div class="row justify-content-center overflow-hidden">
                <div class="col-lg-8">

                    <div class="row align-items-center mb-12 overflow-hidden aos-init" data-aos="fade-up"
                        data-aos-duration="1400">
                        <div class="col order-2 order-md-1">
                            <img src="{{ asset('svg/ornament.svg') }}" alt="" class="w-2rem">
                            <h6 class="font-bold mt-2 mb-2 mb-md-6">Pertemuan keluarga</h6>
                            <div class="divider divider-horizontal w-13rem bg-gray-800"></div>
                        </div>
                        <div class="col-auto order-1 order-md-2">
                            <div class="obj-fit obj-fit-cover rounded-circle w-6rem w-md-8rem h-6rem h-md-8rem">
                                <img src="img/hands-1.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-12 order-3 mt-6 text-gray">
                            Libero, sit sit nullam a. Pellentesque auctor vitae est, nisi nulla posuere aliquet.
                            Ultrices a rhoncus, scelerisque risus, lectus placerat elementum. Urna nunc velit commodo
                            nibh venenatis. Pharetra ultrices sit a libero arcu nunc. Morbi habitasse vitae eu elementum
                            viverra nunc. Sed facilisis faucibus sed auctor et, rutrum nunc lacus.
                        </div>
                    </div>
                    <div class="row align-items-center mb-12 aos-init" data-aos="fade-up" data-aos-duration="1400">
                        <div class="col order-2 text-md-end d-md-flex flex-column align-items-end">
                            <img src="{{ asset('svg/ornament.svg') }}" alt="" class="w-2rem">
                            <h6 class="font-bold mt-2 mb-2 mb-md-6">Pertemuan keluarga</h6>
                            <div class="divider divider-horizontal w-13rem bg-gray-800"></div>
                        </div>
                        <div class="col-auto order-1">
                            <div class="obj-fit obj-fit-cover rounded-circle w-6rem w-md-8rem h-6rem h-md-8rem">
                                <img src="{{ asset('img/hands-1.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="col-12 order-3 mt-6 text-gray">
                            Libero, sit sit nullam a. Pellentesque auctor vitae est, nisi nulla posuere aliquet.
                            Ultrices a rhoncus, scelerisque risus, lectus placerat elementum. Urna nunc velit commodo
                            nibh venenatis. Pharetra ultrices sit a libero arcu nunc. Morbi habitasse vitae eu elementum
                            viverra nunc. Sed facilisis faucibus sed auctor et, rutrum nunc lacus.
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section> --}}

    {{-- <section id="section-7">
        <div class="container">
            <div class="text-center mb-16">
                <img src="{{ asset('svg/ornament.svg') }}" alt="" class="w-20rem w-lg-26rem">
                <h6 class="my-4">Sejak kami bertemu dan memutuskan menikah</h6>
                <h5 class="font-bold">Galeri</h5>
            </div>

            <div id="row-lightgallery" class="row gx-2 gx-md-4 mt-10 overflow-hidden" lg-uid="lg0">
                <div class="col-4">
                    <div class="row gy-2 gy-md-4">
                        <div class="col-12 aos-init" data-aos="fade-up" data-aos-duration="1200">
                            <div class="img-wrapper">
                                <div data-src="_assets/img/gallery/1.jpg"
                                    class="img-wrapper-gallery img-wrapper-gallery-2">
                                    <img src="img/1.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 aos-init" data-aos="fade-up" data-aos-duration="1400">
                            <div class="img-wrapper">
                                <div class="img-wrapper-gallery-label">
                                    <h5>2/7</h5>
                                    <div>2020</div>
                                </div>
                                <div data-src="_assets/img/gallery/5.jpg"
                                    class="img-wrapper-gallery img-wrapper-gallery-1">
                                    <img src="img/5.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="row gy-2 gy-md-4">
                        <div class="col-12 aos-init" data-aos="fade-up" data-aos-duration="1200">
                            <div class="img-wrapper">
                                <div data-src="_assets/img/gallery/3.jpg"
                                    class="img-wrapper-gallery img-wrapper-gallery-1">
                                    <img src="img/3.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 aos-init" data-aos="fade-up" data-aos-duration="1400">
                            <div class="img-wrapper">
                                <div class="img-wrapper-gallery-label">
                                    <h5>12/10</h5>
                                    <div>2020</div>
                                </div>
                                <div data-src="_assets/img/gallery/4.jpg"
                                    class="img-wrapper-gallery img-wrapper-gallery-2">
                                    <img src="img/4.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="row gy-2 gy-md-4">
                        <div class="col-12 aos-init" data-aos="fade-up" data-aos-duration="1200">
                            <div class="img-wrapper">
                                <div data-src="_assets/img/gallery/6.jpg"
                                    class="img-wrapper-gallery img-wrapper-gallery-2">
                                    <img src="img/6.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 aos-init" data-aos="fade-up" data-aos-duration="1400">
                            <div class="img-wrapper">
                                <div class="img-wrapper-gallery-label">
                                    <h5>2/10</h5>
                                    <div>2020</div>
                                </div>
                                <div data-src="_assets/img/gallery/5.jpg"
                                    class="img-wrapper-gallery img-wrapper-gallery-1">
                                    <img src="img/5.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <section id="section-8">
        <div class="container">
            <div class="text-center mb-16">
                <img src="{{ asset('svg/ornament.svg') }}" alt="" class="w-20rem w-lg-26rem">
                <h6 class="my-4">Terima kasih telah memberikan ucapan dan doa</h6>
                <h5 class="font-bold">Ucapan</h5>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <!-- form -->
                    <form class="mb-4">
                        <div class="mb-5">
                            <label class="form-label">Nama Anda</label>
                            <input type="text" id="nama" name="nama" class="form-control"
                                placeholder="Nama lengkap">
                        </div>
                        <div class="mb-5">
                            <label for="" class="form-label">Bisakah hadir di acara kami?</label>
                            <select class="form-select" aria-label="Default select example" name="bersedia"
                                id="bersedia">
                                <option selected disabled="">Pilih salah satu</option>
                                <option value="Bisa Datang">Bisa Datang</option>
                                <option value="Tidak Bisa">Tidak Bisa</option>
                            </select>
                        </div>
                        <div class="mb-5">
                            <label for="" class="form-label">Kirim ucapan</label>
                            <textarea name="ucapan" id="ucapan" name="ucapan" cols="30" rows="8"
                                placeholder="Anda bisa menuliskan ucapan selamat dan doa" class="form-control"></textarea>
                        </div>

                        <div class="row justify-content-center">
                            <div class="col-auto">
                                <button type="button" class="btn btn-primary" onclick="kirimUcapan()">Jawab
                                    Undangan</button>
                            </div>
                        </div>
                    </form>
                    <!-- end of form -->

                    <!-- preview ucapan -->
                    <div class="pr-4 mb-12">
                        <ul id="section-8-list-message" class="list-message">

                        </ul>
                    </div>
                    <!-- end of preview ucapan -->
                </div>
            </div>
        </div>
    </section>


    <section id="section-9">
        <div class="container">
            <div class="text-center mb-12">
                <img src="{{ asset('svg/ornament.svg') }}" alt="" class="w-20rem w-lg-26rem">
                <h5 class="font-bold mt-4">Kasih Kado</h5>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8 text-center text-dark">
                    <p>
                        Sed nulla sit velit amet, amet. Placerat urna imperdiet eu odio non ut praesent. Bibendum
                        blandit id orci vestibulum, volutpat malesuada. Sed enim ipsum felis ultrices. Orci sagittis
                        elit et sit nullam gravida. Tincidunt diam lectus ut eget curabitur commodo. Volutpat bibendum
                        velit in posuere at tincidunt ultrices. Dignissim magna et dapibus ante amet interdum lectus.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md mb-3 mb-md-0">
                    Fiqi Undangan </div>
                <div class="col-auto">
                    <i class="fa-brands fa-whatsapp"></i> 0823-2661-0292
                </div>
            </div>
        </div>
    </footer>

    <button id="btn-play" class="btn btn-light"><i class="ri ri-volume-high"></i></button>
    <a href="#header" id="btn-to-top" class="btn btn-light page-scroll  " style="display: none;">
        <i class="ri ri-arrow-up"></i>
    </a>

    <audio controls="false" id="audio" class="d-none" loop>
        <source src="{{ asset('audio/backsound.mp3') }}" type="audio/mpeg">
        <!-- Your browser does not support the audio element. -->
    </audio>

    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
    <!-- Lightgallery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.5.0/lightgallery.min.js"></script>

    <!-- Anime js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
    <!-- App -->
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- AOS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        $(document).ready(function() {
            listUcapan();
        })

        function listUcapan() {
            $.ajax({
                url: 'ucapan',
                type: 'GET',
                typeData: 'JSON',
                success: function(response) {
                    // console.log(response)
                    $.map(response, function(key) {
                        console.log(key)
                        html = '<li class="list-item">' +
                            '<div class="font-bold text-dark mb-1"><h6>' + key.nama +
                            ', ' + key.bersedia + '</h6></div>' +
                            '<div class="text-gray">' +
                            key.ucapan +
                            '</div><hr/>' +
                            '</li>';
                        $('#section-8-list-message').append(html);
                    })
                }
            })
        }

        function kirimUcapan() {
            var data = {
                nama: $('#nama').val(),
                bersedia: $('#bersedia option:selected').val(),
                ucapan: $('#ucapan').val(),
            }
            console.log(data)
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: 'ucapan',
                data: data,
                type: 'POST',
                success: function(response) {
                    console.log(response);
                    $('#nama').val == '';
                    $('#bersedia option:selected').val(),
                        $('#ucapan').val(),
                        $('#section-8-list-message').empty();
                    listUcapan();
                }

            })
        }
    </script>
</body>

</html>
