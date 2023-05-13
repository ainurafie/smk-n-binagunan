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
    <title>English Club</title>
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
        style="background-image: url('../../assets/image/foto.png');">
        <div class="items-center flex flex-col justify-center banner">
            <h1 class="text-white lg:text-[32px] text-[22px] text-center font-open-sans font-bold">English Club</h1>
        </div>
    </div>
    <div class="lg:px-[123px] my-[20px] px-5 lg:mt-[57px]">
        <h1 class="font-open-sans text-black text-justify">Ekstrakuikuler English Club adalah sebuah wadah bagi peserta didik dalam menyalurkan minat dan bakat serta pengetahuan di bidang Bahasa Inggris. Tujuan utama didirikannya ektrakurikuler English Club adalah untuk meningkatkan kemampuan individu mengenai Bahasa Inggris terutama keterampilan dalam berbicara di depan publik. Selain itu, peserta didik juga dapat menyalurkan kemampuannya dalam berbahasa inggris dengan mengikuti kompetisi sesuai dengan bidang yang diinginkan. </h1>
        <h1 class="font-open-sans text-black text-justify">Berikut beberapa kegiatan yang dioperasikan dalam ektrakurikuler English Club:</h1>
        <ul class="ul font-open-sans px-4">
            <li>Public Speaking</li>
            <li>Storytelling</li>
            <li>English Speech</li>
            <li>News Casting</li>
            <li>Kegiatan-kegiatan lainnya</li>
        </ul>
        <br><br>
        <h1 class="font-open-sans text-base text-black font-bold text-justify">JADWAL EKSTRAKULIKULER ENGLISH CLUB</h1>
        <h1 class="font-open-sans text-base text-black text-justify">Hari : Sabtu</h1>
        <h1 class="font-open-sans text-base text-black text-justify">Pukul : 08.00 - 10.00</h1>
    </div>
    <livewire:footer.footer />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.5/iconify-icon.min.js"></script>
</body>


</html>
