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
    <title>Pelantikan OSIS, Pramuka dan PMR</title>
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
        style="background-image: url('../../assets/image/detail5.png');">
        <div class="items-center flex flex-col justify-center banner">
            <h1 class="text-white lg:text-[32px] text-[22px] text-center font-open-sans font-bold">Pelantikan OSIS,
                Pramuka dan PMR</h1>
        </div>
    </div>
    <div class="lg:px-[123px] my-[20px] px-5 lg:mt-[57px]">
        <h1 class="font-open-sans text-black text-justify">Ibu Sri Utami, S.Pd. MM selaku Pembina
            upacara melantik dan memberikan sambutan untuk pengurus baru. Dilanjutkan dengan penyerahan simbolis bendera
            OSIS, Pramuka dan PMR dari ketua periode 2018/2019 kepada ketua baru periode 2019/2020. Disaksikan langsung
            oleh siswa kelas X dan XII yang berada di lapangan upacara.</h1>
        <br>
        <h1 class="font-open-sans text-base text-black text-justify">Berikut adalah nama-nama dari kepengurusan OSIS,
            Pramuka dan PMR SMKN 1 Binangun.</h1>
        <ul class="ul font-open-sans px-4">
            <li>Ketua OSIS Masa Bakti 2018/2019 adalah Wahid Zul Qodar XII TKR 6 digantikan oleh Rindu Seva Saputra.
            </li>
            <li>Ketua Pramuka Masa Bakti 2018/2019 adalah pradana putra Elkana Ayyugi digantikan oleh Putra Deny.</li>
            <li>Ketua PMR Masa Bakti 2018/2019 adalah Imam Bagus K XII TKR 3 digantikan Rahma Ayuni.</li>
        </ul>
        <br>
        <h1 class="font-open-sans text-base text-black text-justify">Kepala SMK N 1 Binagun, Sri Utami, S.Pd. MM
            menyampaikan harapan dengan diadakannya pelantikan ini, pengurus OSIS, Pramuka dan PMR baru dapat
            menjalankan tugas dan kewajiban dengan benar. Tidak melulu sibuk dengan organisasinya, tetapi masih ingat
            tugas utamanya sebagai pelajar. Sebagaimana ilmu yang sudah mereka dapatkan selama LDKMOS, dapat seimbang
            antara tugas sekolah dan organisasi.
            Setelah acara pelantikan deilanjutkan dengan penyerahan penghargaan kepada siswa yang mengikuti LDKMOS.
            Semoga kepengurusan baru, dapat meluruskan, memperbaiki serta dapat berinovasi lebih baik lagi dari
            kepengurusan sebelumnya. Sukses untuk pengurus 2018/2019, dan selamat menunaikan amanah untuk pengurus
            2019/2020.</h1>
    </div>
    <livewire:footer.footer />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.5/iconify-icon.min.js"></script>
</body>


</html>
