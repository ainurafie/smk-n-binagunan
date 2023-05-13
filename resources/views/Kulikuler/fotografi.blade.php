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
    <title>Fotografi</title>
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
            <h1 class="text-white lg:text-[32px] text-[22px] text-center font-open-sans font-bold">Fotografi</h1>
        </div>
    </div>
    <div class="lg:px-[123px] my-[20px] px-5 lg:mt-[57px]">
        <h1 class="font-open-sans text-black text-justify">Fotografi merupakan aktivitas mengambil gambar melalui kamera untuk menghasilkan karya seni dan bisa dinikmati baik diri sendiri atau publik. Fotografi sebagai salah satu bidang seni dan keterampilan olah visual berbasis citra foto. Dalam kebutuhan perkembangan era teknologi informasi dan komunikasi saat ini, kebutuhan penyajian informasi dan karya seni olah foto pun banyak menyerap tenaga kreatif muda untuk terjun dan berkarya dibidang ini</h1>
        <br>
        <h1 class="font-open-sans text-black text-justify">Ekstrakurikuler fotografi dapat menjadi sarana belajar fotografi bagi siswa siswi di sekolah. Berbagai teknik memotret akan dijabarkan dan dipraktekkan langsung oleh siswa peserta ekskul fotografi.  Mereka diharapkan mampu menguasai dengan baik dan benar berbagai teknik pemotretan yang diajarkan.Berbagai teknik memotret akan dijabarkan dan dipraktekkan langsung oleh siswa peserta ekskul fotografi.Penguasaan kamera dan Lensa dengan baik untuk mengatur cahaya yang ada, penempatan obyek/subyek yang akan dan harus diambil  serta memahami komposisi dan teknik pemotretan yang digunakan menjadi dasar siswa untuk mendapatkan foto-foto yang baik.</h1>
        <br><br>
        <h1 class="font-open-sans text-base text-black font-bold text-justify">JADWAL EKSTRAKULIKULER FOTOGRAFI</h1>
        <h1 class="font-open-sans text-base text-black text-justify">Hari : Kamis</h1>
        <h1 class="font-open-sans text-base text-black text-justify">Pukul : 15.00 - 17.00</h1>
    </div>
    <livewire:footer.footer />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.5/iconify-icon.min.js"></script>
</body>


</html>
