<!DOCTYPE html>
<html lang="en" class="antialiased">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Siswa</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Open+Sans:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.css" rel="stylesheet" />
    <title>Ekstrakulikuler</title>
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
            <h1 class="font-open-sans text-[27px] font-semibold text-black text-justify lg:px-1 px-5 mb-[50px]">Siswa
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
                            <th data-priority="2">NIS</th>
                            <th data-priority="3">NAMA</th>
                            <th data-priority="4">JENIS KELAMIN</th>
                            <th data-priority="5">KELAS</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">1</td>
                            <td>203868</td>
                            <td>ABAS SUBEKTI</td>
                            <td>Laki-laki</td>
                            <td>XII TKR 1</td>

                        </tr>

                        <!-- Rest of your data (refer to https://datatables.net/examples/server_side/ for server side processing)-->
                        <tr>
                            <td class="text-center">2</td>
                            <td>203869</td>
                            <td>ADI MUKTI NUGROHO</td>
                            <td>Laki-laki</td>
                            <td>XII TKR 1</td>
                        </tr>
                        <tr>
                            <td class="text-center">3</td>
                            <td>203870</td>
                            <td>ADI SEPTIO TRI PAMUNGKAS</td>
                            <td>Laki-laki</td>
                            <td>XII TKR 1</td>
                        </tr>
                        <tr>
                            <td class="text-center">4</td>
                            <td>203871</td>
                            <td>ADITYA RIZAL RUSTIYANTO</td>
                            <td>Laki-laki</td>
                            <td>XII TKR 1</td>
                        </tr>
                        <tr>
                            <td class="text-center">5</td>
                            <td>203872</td>
                            <td>AFIF HIDAYAT</td>
                            <td>Laki-laki</td>
                            <td>XII TKR 1</td>
                        </tr>
                        <tr>
                            <td class="text-center">6</td>
                            <td>203873</td>
                            <td>AFRIAN DWIARNANDA</td>
                            <td>Laki-laki</td>
                            <td>XII TKR 1</td>
                        </tr>
                        <tr>
                            <td class="text-center">7</td>
                            <td>203874</td>
                            <td>AGIL DWI HIDAYAT</td>
                            <td>Laki-laki</td>
                            <td>XII TKR 1</td>
                        </tr>
                        <tr>
                            <td class="text-center">8</td>
                            <td>203875</td>
                            <td>AGNA GARA REVENDY</td>
                            <td>Laki-laki</td>
                            <td>XII TKR 1</td>
                        </tr>
                        <tr>
                            <td class="text-center">9</td>
                            <td>203876</td>
                            <td>AGUNG PRIHANTO</td>
                            <td>Laki-laki</td>
                            <td>XII TKR 1</td>
                        </tr>
                        <tr>
                            <td class="text-center">10</td>
                            <td>203877</td>
                            <td>AHMAD NURUL MUBAROH</td>
                            <td>Laki-laki</td>
                            <td>XII TKR 1</td>
                        </tr>
                        <tr>
                            <td class="text-center">11</td>
                            <td>203878</td>
                            <td>AHMAD RIFAI</td>
                            <td>Laki-laki</td>
                            <td>XII TKR 1</td>
                        </tr>
                        <tr>
                            <td class="text-center">12</td>
                            <td>203879</td>
                            <td>AKROM ZUMARO</td>
                            <td>Laki-laki</td>
                            <td>XII TKR 1</td>
                        </tr>
                        <tr>
                            <td class="text-center">13</td>
                            <td>203880</td>
                            <td>ALDI RIZKY ARDIANSYAH</td>
                            <td>Laki-laki</td>
                            <td>XII TKR 1</td>
                        </tr>
                        <tr>
                            <td class="text-center">14</td>
                            <td>203881</td>
                            <td>ALFIN RIZKI PANGESTU</td>
                            <td>Laki-laki</td>
                            <td>XII TKR 1</td>
                        </tr>
                        <tr>
                            <td class="text-center">15</td>
                            <td>203882</td>
                            <td>ALFYAN RAFIQI DZIKRILLAH BAHRI</td>
                            <td>Laki-laki</td>
                            <td>XII TKR 1</td>
                        </tr>
                        <tr>
                            <td class="text-center">16</td>
                            <td>203883</td>
                            <td>ALIEF RACHMAD HAKIM</td>
                            <td>Laki-laki</td>
                            <td>XII TKR 1</td>
                        </tr>
                        <tr>
                            <td class="text-center">17</td>
                            <td>203884</td>
                            <td>ALIEF WINDU IRAWAN</td>
                            <td>Laki-laki</td>
                            <td>XII TKR 1</td>
                        </tr>
                        <tr>
                            <td class="text-center">18</td>
                            <td>203885</td>
                            <td>ALIF FATKHUR ROHMAN</td>
                            <td>Laki-laki</td>
                            <td>XII TKR 1</td>
                        </tr>
                        <tr>
                            <td class="text-center">19</td>
                            <td>203886</td>
                            <td>ALVIN AGUS TRIANTO</td>
                            <td>Laki-laki</td>
                            <td>XII TKR 1</td>
                        </tr>
                        <tr>
                            <td class="text-center">20</td>
                            <td>203887</td>
                            <td>ALVINO RAMADHANI SAPUTRA</td>
                            <td>Laki-laki</td>
                            <td>XII TKR 1</td>
                        </tr>
                        <tr>
                            <td class="text-center">21</td>
                            <td>203888</td>
                            <td>AMIN NURROHMAN</td>
                            <td>Laki-laki</td>
                            <td>XII TKR 1</td>
                        </tr>
                        <tr>
                            <td class="text-center">22</td>
                            <td>203889</td>
                            <td>ANANDA RIZKY RAMADHAN</td>
                            <td>Laki-laki</td>
                            <td>XII TKR 1</td>
                        </tr>
                        <tr>
                            <td class="text-center">23</td>
                            <td>203890</td>
                            <td>ANDRIANO SAPUTRA</td>
                            <td>Laki-laki</td>
                            <td>XII TKR 1</td>
                        </tr>
                        <tr>
                            <td class="text-center">24</td>
                            <td>203891</td>
                            <td>APRILIA</td>
                            <td>Laki-laki</td>
                            <td>XII TKR 1</td>
                        </tr>
                        <tr>
                            <td class="text-center">25</td>
                            <td>203892</td>
                            <td>AQILLA HAYTUL NAFIS</td>
                            <td>Laki-laki</td>
                            <td>XII TKR 1</td>
                        </tr>
                        <tr>
                            <td class="text-center">26</td>
                            <td>203893</td>
                            <td>ARDHY FADYLLAH SAHPUTRA</td>
                            <td>Laki-laki</td>
                            <td>XII TKR 1</td>
                        </tr>
                        <tr>
                            <td class="text-center">27</td>
                            <td>203894</td>
                            <td>ARHADIAN AHLAF FAUZI</td>
                            <td>Laki-laki</td>
                            <td>XII TKR 1</td>
                        </tr>
                        <tr>
                            <td class="text-center">28</td>
                            <td>203895</td>
                            <td>ARIF BUDI PRASETYO</td>
                            <td>Laki-laki</td>
                            <td>XII TKR 1</td>
                        </tr>
                        <tr>
                            <td class="text-center">29</td>
                            <td>203896</td>
                            <td>ARON AZIZ</td>
                            <td>Laki-laki</td>
                            <td>XII TKR 1</td>
                        </tr>
                        <tr>
                            <td class="text-center">30</td>
                            <td>203897</td>
                            <td>ARWA ATTA NUR SABILLA</td>
                            <td>Laki-laki</td>
                            <td>XII TKR 1</td>
                        </tr>
                        <tr>
                            <td class="text-center">31</td>
                            <td>203898</td>
                            <td>ARZETA FARIDA ROZKA</td>
                            <td>Laki-laki</td>
                            <td>XII TKR 1</td>
                        </tr>
                        <tr>
                            <td class="text-center">32</td>
                            <td>203900</td>
                            <td>AYU AMBARWATI</td>
                            <td>Laki-laki</td>
                            <td>XII TKR 1</td>
                        </tr>
                        <tr>
                            <td class="text-center">33</td>
                            <td>203901</td>
                            <td>AYUBY SASKARA</td>
                            <td>Laki-laki</td>
                            <td>XII TKR 1</td>
                        </tr>
                        <tr>
                            <td class="text-center">34</td>
                            <td>203902</td>
                            <td>AZIZ WAHYU SAPUTRA</td>
                            <td>Laki-laki</td>
                            <td>XII TKR 1</td>
                        </tr>
                        <tr>
                            <td class="text-center">35</td>
                            <td>203903</td>
                            <td>AZKA HANIF FAJURRAHMAN</td>
                            <td>Laki-laki</td>
                            <td>XII TKR 1</td>
                        </tr>
                        <tr>
                            <td class="text-center">36</td>
                            <td>203904</td>
                            <td>AZWAR DAMAR RIDHO</td>
                            <td>Laki-laki</td>
                            <td>XII TKR 2</td>
                        </tr>
                        <tr>
                            <td class="text-center">37</td>
                            <td>203905</td>
                            <td>BAGAS PUTRA RAMADAN</td>
                            <td>Laki-laki</td>
                            <td>XII TKR 2</td>
                        </tr>
                        <tr>
                            <td class="text-center">38</td>
                            <td>203906</td>
                            <td>BAGAS WARDANA</td>
                            <td>Laki-laki</td>
                            <td>XII TKR 2</td>
                        </tr>
                        <tr>
                            <td class="text-center">39</td>
                            <td>203907</td>
                            <td>BENNY ERLANGGA</td>
                            <td>Laki-laki</td>
                            <td>XII TKR 2</td>
                        </tr>
                        <tr>
                            <td class="text-center">40</td>
                            <td>203908</td>
                            <td>BRILLIANT SURO PUTRA</td>
                            <td>Laki-laki</td>
                            <td>XII TKR 2</td>
                        </tr>
                        <tr>
                            <td class="text-center">41</td>
                            <td>203909</td>
                            <td>CALVIN ANDRE DWINATA</td>
                            <td>Laki-laki</td>
                            <td>XII TKR 2</td>
                        </tr>
                        <tr>
                            <td class="text-center">42</td>
                            <td>203910</td>
                            <td>DANIEL FADILA PUTRA</td>
                            <td>Laki-laki</td>
                            <td>XII TKR 2</td>
                        </tr>
                    </tbody>

                </table>


            </div>
            <!--/Card-->


        </div>
        <!--/container-->

    </div>
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
