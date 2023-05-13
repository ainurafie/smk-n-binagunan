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
    <title>Ekstrakulikuler</title>
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
    <div class="lg:px-[120px] my-[20px] px-5 lg:mt-60">
        <h1 class="font-open-sans text-[27px] font-semibold text-black text-justify lg:px-16 px-5 mb-[50px]">Ekstrakulikuler</h1>

        <div class="flex justify-center flex-wrap lg:flex-nowrap gap-11">

            <div
                class="max-w-sm bg-white border border-gray-200 rounded-lg shadow">
                <a href="/siswa/kulikuler/badminton">
                    <img class="rounded-t-lg" src="../../assets/image/card8.png" alt="" />
                </a>
                <div class="p-5">
                    <a href="/siswa/kulikuler/badminton">
                        <h5 class="mb-4 mt-8 text-2xl font-bold tracking-tight text-gray-900">Badminton</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 text-justify">Badminton atau bulutangkis merupakan ekstrakurikuler bidang olahraga yang didalamnya melatih berbagai teknik dan strategi dalam bermain bulutangkis</p>
                </div>
            </div>

            <div
                class="max-w-sm bg-white border border-gray-200 rounded-lg shadow">
                <a href="/siswa/kulikuler/voli">
                    <img class="rounded-t-lg" src="../../assets/image/card1.png" alt="" />
                </a>
                <div class="p-5">
                    <a href="/siswa/kulikuler/voli">
                        <h5 class="mb-4 mt-8 text-2xl font-bold tracking-tight text-gray-900">Bola Voli</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 text-justify">Voli adalah permainan olahraga yang dimainkan oleh dua grup berlawanan. Masing-masing grup memiliki enam orang pemain</p>
                </div>
            </div>
            <div
                class="max-w-sm bg-white border border-gray-200 rounded-lg shadow">
                <a href="/siswa/kulikuler/basket">
                    <img class="rounded-t-lg" src="../../assets/image/card2.png" alt="" />
                </a>
                <div class="p-5">
                    <a href="/siswa/kulikuler/basket">
                        <h5 class="mb-4 mt-8 text-2xl font-bold tracking-tight text-gray-900">Basket</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 text-justify">Basket merupakan salah satu ekstrakurikuler yang ada di SMK Negeri 1 Binangun. Ekstrakurikuler basket ini menjadi wadah untuk menyalurkan hobi, minat, dan bakat siswa</p>
                </div>
            </div>

        </div>
        <div class="flex justify-center flex-wrap lg:flex-nowrap gap-11" style="margin-top: 57px;">

            <div
                class="max-w-sm bg-white border border-gray-200 rounded-lg shadow">
                <a href="/siswa/kulikuler/pmr">
                    <img class="rounded-t-lg" src="../../assets/image/card4.png" alt="" />
                </a>
                <div class="p-5">
                    <a href="/siswa/kulikuler/pmr">
                        <h5 class="mb-4 mt-8 text-2xl font-bold tracking-tight text-gray-900">PMR Wirawisesa</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 text-justify">Ekstrakurikuler PMR adalah salah satu ekstrakurikuler yang diminati para siswa di SMK Negeri 1 Binangun. Bagi siswa yang memiliki jiwa sosial tinggi dan ingin menolong sesama</p>

                </div>
            </div>

            <div
                class="max-w-sm bg-white border border-gray-200 rounded-lg shadow">
                <a href="/siswa/kulikuler/english">
                    <img class="rounded-t-lg" src="../../assets/image/card10.png" alt="" />
                </a>
                <div class="p-5">
                    <a href="/siswa/kulikuler/english">
                        <h5 class="mb-4 mt-8 text-2xl font-bold tracking-tight text-gray-900">English Club</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 text-justify">Ekstrakuikuler English Club adalah sebuah wadah bagi peserta didik dalam menyalurkan minat dan bakat serta pengetahuan di bidang Bahasa Inggris</p>

                </div>
            </div>

            <div
                class="max-w-sm bg-white border border-gray-200 rounded-lg shadow">
                <a href="/siswa/kulikuler/sepakbola">
                    <img class="rounded-t-lg" src="../../assets/image/card3.png" alt="" />
                </a>
                <div class="p-5">
                    <a href="/siswa/kulikuler/sepakbola">
                        <h5 class="mb-4 mt-8 text-2xl font-bold tracking-tight text-gray-900">Sepak Bola</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 text-justify">Salah satu kegiatan ekstrakurikuler di SMK Negeri 1 Binangun adalah Ekstrakulikuler Sepak Bola</p>

                </div>
            </div>

        </div>
        <div class="flex justify-center flex-wrap lg:flex-nowrap gap-11" style="margin-top: 57px;">

            <div
                class="max-w-sm bg-white border border-gray-200 rounded-lg shadow">
                <a href="/siswa/kulikuler/fotografi">
                    <img class="rounded-t-lg" src="../../assets/image/card9.png" alt="" />
                </a>
                <div class="p-5">
                    <a href="/siswa/kulikuler/fotografi">
                        <h5 class="mb-4 mt-8 text-2xl font-bold tracking-tight text-gray-900">Fotografi</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 text-justify">Fotografi merupakan aktivitas mengambil gambar melalui kamera untuk menghasilkan karya seni dan bisa dinikmati baik diri sendiri atau publik</p>

                </div>
            </div>

            <div
                class="max-w-sm bg-white border border-gray-200 rounded-lg shadow">
                <a href="/siswa/kulikuler/jepang">
                    <img class="rounded-t-lg" src="../../assets/image/ekskul japan.png" alt="" />
                </a>
                <div class="p-5">
                    <a href="/siswa/kulikuler/jepang">
                        <h5 class="mb-4 mt-8 text-2xl font-bold tracking-tight text-gray-900">Bahasa Jepang</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 text-justify">Ekstrakulikuler Bahasa Jepang merupakan satu dari banyak ekskul yang terdapat di SMK Negeri 1 Binangun</p>

                </div>
            </div>

            <div
                class="max-w-sm bg-white border border-gray-200 rounded-lg shadow">
                <a href="/siswa/kulikuler/futsal">
                    <img class="rounded-t-lg" src="../../assets/image/card5.png" alt="" />
                </a>
                <div class="p-5">
                    <a href="/siswa/kulikuler/futsal">
                        <h5 class="mb-4 mt-8 text-2xl font-bold tracking-tight text-gray-900">Futsal</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 text-justify">Futsal adalah salah satu olahraga paling populer di kalangan anak muda sekarang, karena olahraga ini adalah turunan dari sepak bola tapi dengan jumlah pemain yang lebih sedikit dan luas</p>

                </div>
            </div>

        </div>
        <div class="flex justify-center flex-wrap lg:flex-nowrap gap-11" style="margin-top: 57px;">

            <div
                class="max-w-sm bg-white border border-gray-200 rounded-lg shadow">
                <a href="/siswa/kulikuler/musik">
                    <img class="rounded-t-lg" src="../../assets/image/card12.png" alt="" />
                </a>
                <div class="p-5">
                    <a href="/siswa/kulikuler/musik">
                        <h5 class="mb-4 mt-8 text-2xl font-bold tracking-tight text-gray-900">Musik</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 text-justify">Musik adalah ekspresi perasaan yang dikeluarkan secara teratur dalam bentuk bunyi</p>

                </div>
            </div>

            <div
                class="max-w-sm bg-white border border-gray-200 rounded-lg shadow">
                <a href="/siswa/kulikuler/rebana">
                    <img class="rounded-t-lg" src="../../assets/image/card6.png" alt="" />
                </a>
                <div class="p-5">
                    <a href="/siswa/kulikuler/rebana">
                        <h5 class="mb-4 mt-8 text-2xl font-bold tracking-tight text-gray-900">Rebana</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 text-justify">Rebana atau hadroh merupakan kesenian rebana yang mengakar pada kebudayaan Islam yang sering disebut sebagai kegiatan syiar lewat syair</p>

                </div>
            </div>

            <div
                class="max-w-sm bg-white border border-gray-200 rounded-lg shadow">
                <a href="/siswa/kulikuler/it">
                    <img class="rounded-t-lg" src="../../assets/image/card11.png" alt="" />
                </a>
                <div class="p-5">
                    <a href="/siswa/kulikuler/it">
                        <h5 class="mb-4 mt-8 text-2xl font-bold tracking-tight text-gray-900">IT Club</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 text-justify">Ekstrakulikuler IT Club ini di harapkan siswa siswi dapat bersaing dalam hal IT, selain itu pula dapat meningkatkan kreatifitas setiap siswa</p>

                </div>
            </div>

        </div>

    </div>
    <livewire:footer.footer />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.5/iconify-icon.min.js"></script>975
</body>


</html>
