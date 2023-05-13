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
    <title>Musik</title>
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
        style="background-image: url('../../assets/image/musik.png');">
        <div class="items-center flex flex-col justify-center banner">
            <h1 class="text-white lg:text-[32px] text-[22px] text-center font-open-sans font-bold">Musik</h1>
        </div>
    </div>
    <div class="lg:px-[123px] my-[20px] px-5 lg:mt-[57px]">
        <h1 class="font-open-sans text-black text-justify">Musik adalah ekspresi perasaan yang dikeluarkan secara teratur dalam bentuk bunyi. Ekstrakurikuler musik diadakan untuk mengasah bakat dan minat siswa khususnya di seni musik. Jadi skil atau bakat yang dimiliki siswa akan diolah lagi supaya bisa tersalurkan dan bisa ditampilkan ketika ada kegiatan di sekolah SMK Negeri 1 Binangun. Kegiatan yang dilakukan saat ekstra  berdasarkan minat siswa seperti bermain gitar, drum, dan bass. Sehingga dari bakat siswa tersebut akan disatukan menjadi sebuah grup band, dan bisa mengikutsertakan siswa yang sudah terbentuk seninya  untuk mengikuti lomba atau event yang ada di luar sekolah. Tujuan adanya ekstra musik yaitu untuk mengembangkan bakat dan memfasilitasi siswa dalam bermain musik.</h1>
        <br>
        <h1 class="font-open-sans text-black text-justify">sMK Negeri 1 Binangun juga miliki grup band tersendiri yang dibentuk oleh masing-masing siswa san teman-temannya. Grup band tersebut biasaja juga mengisi acara atau event yang ada di SMK Negeri 1 Binangun seperti acara HUT dan perpisahan atau wisuda. Selain itu grup band SMK Negeri 1 Binangun juga pernah mengikuti perlombaan diluar sekolah.</h1>
        <br><br>
        <h1 class="font-open-sans text-base text-black font-bold text-justify">JADWAL EKSTRAKULIKULER MUSIK</h1>
        <h1 class="font-open-sans text-base text-black text-justify">Hari : Rabu</h1>
        <h1 class="font-open-sans text-base text-black text-justify">Pukul : 15.00 - 17.00</h1>
    </div>
    <livewire:footer.footer />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.5/iconify-icon.min.js"></script>
</body>


</html>
