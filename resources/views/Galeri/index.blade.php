<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Open+Sans:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.css" rel="stylesheet" />
    <title>Galeri</title>
    <link rel="icon" href="../../assets/image/logo.png">
    @vite('resources/css/app.css')
    <style>


        .gallery {
            display: flex;
            flex-wrap: wrap;
        }

        .gallery-item {
            width: 354px;
            height: 373px;
            margin: 10px;
            text-decoration: none;
        }

        .gallery-item img {
            position: absolute;
        }

        .text-wrapper {
            position: relative;
            width: 354px;
            height: 373px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            text-align: center;
            color: #fff;
            opacity: 0;
        }

        .text-wrapper:hover {
            transition: all 0.8s ease;
            background: rgba(0, 0, 0, 0.6);
            opacity: 1;
        }

        .name {
            font-size: 1.5em;
        }


        /* Because there is no hover on a touch devide, we need to move the text to the bottom of the image and display it by default */

        @media only screen and (max-width: 1024px) {
            .text-wrapper {
                opacity: 1;
                justify-content: flex-end;
                text-shadow: 1px 1px 1px #000;
            }

            .title {
                margin-bottom: 1em;
            }
        }
    </style>

</head>

<body class="bg-[#F7F7F7]">
    <livewire:navbar.navbar2 />
    <livewire:navbar.navbar />
    {{-- section 1 --}}
    <div class="mb-11 lg:mt-40 mt-40">
        <div class="flex justify-center">
            <div class="">
                <h1 class="font-semibold font-open-sans text-[27px] py-8 px-5 md:px-40">Galeri</h1>
                <div class="gallery flex justify-center">
                    <a class="gallery-item" href="#"><img src="../../assets/image/1.png"
                            alt="Headshot of George Washington"><span class="text-wrapper"><span
                                class="name">Pemeriksaan Kesehatan</span></a>

                    <a class="gallery-item" href="#"><img src="../../assets/image/2.png"
                            alt="Headshot of Thomas Jefferson"><span class="text-wrapper"><span class="name">Ujikom
                                LSP P3 TP</span></a>

                    <a class="gallery-item" href="#"><img src="../../assets/image/3.png"
                            alt="Headshot of James Madison"><span class="text-wrapper"><span class="name">Ujikom LSP
                                P3 TKJ</span></a>

                    <a class="gallery-item" href="#"><img src="../../assets/image/4.png"
                            alt="Headshot of James Monroe"><span class="text-wrapper"><span class="name">Ujikom LSP P3
                                TKRO</span></a>

                    <a class="gallery-item" href="#"><img src="../../assets/image/5.png"
                            alt="Headshot of Andrew Jackson"><span class="text-wrapper"><span class="name">KUNJUNGAN
                                SMKN 1 BINANGUN KE SMK RUS KUDUS</span></a>

                    <a class="gallery-item" href="#"><img src="../../assets/image/6.png"
                            alt="Headshot of John Tyler"><span class="text-wrapper"><span class="name">Donor Darah
                                23-01-2023</span></a>

                    <a class="gallery-item" href="#"><img src="../../assets/image/7.png"
                            alt="Headshot of James Polk"><span class="text-wrapper"><span class="name">Polres
                                Cilacap</span></a>
                    <a class="gallery-item" href="#"><img src="../../assets/image/8.png"
                            alt="Headshot of John Adams"><span class="text-wrapper"><span class="name">TUAN RUMAH LKS
                                TKR AUTOMOBILE THECNOLOGY</span></a>

                    <a class="gallery-item" href="#"><img src="../../assets/image/9.png"
                            alt="Headshot of George Washington"><span class="text-wrapper"><span
                                class="name">LKS</span></a>

                    <a class="gallery-item" href="#"><img src="../../assets/image/10.png"
                            alt="Headshot of John Adams"><span class="text-wrapper"><span class="name">LDDK
                                2022</span></a>

                    <a class="gallery-item" href="#"><img src="../../assets/image/11.png"
                            alt="Headshot of Thomas Jefferson"><span class="text-wrapper"><span class="name">MOU
                                BERSAMA ICON+</span></a>
                    <a class="gallery-item" href="#"><img src="../../assets/image/12.png"
                            alt="Headshot of Zachary Taylor"><span class="text-wrapper"><span class="name">HARI GURU
                                NASIONAL 2021</span></a>
                </div>

            </div>

        </div>
    </div>
    <livewire:footer.footer />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.5/iconify-icon.min.js"></script>

</body>

</html>
