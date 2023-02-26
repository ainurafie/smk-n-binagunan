<!DOCTYPE html>
<html lang="en" class="antialiased">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Peserta Didik </title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Open+Sans:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.css" rel="stylesheet" />
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
            padding-right: 1rem;
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

        .button {
            padding-left: 16px;
            padding-right: 16px;
            padding-top: 8px;
            padding-bottom: 8px;
            border-radius: 5px;
            color: white;
            background-color: #2F73FE;
        }
    </style>



</head>

<body class="bg-gray-100 text-gray-900 tracking-wider leading-normal">
    <livewire:navbar.navbar2 />
    <livewire:navbar.navbar />
    <div class="my-[20px] px-5 mt-60">
        <div class="lg:px-[290px]">
            <h1 class="font-open-sans text-[27px] font-semibold text-black text-justify lg:px-1 px-5 mb-[50px]">Daftar Peserta Didik
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
                            <th data-priority="4">Tahun Masuk</th>
                            <th data-priority="5">Kompetensi</th>
                            <th data-priority="6">Action</th>


                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">1</td>
                            <td>062192</td>
                            <td>NUR LAELATUL</td>
                            <td>
                                2016
                            </td>
                            <td>
                                TKJ
                            </td>
                            <td>
                                <a href="/alumni/form" class="button">Edit</a>
                            </td>


                        </tr>

                        <!-- Rest of your data (refer to https://datatables.net/examples/server_side/ for server side processing)-->
                        <tr>
                            <td class="text-center">2</td>
                            <td>062193</td>
                            <td>NURATIH</td>
                            <td>
                                2016
                            </td>
                            <td>
                                TKJ
                            </td>
                            <td>
                                <a href="/alumni/form" class="button">Edit</a>
                            </td>

                        </tr>
                        <tr>
                            <td class="text-center">3</td>
                            <td>062194</td>
                            <td>NURVIANTI</td>
                            <td>
                                2016
                            </td>
                            <td>
                                TKJ
                            </td>
                            <td>
                                <a href="/alumni/form" class="button">Edit</a>
                            </td>

                        </tr>
                        <tr>
                            <td class="text-center">4</td>
                            <td>062195</td>
                            <td>OKTA DEWI</td>
                            <td>
                                2016
                            </td>
                            <td>
                                TKJ
                            </td>
                            <td>
                                <a href="/alumni/form" class="button">Edit</a>
                            </td>

                        </tr>
                        <tr>
                            <td class="text-center">5</td>
                            <td>062196</td>
                            <td>PEBRIANINGSIH</td>
                            <td>
                                2016
                            </td>
                            <td>
                                TKJ
                            </td>
                            <td>
                                <a href="/alumni/form" class="button">Edit</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">6</td>
                            <td>062197</td>
                            <td>PUPUT SAFITRI</td>
                            <td>
                                2016
                            </td>
                            <td>
                                TKJ
                            </td>
                            <td>
                                <a href="/alumni/form" class="button">Edit</a>
                            </td>
                        </tr>
                       
                        <tr>
                            <td class="text-center">7</td>
                            <td>062198</td>
                            <td>PUTRI DWI</td>
                            <td>
                                2016
                            </td>
                            <td>
                                TKJ
                            </td>
                            <td>
                                <a href="/alumni/form" class="button">Edit</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">8</td>
                            <td>062199</td>
                            <td>RADIYEM</td>
                            <td>
                                2016
                            </td>
                            <td>
                                TKJ
                            </td>
                            <td>
                                <a href="/alumni/form" class="button">Edit</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">9</td>
                            <td>062200</td>
                            <td>RAHAYU</td>
                            <td>
                                2016
                            </td>
                            <td>
                                TKJ
                            </td>
                            <td>
                                <a href="/alumni/form" class="button">Edit</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">10</td>
                            <td>062201</td>
                            <td>RAMIATI</td>
                            <td>
                                2016
                            </td>
                            <td>
                                TKJ
                            </td>
                            <td>
                                <a href="/alumni/form" class="button">Edit</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">11</td>
                            <td>062202</td>
                            <td>RATNA AYUNI</td>
                            <td>
                                2016
                            </td>
                            <td>
                                TKJ
                            </td>
                            <td>
                                <a href="/alumni/form" class="button">Edit</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">12</td>
                            <td>062203</td>
                            <td>RATNA BUDIARTI</td>
                            <td>
                                2016
                            </td>
                            <td>
                                TKJ
                            </td>
                            <td>
                                <a href="/alumni/form" class="button">Edit</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">13</td>
                            <td>062204</td>
                            <td>RENITA AMELIA</td>
                            <td>
                                2016
                            </td>
                            <td>
                                TKJ
                            </td>
                            <td>
                                <a href="/alumni/form" class="button">Edit</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">14</td>
                            <td>062205</td>
                            <td>RESTI ANASUNDARI</td>
                            <td>
                                2016
                            </td>
                            <td>
                                TKJ
                            </td>
                            <td>
                                <a href="/alumni/form" class="button">Edit</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">15</td>
                            <td>062206</td>
                            <td>RESTI PRIHATINI</td>
                            <td>
                                2016
                            </td>
                            <td>
                                TKJ
                            </td>
                            <td>
                                <a href="/alumni/form" class="button">Edit</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">16</td>
                            <td>062207</td>
                            <td>RITA INDIYANI</td>
                            <td>
                                2016
                            </td>
                            <td>
                                TKJ
                            </td>
                            <td>
                                <a href="/alumni/form" class="button">Edit</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">17</td>
                            <td>062208</td>
                            <td>RITA SUSANTI</td>
                            <td>
                                2016
                            </td>
                            <td>
                                TKJ
                            </td>
                            <td>
                                <a href="/alumni/form" class="button">Edit</a>
                            </td>

                        </tr>
                        <tr>
                            <td class="text-center">18</td>
                            <td>062209</td>
                            <td>ROHMIATI</td>
                            <td>
                                2016
                            </td>
                            <td>
                                TKJ
                            </td>
                            <td>
                                <a href="/alumni/form" class="button">Edit</a>
                            </td>

                        </tr>
                        <tr>
                            <td class="text-center">19</td>
                            <td>062210</td>
                            <td>ROICHATUL JANNAH</td>
                            <td>
                                2016
                            </td>
                            <td>
                                TKJ
                            </td>
                            <td>
                                <a href="/alumni/form" class="button">Edit</a>
                            </td>

                        </tr>
                        <tr>
                            <td class="text-center">20</td>
                            <td>062211</td>
                            <td>ROMAHTUL UMIYAH</td>
                            <td>
                                2016
                            </td>
                            <td>
                                TKJ
                            </td>
                            <td>
                                <a href="/alumni/form" class="button">Edit</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">21</td>
                            <td>062212</td>
                            <td>RULLY ARLINDA</td>
                            <td>
                                2016
                            </td>
                            <td>
                                TKJ
                            </td>
                            <td>
                                <a href="/alumni/form" class="button">Edit</a>
                            </td>
                        </tr>
                       
                        <tr>
                            <td class="text-center">22</td>
                            <td>062213</td>
                            <td>SALSA OKTAVIA</td>
                            <td>
                                2016
                            </td>
                            <td>
                                TKJ
                            </td>
                            <td>
                                <a href="/alumni/form" class="button">Edit</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">23</td>
                            <td>062214</td>
                            <td>SEFIA PURWANTI</td>
                            <td>
                                2016
                            </td>
                            <td>
                                TKJ
                            </td>
                            <td>
                                <a href="/alumni/form" class="button">Edit</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">24</td>
                            <td>062215</td>
                            <td>SEPTI DIANA SARI</td>
                            <td>
                                2016
                            </td>
                            <td>
                                TKJ
                            </td>
                            <td>
                                <a href="/alumni/form" class="button">Edit</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">25</td>
                            <td>062216</td>
                            <td>SERLLY EKA</td>
                            <td>
                                2016
                            </td>
                            <td>
                                TKJ
                            </td>
                            <td>
                                <a href="/alumni/form" class="button">Edit</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">26</td>
                            <td>062217</td>
                            <td>SERLY SEPTIANA</td>
                            <td>
                                2016
                            </td>
                            <td>
                                TKJ
                            </td>
                            <td>
                                <a href="/alumni/form" class="button">Edit</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">27</td>
                            <td>062218</td>
                            <td>AHELY ASHELA</td>
                            <td>
                                2016
                            </td>
                            <td>
                                TKJ
                            </td>
                            <td>
                                <a href="/alumni/form" class="button">Edit</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">28</td>
                            <td>062219</td>
                            <td>SINTA</td>
                            <td>
                                2016
                            </td>
                            <td>
                                TKJ
                            </td>
                            <td>
                                <a href="/alumni/form" class="button">Edit</a>
                            </td>
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
