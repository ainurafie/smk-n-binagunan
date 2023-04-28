<!DOCTYPE html>
<html lang="en" class="antialiased">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prestasi</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Open+Sans:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.css" rel="stylesheet" />
    <title>Karyawan</title>
    <link rel="icon" href="../../assets/image/logo.png">
    @vite('resources/css/app.css')
    <!--Replace with your tailwind.css once created-->


    <!--Regular Datatables CSS-->
    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
    <!--Responsive Extension Datatables CSS-->
    <link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet">

    <style>
        /*Overrides for Tailwind CSS */

        /*Form fields*/
        .dataTables_wrapper select,
        .dataTables_wrapper .dataTables_filter input {
            color: #4a5568;
            /*text-gray-700*/
            padding-left: 1rem;
            /*pl-4*/
            /*pl-4*/
            padding-top: .5rem;
            /*pl-2*/
            padding-bottom: .5rem;
            /*pl-2*/
            line-height: 1.25;
            /*leading-tight*/
            border-width: 2px;
            /*border-2*/
            border-radius: .25rem;
            border-color: #edf2f7;
            /*border-gray-200*/
            background-color: #edf2f7;
            /*bg-gray-200*/
        }

        /*Row Hover*/
        table.dataTable.hover tbody tr:hover,
        table.dataTable.display tbody tr:hover {
            background-color: #ebf4ff;
            /*bg-indigo-100*/
        }

        /*Pagination Buttons*/
        .dataTables_wrapper .dataTables_paginate .paginate_button {
            font-weight: 700;
            /*font-bold*/
            border-radius: .25rem;
            /*rounded*/
            border: 1px solid transparent;
            /*border border-transparent*/
        }

        /*Pagination Buttons - Current selected */
        .dataTables_wrapper .dataTables_paginate .paginate_button.current {
            color: #fff !important;
            /*text-white*/
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
            /*shadow*/
            font-weight: 700;
            /*font-bold*/
            border-radius: .25rem;
            /*rounded*/
            background: #667eea !important;
            /*bg-indigo-500*/
            border: 1px solid transparent;
            /*border border-transparent*/
        }

        /*Pagination Buttons - Hover */
        .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
            color: #fff !important;
            /*text-white*/
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
            /*shadow*/
            font-weight: 700;
            /*font-bold*/
            border-radius: .25rem;
            /*rounded*/
            background: #667eea !important;
            /*bg-indigo-500*/
            border: 1px solid transparent;
            /*border border-transparent*/
        }

        /*Add padding to bottom border */
        table.dataTable.no-footer {
            border-bottom: 1px solid #e2e8f0;
            /*border-b-1 border-gray-300*/
            margin-top: 0.75em;
            margin-bottom: 0.75em;
        }

        /*Change colour of responsive icon*/
        table.dataTable.dtr-inline.collapsed>tbody>tr>td:first-child:before,
        table.dataTable.dtr-inline.collapsed>tbody>tr>th:first-child:before {
            background-color: #667eea !important;
            /*bg-indigo-500*/
        }
    </style>



</head>

<body class="bg-gray-100 text-gray-900 tracking-wider leading-normal">
    <livewire:navbar.navbar2 />
    <livewire:navbar.navbar />
    <div class="my-[20px] px-5 mt-60">
        <div class="lg:px-[290px]">
            <h1 class="font-open-sans text-[27px] font-semibold text-black text-justify lg:px-1 px-5 mb-[50px]">Prestasi
            </h1>
        </div>
        <!--Container-->
        <div class="container w-full md:w-4/5 xl:w-3/5  mx-auto px-2">
            <!--Card-->
            <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">


                <table id="example" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                    <thead>
                        <tr class="bg-[#0B3B86] text-white">
                            <th data-priority="1">NO</th>
                            <th data-priority="2">Waktu</th>
                            <th data-priority="3">Prestasi</th>
                            <th data-priority="4">Lomba</th>
                            <th data-priority="5">Tingkat</th>
                            <th data-priority="6">Kategori</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">1</td>
                            <td>25-27 November 2022</td>
                            <td>Juara 2</td>
                            <td>Kerjurnas Subaquatic OBAM Coure Junior Putra</td>
                            <td>Nasional</td>
                            <td>Individu</td>
                        <!-- Rest of your data (refer to https://datatables.net/examples/server_side/ for server side processing)-->
                        <tr>
                            <td class="text-center">2</td>
                            <td>11-13 Januari 2022</td>
                            <td>Juara 1</td>
                            <td>LKS Automobile Technology</td>
                            <td>Kabupaten</td>
                            <td>Individu</td>
                        </tr>
                        <tr>
                            <td class="text-center">3</td>
                            <td>11-13 Januari 2022</td>
                            <td>Juara 1</td>
                            <td>LKS Metrology Tingkat Kabupaten Cilacap</td>
                            <td>Kabupaten</td>
                            <td>Individu</td>
                        </tr>
                        <tr>
                            <td class="text-center">4</td>
                            <td>11-4 Januari 2022</td>
                            <td>Juara 2</td>
                            <td>LKS Graphic Design Technology</td>
                            <td>Kabupaten</td>
                            <td>Individu</td>
                        </tr>
                        <tr>
                            <td class="text-center">5</td>
                            <td>10-14 Januari 2022</td>
                            <td>Juara 3</td>
                            <td>LKS Mecanical Engginering CAD</td>
                            <td>Kabupaten</td>
                            <td>Individu</td>
                        </tr>
                        <tr>
                            <td class="text-center">6</td>
                            <td>10-14 Januari 2022</td>
                            <td>Juara 2</td>
                            <td>LKS Network System Administration</td>
                            <td>Kabupaten</td>
                            <td>Individu</td>
                        </tr>
                        <tr>
                            <td class="text-center">7</td>
                            <td>10-14 Januari 2022</td>
                            <td>Juara 2</td>
                            <td>LKS IT Software Aplication</td>
                            <td>Kabupaten</td>
                            <td>Individu</td>
                        </tr>
                        <tr>
                            <td class="text-center">8</td>
                            <td>24 Mei 2022</td>
                            <td>Juara 2</td>
                            <td>Senam Artistik Meja Lompat Putera POPDA </td>
                            <td>Kabupaten</td>
                            <td>Individu</td>
                        </tr>
                        <tr>
                            <td class="text-center">9</td>
                            <td>27 Mei 2022</td>
                            <td>Juara 3</td>
                            <td>Bola Basket PutrI POPDA Kab. Cilacap</td>
                            <td>Kabupaten</td>
                            <td>Group</td>
                        </tr>
                        <tr>
                            <td class="text-center">10</td>
                            <td>24 Mei 2022</td>
                            <td>Juara 1</td>
                            <td>Senam Artistik Meja Lompat Putera POPDA</td>
                            <td>Kabupaten</td>
                            <td>Individu</td>
                        </tr>
                        <tr>
                            <td class="text-center">11</td>
                            <td>27 Mei 2022</td>
                            <td>Juara 1</td>
                            <td>Renang 100 m Gaya Dada Putra POPDA</td>
                            <td>Kabupaten</td>
                            <td>Individu</td>
                        </tr>
                        <tr>
                            <td class="text-center">12</td>
                            <td>25 Mei 2022</td>
                            <td>Juara 3</td>
                            <td>Sepak Takraw Puteri POPDA Kab. Cilacap</td>
                            <td>Kabupaten</td>
                            <td>Group</td>
                        </tr>
                        <tr>
                            <td class="text-center">13</td>
                            <td>24 Mei 2022</td>
                            <td>Juara 1</td>
                            <td>Senam Artistik Lantai Putera POPDA</td>
                            <td>Kabupaten</td>
                            <td>Individu</td>
                        </tr>
                        <tr>
                            <td class="text-center">14</td>
                            <td>24 Mei 2022</td>
                            <td>Juara 2</td>
                            <td>Senam Artistik Lantai Putera POPDA</td>
                            <td>Kabupaten</td>
                            <td>Individu</td>
                        </tr>
                        <tr>
                            <td class="text-center">15</td>
                            <td>27 Mei 2022</td>
                            <td>Juara 1</td>
                            <td>Pencak Silat Seni Tunggal Puteri POPDA</td>
                            <td>Kabupaten</td>
                            <td>Individu</td>
                        </tr>
                        <tr>
                            <td class="text-center">16</td>
                            <td>27 Mei 2022</td>
                            <td>Juara 2</td>
                            <td>Renang 100 m Gaya Punggung Putra POPDA</td>
                            <td>Kabupaten</td>
                            <td>Individu</td>
                        </tr>
                        <tr>
                            <td class="text-center">17</td>
                            <td>13 Oktober 2020</td>
                            <td>Juara 1</td>
                            <td>(KATA) Katagori SMA Sabuk Coklat</td>
                            <td>Nasional</td>
                            <td>Individu</td>
                        </tr>
                        <tr>
                            <td class="text-center">18</td>
                            <td>12-15 Februari 2020</td>
                            <td>Juara 3</td>
                            <td>Lempar Cakram Putri POPDA SMA/SMK/MA</td>
                            <td>Kabupaten</td>
                            <td>Individu</td>
                        </tr>
                        <tr>
                            <td class="text-center">19</td>
                            <td>12-15 Februari 2020</td>
                            <td>Juara 1</td>
                            <td>Senam Artistik Meja Lompat Putra POPDA SMK</td>
                            <td>Kabupaten</td>
                            <td>Individu</td>
                        </tr>
                        <tr>
                            <td class="text-center">20</td>
                            <td>12-15 Februari 2020</td>
                            <td>Juara 1</td>
                            <td>Bola Voli Pasir Putra POPDA SMA/SMK/MA</td>
                            <td>Kabupaten</td>
                            <td>Group</td>
                        </tr>
                        <tr>
                            <td class="text-center">21</td>
                            <td>12-15 Februari 2020</td>
                            <td>Juara 3</td>
                            <td>Bola Basket Putra POPDA SMA/SMK/MA</td>
                            <td>Kabupaten</td>
                            <td>Group</td>
                        </tr>
                        <tr>
                            <td class="text-center">22</td>
                            <td>12-15 Februari 2020</td>
                            <td>Juara 3</td>
                            <td>Karate Putra Kumite +61 Kg POPDA SMA/SMK/MA</td>
                            <td>Kabupaten</td>
                            <td>Individu</td>
                        </tr>
                        <tr>
                            <td class="text-center">23</td>
                            <td>12-15 Februari 2020</td>
                            <td>Juara 3</td>
                            <td>Senam Artistik Serba Bisa Putra SMA/SMK/MA</td>
                            <td>Kabupaten</td>
                            <td>Individu</td>
                        </tr>
                        <tr>
                            <td class="text-center">24</td>
                            <td>12-15 Februari 2020</td>
                            <td>Juara 3</td>
                            <td>Karate Putra Komite 50 Kg POPDA SMA/SMK/MA</td>
                            <td>Kabupaten</td>
                            <td>Individu</td>
                        </tr>
                        <tr>
                            <td class="text-center">25</td>
                            <td>12-15 Februari 2020</td>
                            <td>Juara 1</td>
                            <td>Tolak Peluru Putri POPDA SMA/SMK/MA</td>
                            <td>Kabupaten</td>
                            <td>Individu</td>
                        </tr>
                        <tr>
                            <td class="text-center">26</td>
                            <td>12-15 Februari 2020</td>
                            <td>Juara 2</td>
                            <td>Estafet 4x400 m Putra POPDA SMA/SMK/MA</td>
                            <td>Kabupaten</td>
                            <td>Individu</td>
                        </tr>
                        <tr>
                            <td class="text-center">27</td>
                            <td>12-15 Februari 2020</td>
                            <td>Juara 2</td>
                            <td>Pancak Silat Putra Kelas D (51-55 Kg) POPDA </td>
                            <td>Kabupaten</td>
                            <td>Individu</td>
                        </tr>
                        <tr>
                            <td class="text-center">28</td>
                            <td>12-15 Februari 2020</td>
                            <td>Juara 2</td>
                            <td>Senam Artistik Lantai Putra POPDA SMA/SMK/MA</td>
                            <td>Kabupaten</td>
                            <td>Individu</td>
                        </tr>
                        <tr>
                            <td class="text-center">29</td>
                            <td>12-15 Februari 2020</td>
                            <td>Juara 3</td>
                            <td>Bulutangkis Ganda Putra POPDA SMA/SMK/MA</td>
                            <td>Kabupaten</td>
                            <td>Group</td>
                        </tr>
                        <tr>
                            <td class="text-center">30</td>
                            <td>12-15 Februari 2020</td>
                            <td>Juara 2</td>
                            <td>Senam Artistik Kuda Pelana Putra POPDA </td>
                            <td>Kabupaten</td>
                            <td>Individu</td>
                        </tr>
                        <tr>
                            <td class="text-center">31</td>
                            <td>27 Agustus 2019</td>
                            <td>Juara 2</td>
                            <td>LKS Networking Support</td>
                            <td>Kabupaten</td>
                            <td>Individu</td>
                        </tr>
                        <tr>
                            <td class="text-center">32</td>
                            <td>27 Agustus 2019</td>
                            <td>Juara 2</td>
                            <td>LKS Automobile Technology</td>
                            <td>Kabupaten</td>
                            <td>Individu</td>
                        </tr>
                        <tr>
                            <td class="text-center">33</td>
                            <td>27 Agustus 2019</td>
                            <td>Juara 3</td>
                            <td>LKS Desain Grafis</td>
                            <td>Kabupaten</td>
                            <td>Individu</td>
                        </tr>
                        <tr>
                            <td class="text-center">34</td>
                            <td>27 Agustus 2019</td>
                            <td>Juara 2</td>
                            <td>LKS ANIMASI tingkat Kabupaten Cilacap</td>
                            <td>Nasional</td>
                            <td>Individu</td>
                        </tr>
                        <tr>
                            <td class="text-center">35</td>
                            <td>15 Agustus 2019</td>
                            <td>Juara 1</td>
                            <td>Gerak Jalan Putri HUT RI-74 Kec. Binangun</td>
                            <td>Kecamatan</td>
                            <td>Individu</td>
                        </tr>
                        <tr>
                            <td class="text-center">36</td>
                            <td>15 Agustus 2019</td>
                            <td>Juara 1</td>
                            <td>Gerak Jalan Putra HUT RI-74 Kec. Binangun</td>
                            <td>Kecamatan</td>
                            <td>Individu</td>
                        </tr>

                        <tr>
                            <td class="text-center">37</td>
                            <td>23 Maret 2019</td>
                            <td>Juara 2</td>
                            <td>Pemilihan Duta Lingkungan Hidup Kategori SMA</td>
                            <td>Kabupaten</td>
                            <td>Individu</td>
                        </tr>
                        <tr>
                            <td class="text-center">38</td>
                            <td>26 Agustus 2019</td>
                            <td>Juara 3</td>
                            <td>Bulutangkis Putra O2SN SMK Provinsi Jateng </td>
                            <td>Provinsi</td>
                            <td>Individu</td>
                        </tr>
                        <tr>
                            <td class="text-center">39</td>
                            <td>01-03 Agustus 2019</td>
                            <td>Juara 3</td>
                            <td>Tari Tradisional (FLS2N) Provinsi Jateng</td>
                            <td>Provinsi</td>
                            <td>Group</td>
                        </tr>

                        <tr>
                            <td class="text-center">40</td>
                            <td>27-30 Juli 2018</td>
                            <td>Juara 2</td>
                            <td>Jumbara PMI Tingkat Kabupaten Cilacap</td>
                            <td>Kabupaten</td>
                            <td>Group</td>
                        </tr>
                        <tr>
                            <td class="text-center">41</td>
                            <td>22-27 Juli 2017</td>
                            <td>Juara 1</td>
                            <td>Jumbara dan Temu Karya Tingkat JATENG (PMI)</td>
                            <td>Provinsi</td>
                            <td>Group</td>
                        </tr>
                        <tr>
                            <td class="text-center">42</td>
                            <td>24-26 November 2017</td>
                            <td>Juara 2</td>
                            <td>Lomba Karya Ilmiah Entrepreneur Project UMP</td>
                            <td>Provinsi</td>
                            <td>Individu</td>
                        </tr>
                        <tr>
                            <td class="text-center">43</td>
                            <td>28-19 Maret 2015</td>
                            <td>Juara 1</td>
                            <td>Lomba Dayung Perahu Tradisional</td>
                            <td>Kabupaten</td>
                            <td>Group</td>
                        </tr>
                        <tr>
                            <td class="text-center">44</td>
                            <td>24 Mei 2022</td>
                            <td>Juara 2</td>
                            <td>Senam Artistik Lantai Putera POPDA</td>
                            <td>Kabupaten</td>
                            <td>Individu</td>
                        </tr>
                        <tr>
                            <td class="text-center">45</td>
                            <td>27 Mei 2022</td>
                            <td>Juara 1</td>
                            <td>Pencak Silat Seni Tunggal Puteri POPDA</td>
                            <td>Kabupaten</td>
                            <td>Individu</td>
                        </tr>
                        <tr>
                            <td class="text-center">46</td>
                            <td>27 Mei 2022</td>
                            <td>Juara 2</td>
                            <td>Renang 100 m Gaya Punggung Putra POPDA</td>
                            <td>Kabupaten</td>
                            <td>Individu</td>
                        </tr>
                        <tr>
                            <td class="text-center">47</td>
                            <td>13 Oktober 2020</td>
                            <td>Juara 1</td>
                            <td>(KATA) Katagori SMA Sabuk Coklat</td>
                            <td>Nasional</td>
                            <td>Individu</td>
                        </tr>
                        <tr>
                            <td class="text-center">48</td>
                            <td>12-15 Februari 2020</td>
                            <td>Juara 3</td>
                            <td>Lempar Cakram Putri POPDA SMA/SMK/MA</td>
                            <td>Kabupaten</td>
                            <td>Individu</td>
                        </tr>
                        <tr>
                            <td class="text-center">49</td>
                            <td>12-15 Februari 2020</td>
                            <td>Juara 1</td>
                            <td>Senam Artistik Meja Lompat Putra POPDA SMK</td>
                            <td>Kabupaten</td>
                            <td>Individu</td>
                        </tr>
                        <tr>
                            <td class="text-center">50</td>
                            <td>12-15 Februari 2020</td>
                            <td>Juara 1</td>
                            <td>Bola Voli Pasir Putra POPDA SMA/SMK/MA</td>
                            <td>Kabupaten</td>
                            <td>Group</td>
                        </tr>
                        <tr>
                            <td class="text-center">51</td>
                            <td>12-15 Februari 2020</td>
                            <td>Juara 3</td>
                            <td>Bola Basket Putra POPDA SMA/SMK/MA</td>
                            <td>Kabupaten</td>
                            <td>Group</td>
                        </tr>
                        <tr>
                            <td class="text-center">52</td>
                            <td>12-15 Februari 2020</td>
                            <td>Juara 3</td>
                            <td>Karate Putra Kumite +61 Kg POPDA SMA/SMK/MA</td>
                            <td>Kabupaten</td>
                            <td>Individu</td>
                        </tr>
                        <tr>
                            <td class="text-center">53</td>
                            <td>12-15 Februari 2020</td>
                            <td>Juara 2</td>
                            <td>Senam Artistik Serba Bisa Putra SMA/SMK/MA</td>
                            <td>Kabupaten</td>
                            <td>Individu</td>
                        </tr>
                        <tr>
                            <td class="text-center">54</td>
                            <td>12-15 Februari 2020</td>
                            <td>Juara 3</td>
                            <td>Karate Putra Komite 50 Kg POPDA SMA/SMK/MA</td>
                            <td>Kabupaten</td>
                            <td>Individu</td>
                        </tr>
                        <tr>
                            <td class="text-center">55</td>
                            <td>12-15 Februari 2020</td>
                            <td>Juara 1</td>
                            <td>Tolak Peluru Putri POPDA SMA/SMK/MA</td>
                            <td>Kabupaten</td>
                            <td>Individu</td>
                        </tr>
                        <tr>
                            <td class="text-center">56</td>
                            <td>12-15 Februari 2020</td>
                            <td>Juara 2</td>
                            <td>Estafet 4x400 m Putra POPDA SMA/SMK/MA</td>
                            <td>Kabupaten</td>
                            <td>Individu</td>
                        </tr>

                        <tr>
                            <td class="text-center">57</td>
                            <td>12-15 Februari 2020</td>
                            <td>Juara 2</td>
                            <td>Pancak Silat Putra Kelas D (51-55 Kg) POPDA </td>
                            <td>Kabupaten</td>
                            <td>Individu</td>
                        </tr>
                        <tr>
                            <td class="text-center">58</td>
                            <td>12-15 Februari 2020</td>
                            <td>Juara 2</td>
                            <td>Senam Artistik Lantai Putra POPDA SMA/SMK/MA</td>
                            <td>Kabupaten</td>
                            <td>Individu</td>
                        </tr>
                        <tr>
                            <td class="text-center">59</td>
                            <td>12-15 Februari 2020</td>
                            <td>Juara 3</td>
                            <td>Bulutangkis Ganda Putra POPDA SMA/SMK/MA</td>
                            <td>Kabupaten</td>
                            <td>Group</td>
                        </tr>

                        <tr>
                            <td class="text-center">60</td>
                            <td>12-15 Februari 2020</td>
                            <td>Juara 2</td>
                            <td>Senam Artistik Kuda Pelana Putra POPDA </td>
                            <td>Kabupaten</td>
                            <td>Individu</td>
                        </tr>
                    </tbody>

                </table>


            </div>
            <!--/Card-->


        </div>
    </div>
    <!--/container-->
    <livewire:footer.footer />




    <!-- jQuery -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>
    <!--Datatables -->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script>
        $(document).ready(function() {

            var table = $('#example').DataTable({
                    responsive: true
                })
                .columns.adjust()
                .responsive.recalc();
        });
    </script>

</body>

</html>
