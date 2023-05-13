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
    <title>Rebana</title>
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
        style="background-image: url('../../assets/image/rebana.png');">
        <div class="items-center flex flex-col justify-center banner">
            <h1 class="text-white lg:text-[32px] text-[22px] text-center font-open-sans font-bold">Rebana</h1>
        </div>
    </div>
    <div class="lg:px-[123px] my-[20px] px-5 lg:mt-[57px]">
        <h1 class="font-open-sans text-black text-justify">Rebana atau hadroh  merupakan kesenian rebana yang mengakar pada kebudayaan Islam yang sering disebut sebagai kegiatan syiar lewat syair. Di SMK Negeri 1 Binangun, ekstrakurikuler rebana merupakan salah satu kegiatan ekstrakurikuler yang dijadikan sebagai salah satu wadah dalam upaya sekolah menanamkan nilai-nilai karakter maupun ahlak kepada peserta didik. Di sana siswa memulai dengan perkenalan alat-alat rebana, sholawat-sholawat baik yang berbahasa maupun Indonesia.</h1>
        <br>
        <h1 class="font-open-sans text-black text-justify">Selain sebagai Ekstrakurikuler hadroh juga mengandung nilai ibadah. Karena dalam kegiatan nya para siswa melantunkan sholawat dengan semangat dan khusyu. SMK Negeri 1 Binangun juga memiliki grup hadroh yang terdiri dari siswa siswi. Grup rebana SMK Negeri 1 Binangun sering mengisi acara keagamaan di sekolah seprti acara isro Mi’roj dan acara keagamaan lainnya.</h1>
        <br><br>
        <h1 class="font-open-sans text-base text-black font-bold text-justify">JADWAL EKSTRAKULIKULER REBANA</h1>
        <h1 class="font-open-sans text-base text-black text-justify">Hari : Jum'at</h1>
        <h1 class="font-open-sans text-base text-black text-justify">Pukul : 15.00 - 17.00</h1>
    </div>
    <livewire:footer.footer />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.5/iconify-icon.min.js"></script>
</body>


</html>
