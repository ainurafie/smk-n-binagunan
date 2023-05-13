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
    <title>Badminton</title>
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
    <livewire:navbar.navbar3 />
    <livewire:navbar.navbar />
    <div class="bg-no-repeat bg-center bg-cover lg:mt-40 mt-40 banner lg:w-full"
        style="background-image: url('../../assets/image/badminton.png');">
        <div class="items-center flex flex-col justify-center banner">
            <h1 class="text-white lg:text-[32px] text-[22px] text-center font-open-sans font-bold">Badminton</h1>
        </div>
    </div>
    <div class="lg:px-[123px] my-[20px] px-5 lg:mt-[57px]">
        <h1 class="font-open-sans text-black text-justify">Badminton atau bulutangkis merupakan ekstrakurikuler bidang olahraga yang didalamnya melatih berbagai teknik dan strategi dalam bermain bulutangkis. Di SMK Negeri 1 Binangun ekstrakulikuler bulutangkis diadakan setiap 2 kali seminggu pada hari Rabu dan Kamis. Pada ekstrakulikuler ini siswa dapat melatih skill dalam bermain bulutangkis, seperti teknik forehand dan backhand, melatih strategi dalam menentukan pukulan raket serta berbagai latihan fisik lainnya sebagai penunjang dalam olahraga bulutangkis. Dengan adanya kegiatan ekstrakurikuler badminton di harapkan dapat menjadi wadah untuk penyaluran bakat para siswa dan untuk memfasilitasi minat dan bakat yang selama ini sudah muncul di lingkungan sekolah sehingga dapat tersalurkan secara positif dan akhirnya membawa manfaat yang besar bagi prestasi dan pencapaian sekolah.</h1>
        <br><br>
        <h1 class="font-open-sans text-base text-black font-bold text-justify">JADWAL EKSTRAKULIKULER BADMINTON.</h1>
        <h1 class="font-open-sans text-base text-black font-bold text-justify">Badminton Laki-laki</h1>
        <h1 class="font-open-sans text-base text-black text-justify">Hari : Rabu</h1>
        <h1 class="font-open-sans text-base text-black text-justify">Pukul : 15.00 - 17.00</h1>
        <h1 class="font-open-sans text-base text-black font-bold text-justify">Badminton Perempuan</h1>
        <h1 class="font-open-sans text-base text-black text-justify">Hari : Kamis</h1>
        <h1 class="font-open-sans text-base text-black text-justify">Pukul : 15.00 - 17.00</h1>
    </div>
    <livewire:footer.footer />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.5/iconify-icon.min.js"></script>
</body>


</html>
