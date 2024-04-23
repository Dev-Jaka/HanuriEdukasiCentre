@include('layouts.navbar')
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                <h1 data-aos="fade-up">Hanuri Edukasi Centre</h1>
                <h6 data-aos="fade-up" data-aos-delay="400">kami berkomitmen untuk terus mengembangkan mutu pendidikan
                    dan teknologi serta menciptakan masa depan yang lebih cerah</h6>
                @if (Route::has('register'))
                    <div data-aos="fade-up" data-aos-delay="800" class="pt-7 mt-5">
                        <a href="{{ route('register') }}" class="btn-get-started scrollto">Register</a>
                    </div>
                @endif
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
                <img src="assets/img/bg-img.png" class="img-fluid animated" alt="">
            </div>
        </div>
    </div>

</section>

<!-- End Hero -->

<main id="main">

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients clients">
        <div class="container">

            <div class="row">

                <div class="col-lg-2 col-md-4 col-6">
                    <img src="assets/img/clients/client-1.png" class="img-fluid" alt="" data-aos="zoom-in">
                </div>

                <div class="col-lg-2 col-md-4 col-6">
                    <img src="assets/img/clients/client-2.png" class="img-fluid" alt="" data-aos="zoom-in"
                        data-aos-delay="100">
                </div>

                <div class="col-lg-2 col-md-4 col-6">
                    <img src="assets/img/clients/client-3.png" class="img-fluid" alt="" data-aos="zoom-in"
                        data-aos-delay="200">
                </div>

                <div class="col-lg-2 col-md-4 col-6">
                    <img src="assets/img/clients/client-4.png" class="img-fluid" alt="" data-aos="zoom-in"
                        data-aos-delay="300">
                </div>

                <div class="col-lg-2 col-md-4 col-6">
                    <img src="assets/img/clients/client-5.png" class="img-fluid" alt="" data-aos="zoom-in"
                        data-aos-delay="400">
                </div>

                <div class="col-lg-2 col-md-4 col-6">
                    <img src="assets/img/clients/client-6.png" class="img-fluid" alt="" data-aos="zoom-in"
                        data-aos-delay="500">
                </div>

            </div>

        </div>
    </section>

    <section id="services" class="services">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>Jurusan</h2>
                <p>Magnam dolores commodi suscipit eius consequatur ex aliquid fug</p>
            </div>

            <div class="row">
                <div class="col-md-8 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon"><i class="bx bxl-dribbble"></i></div>
                        <h4 class="title"><a href="">Smart Factoring</a></h4>
                        <p class="description">Smart Factory adalah konsep manufaktur yang mengintegrasikan teknologi
                            digital dan kecerdasan buatan (AI) ke dalam seluruh proses produksi. Tujuannya adalah untuk
                            menciptakan sistem produksi yang otomatis, terhubung, dan adaptif.</p>
                    </div>
                </div>

                <div class="col-md-8 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon"><i class="bx bx-file"></i></div>
                        <h4 class="title"><a href="">3D Design</a></h4>
                        <p class="description">Pelatihan UG-NX dari SIEMENS—perangkat lunak yang digunakan secara
                            universal—akan secara signifikan meningkatkan kemampuan kerja para peserta. Bagi peserta
                            yang baru terjun ke dunia CAD 3D, pelatihan akan dimulai dari dasar-dasarnya, memastikan
                            mereka dapat dengan mudah mengikuti pembelajaran</p>
                    </div>
                </div>

                <div class="col-md-8 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon"><i class="bx bx-tachometer"></i></div>
                        <h4 class="title"><a href="">Adminitrasi</a></h4>
                        <p class="description">Selain Smart Factoring dan 3D Design Yayasan hanuri edukasi centre akan
                            memberikan program pelatihan Admin. ( BAHASA KOREA + MS OFFICE AKUNTANSI + PAJAK ) </p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Services Section -->


    <section id="counts" class="counts">
        <div class="container">

            <div class="row">
                <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-xl-start"
                    data-aos="fade-right" data-aos-delay="150">
                    <img src="assets/img/counts-img.svg" alt="" class="img-fluid">
                </div>

                <div class="col-xl-7 d-flex align-items-stretch pt-4 pt-xl-0" data-aos="fade-left"
                    data-aos-delay="300">
                    <div class="content d-flex flex-column justify-content-center">
                        <div class="row">
                            <div class="col-md-6 d-md-flex align-items-md-stretch">
                                <div class="count-box">
                                    <i class="bi bi-emoji-smile"></i>
                                    <span data-purecounter-start="0" data-purecounter-end="65"
                                        data-purecounter-duration="1" class="purecounter"></span>
                                    <p><strong>Happy Clients</strong> consequuntur voluptas nostrum aliquid ipsam
                                        architecto ut.</p>
                                </div>
                            </div>

                            <div class="col-md-6 d-md-flex align-items-md-stretch">
                                <div class="count-box">
                                    <i class="bi bi-journal-richtext"></i>
                                    <span data-purecounter-start="0" data-purecounter-end="85"
                                        data-purecounter-duration="1" class="purecounter"></span>
                                    <p><strong>Projects</strong> adipisci atque cum quia aspernatur totam laudantium
                                        et quia dere tan</p>
                                </div>
                            </div>

                            <div class="col-md-6 d-md-flex align-items-md-stretch">
                                <div class="count-box">
                                    <i class="bi bi-clock"></i>
                                    <span data-purecounter-start="0" data-purecounter-end="18"
                                        data-purecounter-duration="1" class="purecounter"></span>
                                    <p><strong>Years of experience</strong> aut commodi quaerat modi aliquam nam
                                        ducimus aut voluptate non vel</p>
                                </div>
                            </div>

                            <div class="col-md-6 d-md-flex align-items-md-stretch">
                                <div class="count-box">
                                    <i class="bi bi-award"></i>
                                    <span data-purecounter-start="0" data-purecounter-end="15"
                                        data-purecounter-duration="1" class="purecounter"></span>
                                    <p><strong>Awards</strong> rerum asperiores dolor alias quo reprehenderit eum et
                                        nemo pad der</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- End .content-->
                </div>
            </div>

        </div>
    </section>
    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>Tentang Kami</h2>
            </div>

            <div class="row content">
                <div class="col-lg-12 justify-content-center text-cente" data-aos="fade-up" data-aos-delay="150">
                    Yayasan Hanuri Edukasi Centre adalah yayasan non-profit di bawah naungan PT. Hanuri A&E yang
                    dibangun dengan tujuan memberikan anak-anak muda yang kurang mampu kesempatan untuk melanjutkan
                    pendidikan tinggi dan memberikan bekal agar mereka siap bersaing dan menghadapi dunia kerja,
                    terutama dalam lingkungan perusahaan asing.
                    <p></p>
                </div>
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="150">
                    <p>
                    <H3>Visi</H3>
                    Menjadi yayasan yang mendorong inklusivitas pendidikan, memberikan kesempatan yang setara bagi
                    anak-anak keterbatasan ekonomi untuk meningkatkan keterampilan dan lapangan pekerjaan, sehingga
                    menciptakan generasi yang berdaya saing dan berkontribusi positif dalam pembangunan masyarakat
                    </p>
                    <ul>
                        <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo
                            consequat</li>
                        <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate
                            velit</li>
                        <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo
                            consequat</li>
                    </ul>
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="300">
                    <p>
                    <h3>Misi</h3>
                    Dalam program-program yang menitikberatkan pada keterampilan, yayasan tidak hanya mempersiapkan
                    siswa untuk sukses profesional tetapi juga memupuk jiwa kewirausahaan dan kemandirian. Kolaborasi
                    dengan industri dan perusahaan mendukung kesesuaian kurikulum dengan tuntutan dunia kerja, sementara
                    pendampingan karir dan pembangunan komunitas pendidikan yang kokoh memastikan kesinambungan program
                    ini.
                    </p>
                </div>
            </div>

        </div>
    </section>

    <section id="schedule" class="timeline_area section_padding_130">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>Skema Pendaftaran</h2>
                <p>Calon Peserta Didik Baru Hanuri Edukasi Centre 2024 Batch 1 </br> Jalur SMA/SMK Afiliasi</p>
            </div>

            <div class="row">
                <div class="col-12">
                    <!-- Timeline Area-->
                    <div class="apland-timeline-area">
                        <!-- Single Timeline Content-->
                        <div class="single-timeline-area">
                            <div class="timeline-date wow fadeInLeft" data-wow-delay="0.1s"
                                style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInLeft;">
                                <p>Oktober</p>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="single-timeline-content d-flex wow fadeInLeft w-100"
                                        data-wow-delay="0.3s"
                                        style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft; width: 18rem;">
                                        <div class="timeline-icon"><i class="fa fa-address-card"
                                                aria-hidden="true"></i></div>
                                        <div class="timeline-text">
                                            <p>Penerimaan Peserta Didik</p>
                                            <p><cite>01 Oct s/d 10 Nov 2024</cite>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="single-timeline-content d-flex wow fadeInLeft w-100"
                                        data-wow-delay="0.5s"
                                        style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
                                        <div class="timeline-icon"><i class="fa fa-archive" aria-hidden="true"></i>
                                        </div>
                                        <div class="timeline-text">
                                            <p>Seleksi Administratif Peserta</p>
                                            <p><cite>11 Nov s/d 15 Nov 2024</cite></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Timeline Content-->
                        <div class="single-timeline-area">
                            <div class="timeline-date wow fadeInLeft" data-wow-delay="0.1s"
                                style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInLeft;">
                                <p>......</p>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="single-timeline-content d-flex wow fadeInLeft" data-wow-delay="0.3s"
                                        style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">
                                        <div class="timeline-icon"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        </div>
                                        <div class="timeline-text">
                                            <p>Interview Peserta</p>
                                            <p><cite>16 Nov s/d 05 Des 2024</cite></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="single-timeline-content d-flex wow fadeInLeft" data-wow-delay="0.5s"
                                        style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
                                        <div class="timeline-icon"><i class="fa fa-desktop" aria-hidden="true"></i>
                                        </div>
                                        <div class="timeline-text">
                                            <p>Pengumuman</p>
                                            <p><cite>10 Des 2024</cite></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Timeline Content-->
                        <div class="single-timeline-area">
                            <div class="timeline-date wow fadeInLeft" data-wow-delay="0.1s"
                                style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInLeft;">
                                <p>Januari</p>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="single-timeline-content d-flex wow fadeInLeft" data-wow-delay="0.3s"
                                        style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">
                                        <div class="timeline-icon"><i class="fa fa-id-card" aria-hidden="true"></i>
                                        </div>
                                        <div class="timeline-text">
                                            <p>Orientasi Tahap 1</p>
                                            <p><cite>16 Des 2024</cite></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="single-timeline-content d-flex wow fadeInLeft" data-wow-delay="0.5s"
                                        style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
                                        <div class="timeline-icon"><i class="fa fa-desktop" aria-hidden="true"></i>
                                        </div>
                                        <div class="timeline-text">
                                            <p>Orientasi Tahap 2</p>
                                            <p><cite>06 Jan 2024</cite></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="single-timeline-content d-flex wow fadeInLeft" data-wow-delay="0.7s"
                                        style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInLeft;">
                                        <div class="timeline-icon"><i class="fa fa-picture-o" aria-hidden="true"></i>
                                        </div>
                                        <div class="timeline-text">
                                            <p>Pelaksanaan Pendidikan</p>
                                            <p><cite>15 Jan 2025</cite></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



</main><!-- End #main -->
@include('layouts.footer')
