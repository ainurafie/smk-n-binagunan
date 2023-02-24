<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Open+Sans:wght@400;500;600;700&family=Outfit:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.css" rel="stylesheet" />
    <title>Guru</title>
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
    <div class="lg:px-[120px] my-[20px] px-5 mt-60">
        <h1 class="font-open-sans text-[27px] font-semibold text-black text-justify lg:px-1 px-5 mb-[50px]">Guru SMK N 1
            Binangun</h1>
        <div class="flex justify-center flex-wrap lg:flex-nowrap gap-11">
            <div class="w-72 bg-white">

                <img src="../../assets/image/sri.png" alt="" style="width: 100%" />

                <div class="flex flex-col justify-center items-center mt-8">

                    <h5 class="mb-4 text-2xl font-bold font-outfit text-[#353535] text-center flex flex-wrap">SRI UTAMI,
                        S.Pd, MM</h5>

                    <p class="text-[#5B5B5B] font-outfi">Kepala Sekolah</p>
                </div>
            </div>
        </div>
        <div class="flex justify-center flex-wrap lg:flex-nowrap gap-11" style="margin-top:44px">

            <div class="w-72 bg-white">

                <img src="../../assets/image/muji.png" alt="" style="width: 100%" />

                <div class="flex flex-col justify-center items-center mt-8">

                    <h5 class="mb-4 text-2xl font-bold font-outfit text-[#353535] text-center flex flex-wrap">Muji
                        Sumarni, S.Pd</h5>

                    <p class="text-[#5B5B5B] font-outfi">Bahasa Inggris</p>
                </div>
            </div>

            <div class="w-72 bg-white">

                <img src="../../assets/image/mulyani.png" alt="" style="width: 100%" />

                <div class="flex flex-col justify-center items-center mt-8">

                    <h5 class="mb-4 text-2xl font-bold font-outfit text-[#353535] text-center flex flex-wrap">Muhyani,
                        S.Pd</h5>

                    <p class="text-[#5B5B5B] font-outfi">Produktif TKR</p>
                </div>
            </div>

            <div class="w-72 bg-white">

                <img src="../../assets/image/endang.png" alt="" style="width: 100%" />

                <div class="flex flex-col justify-center items-center mt-8">

                    <h5 class="mb-4 text-2xl font-bold font-outfit text-[#353535] text-center">Endang Sri Lestari, S.Kom
                    </h5>

                    <p class="text-[#5B5B5B] font-outfi">Produktif MM</p>
                </div>
            </div>

            <div class="w-72 bg-white">

                <img src="../../assets/image/junedi.png" alt="" style="width: 100%" />

                <div class="flex flex-col justify-center items-center mt-8">

                    <h5 class="mb-4 text-2xl font-bold font-outfit text-[#353535] text-center flex flex-wrap">Junedi
                        Haryanto, S.Kom</h5>

                    <p class="text-[#5B5B5B] font-outfi">Produktif TKJ</p>
                </div>
            </div>

        </div>
        <div class="flex justify-center flex-wrap lg:flex-nowrap gap-11" style="margin-top:44px">

            <div class="w-72 bg-white">

                <img src="../../assets/image/christin.png" alt="" style="width: 100%" />

                <div class="flex flex-col justify-center items-center mt-8">

                    <h5 class="mb-4 text-2xl font-bold font-outfit text-[#353535] text-center flex flex-wrap">Christin
                        Sumarno, S.Pd</h5>

                    <p class="text-[#5B5B5B] font-outfi">IPAS</p>
                </div>
            </div>

            <div class="w-72 bg-white">

                <img src="../../assets/image/hadi.png" alt="" style="width: 100%" />

                <div class="flex flex-col justify-center items-center mt-8">

                    <h5 class="mb-4 text-2xl font-bold font-outfit text-[#353535] text-center flex flex-wrap">Drs. Hadi
                        Waluyo</h5>

                    <p class="text-[#5B5B5B] font-outfi">Produktif TKR</p>
                </div>
            </div>

            <div class="w-72 bg-white">

                <img src="../../assets/image/dariyah.png" alt="" style="width: 100%" />

                <div class="flex flex-col justify-center items-center mt-8">

                    <h5 class="mb-4 text-2xl font-bold font-outfit text-[#353535] text-center flex flex-wrap">Dariyah,
                        S.Pd</h5>

                    <p class="text-[#5B5B5B] font-outfi">Matematika</p>
                </div>
            </div>

            <div class="w-72 bg-white">

                <img src="../../assets/image/edi.png" alt="" style="width: 100%" />

                <div class="flex flex-col justify-center items-center mt-8">

                    <h5 class="mb-4 text-2xl font-bold font-outfit text-[#353535] text-center flex flex-wrap">Edi
                        Arbinto, S.Pd</h5>

                    <p class="text-[#5B5B5B] font-outfi">Produktif TKR</p>
                </div>
            </div>

        </div>
        <div class="flex justify-center flex-wrap lg:flex-nowrap gap-11" style="margin-top:44px">

            <div class="w-72 bg-white">

                <img src="../../assets/image/askini.png" alt="" style="width: 100%" />

                <div class="flex flex-col justify-center items-center mt-8">

                    <h5 class="mb-4 text-2xl font-bold font-outfit text-[#353535] text-center flex flex-wrap">Askini
                        Khairunnisa, S.Pd.I, M.Pd</h5>

                    <p class="text-[#5B5B5B] font-outfi">PAI</p>
                </div>
            </div>

            <div class="w-72 bg-white">

                <img src="../../assets/image/mugi.png" alt="" style="width: 100%" />

                <div class="flex flex-col justify-center items-center mt-8">

                    <h5 class="mb-4 text-2xl font-bold font-outfit text-[#353535] text-center flex flex-wrap">Mugi
                        Lestari, S.Pd</h5>

                    <p class="text-[#5B5B5B] font-outfi">IPAS</p>
                </div>
            </div>

            <div class="w-72 bg-white">

                <img src="../../assets/image/amik.png" alt="" style="width: 100%" />

                <div class="flex flex-col justify-center items-center mt-8">

                    <h5 class="mb-4 text-2xl font-bold font-outfit text-[#353535] text-center flex flex-wrap">Amik
                        Rosasi, S.Kom</h5>

                    <p class="text-[#5B5B5B] font-outfi">Produktif TKJ</p>
                </div>
            </div>

            <div class="w-72 bg-white">

                <img src="../../assets/image/sukaro.png" alt="" style="width: 100%" />

                <div class="flex flex-col justify-center items-center mt-8">

                    <h5 class="mb-4 text-2xl font-bold font-outfit text-[#353535] text-center flex flex-wrap">Sukarno,
                        S.Pd.Si.Gr</h5>

                    <p class="text-[#5B5B5B] font-outfi">IPAS</p>
                </div>
            </div>

        </div>
        <div class="flex justify-center flex-wrap lg:flex-nowrap gap-11" style="margin-top:44px">

            <div class="w-72 bg-white">

                <img src="../../assets/image/fitrotul.png" alt="" style="width: 100%" />

                <div class="flex flex-col justify-center items-center mt-8">

                    <h5 class="mb-4 text-2xl font-bold font-outfit text-[#353535] text-center flex flex-wrap">Fitrotul
                        Hikmah, S.Pd</h5>

                    <p class="text-[#5B5B5B] font-outfi">IPAS</p>
                </div>
            </div>

            <div class="w-72 bg-white">

                <img src="../../assets/image/harnita.png" alt="" style="width: 100%" />

                <div class="flex flex-col justify-center items-center mt-8">

                    <h5 class="mb-4 text-2xl font-bold font-outfit text-[#353535] text-center flex flex-wrap">Harnita
                        Dwi Afriyanti, S.Pd.Si</h5>

                    <p class="text-[#5B5B5B] font-outfi">Matematika</p>
                </div>
            </div>

            <div class="w-72 bg-white">

                <img src="../../assets/image/heri.png" alt="" style="width: 100%" />

                <div class="flex flex-col justify-center items-center mt-8">

                    <h5 class="mb-4 text-2xl font-bold font-outfit text-[#353535] text-center flex flex-wrap">Heri
                        Purnawan, S.Pd.Gr.</h5>

                    <p class="text-[#5B5B5B] font-outfi">BP/BK</p>
                </div>
            </div>

            <div class="w-72 bg-white">

                <img src="../../assets/image/hendrik.png" alt="" style="width: 100%" />

                <div class="flex flex-col justify-center items-center mt-8">

                    <h5 class="mb-4 text-2xl font-bold font-outfit text-[#353535] text-center flex flex-wrap">Hendrik
                        Novtiana Widiyantoro, S.Pd.Gr.</h5>

                    <p class="text-[#5B5B5B] font-outfi">PJOK</p>
                </div>
            </div>

        </div>
        <div class="flex justify-center flex-wrap lg:flex-nowrap gap-11" style="margin-top:44px">

            <div class="w-72 bg-white">

                <img src="../../assets/image/fitriani.png" alt="" style="width: 100%" />

                <div class="flex flex-col justify-center items-center mt-8">

                    <h5 class="mb-4 text-2xl font-bold font-outfit text-[#353535] text-center flex flex-wrap">Fitriani,
                        S.Pd</h5>

                    <p class="text-[#5B5B5B] font-outfi">Bahasa Indonesia</p>
                </div>
            </div>

            <div class="w-72 bg-white">

                <img src="../../assets/image/lukman.png" alt="" style="width: 100%" />

                <div class="flex flex-col justify-center items-center mt-8">

                    <h5 class="mb-4 text-2xl font-bold font-outfit text-[#353535] text-center flex flex-wrap">Lukman
                        Rian Affandi, S,Pd</h5>

                    <p class="text-[#5B5B5B] font-outfi">Produktif TKJ</p>
                </div>
            </div>

            <div class="w-72 bg-white">

                <img src="../../assets/image/bimo.png" alt="" style="width: 100%" />

                <div class="flex flex-col justify-center items-center mt-8">

                    <h5 class="mb-4 text-2xl font-bold font-outfit text-[#353535] text-center flex flex-wrap">Bimo
                        Rahman Prasetyo, S.Kom</h5>

                    <p class="text-[#5B5B5B] font-outfi">Produktif TKJ</p>
                </div>
            </div>

            <div class="w-72 bg-white">

                <img src="../../assets/image/fikri.png" alt="" style="width: 100%" />

                <div class="flex flex-col justify-center items-center mt-8">

                    <h5 class="mb-4 text-2xl font-bold font-outfit text-[#353535] text-center flex flex-wrap">Fikri
                        Ikhtiyaarullah, S.Kom</h5>

                    <p class="text-[#5B5B5B] font-outfi">MULTIMEDIA</p>
                </div>
            </div>

        </div>

    </div>
    <livewire:footer.footer/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.5/iconify-icon.min.js"></script>
</body>


</html>
