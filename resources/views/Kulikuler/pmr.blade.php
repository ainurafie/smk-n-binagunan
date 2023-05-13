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
    <title>PMR Wirawisesa</title>
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
        style="background-image: url('../../assets/image/pmr.png');">
        <div class="items-center flex flex-col justify-center banner">
            <h1 class="text-white lg:text-[32px] text-[22px] text-center font-open-sans font-bold">PMR Wirawisesa</h1>
        </div>
    </div>
    <div class="lg:px-[123px] my-[20px] px-5 lg:mt-[57px]">
        <h1 class="font-open-sans text-black text-justify">Ekstrakurikuler PMR adalah salah satu ekstrakurikuler yang diminati para siswa di SMK Negeri 1 Binangun. Bagi siswa yang memiliki jiwa sosial tinggi dan ingin menolong sesama, PMR ini sangat cocok untuk dipilih menjadi kegiatan ekstrakurikuler. Ekstrakurikuler PMR di SMK Negeri 1Binangun juga memiliki organisasi tersendiri yaitu PMR Wirawisesa. PMR Wirawisesa juga pernah mengikuti acara atau event tertentu seperti JUMBARA pada tahun 2020.</h1>
        <br>
        <h1 class="font-open-sans text-black text-justify">Ada banyak manfaat yang akan dirasakan jika mengikuti ekstrakurikuler PMR. Seperti memiliki bekal yang mumpuni untuk memberikan pertolongan pertama kepada orang lain maupun diri sendiri. Selain itu dengan mengikuti kegiatan PMR juga bisa melatih kepemimpinan.</h1>
        <h1 class="font-open-sans text-black text-justify">Tugas PMR :</h1>
        <ul class="ul font-open-sans px-4">
            <li>Memberi pertolongan pertama kepada siswa atau teman di sekolah yang sedang sakit ataupun mengalami kecelakaan ringan di lingkungan sekolah.</li>
            <li>Mengadakan kegiatan sosial</li>
            <li>Menggalang dana kemanusiaan</li>
            <li>Mengajak siswa lain untuk menerapkan pola hidup sehat</li>
            <li>Mengurus dan meng jaga UKS</li>
            <li>Selalu siaga terhadap bencana.</li>
            <li>Menjaga kesehatan lingkungan</li>
            <li>Melakukan aksi sosial, seperti mengunjungi panti asuhan atau panti jompo dan membantu puskesmas di desa</li>
        </ul>
        <br><br>
        <h1 class="font-open-sans text-base text-black font-bold text-justify">JADWAL EKSTRAKULIKULER PMR</h1>
        <h1 class="font-open-sans text-base text-black text-justify">Hari : Kamis</h1>
        <h1 class="font-open-sans text-base text-black text-justify">Pukul : 15.00 - 17.00</h1>
    </div>
    <livewire:footer.footer />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.5/iconify-icon.min.js"></script>
</body>


</html>
