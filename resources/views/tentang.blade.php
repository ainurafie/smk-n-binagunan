<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Open+Sans:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.css" rel="stylesheet" />
    <title>Tentang Kami</title>
    <link rel="icon" href="../../assets/image/logo.png">
    @vite('resources/css/app.css')
    <style>
        .banner {
            height: 689px;
            width: 100%;
        }

        .ul {
            list-style-type: decimal;
            font-size: 16px;
        }

        .ul2 {
            list-style-type: upper-alpha;
            font-size: 16px;
        }

        .ul3 {
            list-style-type: lower-alpha;
            font-size: 16px;
        }

        .p {
            font-weight: 400;
            font-size: 16px;
        }

        @media screen and (max-width: 780px) {
            .banner {
                height: 300px;
            }
        }
    </style>
</head>

<body>
    <livewire:navbar.navbar2 />
    <livewire:navbar.navbar />
    <div class="bg-no-repeat bg-center bg-cover lg:mt-40 mt-40 banner lg:w-full"
        style="background-image: url('../../assets/image/tentang.png');">
        <div class="items-center flex flex-col justify-center banner">
            <h1 class="text-white lg:text-[32px] text-[22px] text-center font-open-sans font-bold">Tentang Kami</h1>
        </div>
    </div>
    <div class="lg:px-[123px] my-[20px] px-10 lg:mt-[57px]">
        <div class="flex justify-center w-full">
            <img src="../../assets/image/logo3.png" alt="">
        </div>
        <h1 class="font-open-sans text-center text-[#1847A1] font-bold my-8" style="font-size:40px; ">SMK NEGERI 1
            BINANGUN</h1>
        <h1 class="font-open-sans text-[#434343] text-center" style="font-size:24px;">SMK UNGGULAN YANG MENGHASILKAN SDM
            BERDAYA SAING TINGGI</h1>
        <div class="flex justify-center">
            <hr class="my-10 h-1  border-0" style="background-color: #5478B8; width:215px">
        </div>
        <h1 class="font-open-sans text-black text-justify" style="font-size: 22px;">Sekolah Menengah Kejuruan (SMK)
            Negeri 1 Binangun, adalah lembaga pendidikan yang berada pada level SMK dengan penekanan pendidikan dan
            pelatihan pada pemberian bekal kejuruan, untuk mempersiapkan lulusan dapat memasuki lapangan kerja. SMK
            Negeri 1 Binangun merupakan Sekolah Menengah Negeri di wilayah kecamatan Binangun-Cilacap yang berdiri tahun
            2008 dengan Nomor SK Pendirian 421.5/249/33/2008 tanggal 19 maret 2008. SMK Negeri 1 Binangun beralamat di
            Jalan Lapangan Rt.04 Rw.02 Desa Jati Kecamatan Binangun Kabupaten Cilacap</h1>
        <br><br>
        <h1 class="font-open-sans text-black text-justify" style="font-size: 22px;">SMK Negeri 1 Binangun adalah sekolah
            menengah kejuruan yang termasuk dalam bidang atau kelompok teknologi informasi. Sesuai dengan bidangnya SMK
            Negeri 1 Binangun memiliki 4 program keahlian/jurusan yaitu Teknik Kendaraan Ringan, Teknik Komputer dan
            Jaringan, Multimedia dan Teknik Pemesinan.</h1>
        <br><br>
        <h1 class="font-open-sans text-black text-justify" style="font-size: 22px;">SMK Negeri 1 Binangun juga memiliki
            Bursa Kerja Khusus (BKK) yakni sebuah lembaga yang dibentuk sebagai unit pelaksana yang memberikan pelayanan
            dan informasi lowongan kerja, pelaksana pemasaran, penyaluran dan penempatan tenaga kerja. Dengan adanya BKK
            ini akan memudahkan penyaluran calon tenaga kerja lulusan SMK ke dunia usaha dan industri dan memudahkan
            penyebaran informasi kepada para alumni ataupun para lulusan SMK lain yang membutuhkan informasi tentang
            lowongan kerja.</h1>
        <div style="margin-bottom: 128px; margin-top:128px;">
            <div class="">
                <h1 class="font-open-sans text-center text-[#0B3B86] font-bold my-8 underline"
                    style="font-size:48px; text-underline-offset: 24px;">Visi</h1>
            </div>
            <h1 class="font-open-sans text-black text-justify mt-[50px]" style="font-size: 22px;">Terciptanya tenaga
                kerja
                tingkat menengah yang potensial dan handal untuk memenuhi tuntutan kebutuhan pembangunan baik pada masa
                sekarang maupun yang akan datang, sejalan dengan tuntutan pasar bebas.
            </h1>
        </div>
        <div style="margin-bottom: 128px;">
            <div class="">
                <h1 class="font-open-sans text-center text-[#0B3B86] font-bold my-8 underline"
                    style="font-size:48px; text-underline-offset: 24px;">Misi</h1>
            </div>
            {{-- <h1 class="font-open-sans text-black text-justify mt-[50px]" style="font-size: 22px;">Terciptanya tenaga
                kerja
                tingkat menengah yang potensial dan handal untuk memenuhi tuntutan kebutuhan pembangunan baik pada masa
                sekarang maupun yang akan datang, sejalan dengan tuntutan pasar bebas.
            </h1> --}}
            <ul class="ul font-open-sans text-black text-justify mt-[50px]" style="font-size: 22px;">
                <li>Mengembangkan system pendidikan dan pelatihan menengah kejuruan yang adaptif, fleksibel dan
                    berwawasan global.</li>
                <li>Mengintegrasikan pendidikan dan pelatihan menengah kejuruan yang berwawasan mutu dan keunggulan,
                    profesional dan berorientasi masa depan. </li>
                <li>Mewujudkan layanan prima dan upaya memberdayakan sekolah dan masyarakat.</li>
                <li>Mengembangkan system belajar yang berakar pada norma dan nilai budaya indonesia.</li>
            </ul>
        </div>
        <div class="lg:block hidden" style="margin-bottom: 128px;">
            <div class="">
                <h1 class="font-open-sans text-center text-[#0B3B86] font-bold" style="font-size:48px;">Sarana
                    Prasarana</h1>
                <div class="flex justify-center">
                    <hr class="my-10 h-1  border-0" style="background-color: #5478B8; width:238px">
                </div>
            </div>
            <div class="flex" style="gap:49px;">
                <div class="">
                    <img src="../../assets/image/masjid.png" alt="">
                    <h1 class="font-open-sans text-black text-center font-semibold" style="font-size: 22px; margin-top:32px;">Masjid</h1>
                </div>
                <div class="">
                    <img src="../../assets/image/aula.png" alt="">
                    <h1 class="font-open-sans text-black text-center font-semibold" style="font-size: 22px; margin-top:32px;">Aula</h1>
                </div>
            </div>
            <div class="flex mt-8" style="gap:49px;">
                <div class="">
                    <img src="../../assets/image/bengkel.png" alt="">
                    <h1 class="font-open-sans text-black text-center font-semibold" style="font-size: 22px; margin-top:32px;">Bengkel TKR</h1>
                </div>
                <div class="">
                    <img src="../../assets/image/lab-tkj.png" alt="">
                    <h1 class="font-open-sans text-black text-center font-semibold" style="font-size: 22px; margin-top:32px;">Lab TKJ</h1>
                </div>
            </div>
            <div class="flex mt-8" style="gap:49px;">
                <div class="">
                    <img src="../../assets/image/lab-mulmet.png" alt="">
                    <h1 class="font-open-sans text-black text-center font-semibold" style="font-size: 22px; margin-top:32px;">Lab Multimedia</h1>
                </div>
                <div class="">
                    <img src="../../assets/image/lapangan.png" alt="">
                    <h1 class="font-open-sans text-black text-center font-semibold" style="font-size: 22px; margin-top:32px;">Lapangan</h1>
                </div>
            </div>
        </div>
        <div class="md:hidden block" style="margin-bottom: 128px;">
            <div class="">
                <h1 class="font-open-sans text-center text-[#0B3B86] font-bold" style="font-size:48px;">Sarana
                    Prasarana</h1>
                <div class="flex justify-center">
                    <hr class="my-10 h-1  border-0" style="background-color: #5478B8; width:238px">
                </div>
            </div>
                <div class="">
                    <img src="../../assets/image/masjid.png" alt="">
                    <h1 class="font-open-sans text-black text-center font-semibold" style="font-size: 22px; margin-bottom:32px; margin-top:32px;">Masjid</h1>
                </div>
                <div class="">
                    <img src="../../assets/image/aula.png" alt="">
                    <h1 class="font-open-sans text-black text-center font-semibold" style="font-size: 22px; margin-bottom:32px; margin-top:32px;">Aula</h1>
                </div>

                <div class="">
                    <img src="../../assets/image/bengkel.png" alt="">
                    <h1 class="font-open-sans text-black text-center font-semibold" style="font-size: 22px; margin-bottom:32px; margin-top:32px;">Bengkel TKR</h1>
                </div>
                <div class="">
                    <img src="../../assets/image/lab-tkj.png" alt="">
                    <h1 class="font-open-sans text-black text-center font-semibold" style="font-size: 22px; margin-bottom:32px; margin-top:32px;">Lab TKJ</h1>
                </div>

                <div class="">
                    <img src="../../assets/image/lab-mulmet.png" alt="">
                    <h1 class="font-open-sans text-black text-center font-semibold" style="font-size: 22px; margin-bottom:32px; margin-top:32px;">Lab Multimedia</h1>
                </div>
                <div class="">
                    <img src="../../assets/image/lapangan.png" alt="">
                    <h1 class="font-open-sans text-black text-center font-semibold" style="font-size: 22px; margin-bottom:32px; margin-top:32px;">Lapangan</h1>
                </div>
            
        </div>
    </div>
    <livewire:footer.footer />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.5/iconify-icon.min.js"></script>
</body>


</html>
