<!DOCTYPE html>
<html lang="en" class="antialiased">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Karyawan </title>
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
            <h1 class="font-open-sans text-[27px] font-semibold text-black text-justify lg:px-1 px-5 mb-[50px]">Karyawan
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
                            <th data-priority="2">NAMA</th>
                            <th data-priority="3">NIP</th>
                            <th data-priority="4">JABATAN</th>


                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">1</td>
                            <td>Amalia Suci Andrawina, S.Sos</td>
                            <td>5733762663300130</td>
                            <td>Null</td>

                        </tr>

                        <!-- Rest of your data (refer to https://datatables.net/examples/server_side/ for server side processing)-->
                        <tr>
                            <td class="text-center">2</td>
                            <td>Eka Yulianti, S.Kom</td>
                            <td>9860758659300090</td>
                            <td>Null</td>

                        </tr>
                        <tr>
                            <td class="text-center">3</td>
                            <td>Iwan Setiyawan, SH</td>
                            <td>3958751652200020</td>
                            <td>Null</td>

                        </tr>
                        <tr>
                            <td class="text-center">4</td>
                            <td>Handry Widayanto, S.E</td>
                            <td>7261761662130140</td>
                            <td>Null</td>

                        </tr>
                        <tr>
                            <td class="text-center">5</td>
                            <td>Yuli Haryanto, S.E</td>
                            <td>1058750651110010</td>
                            <td>Null</td>
                        </tr>
                        <tr>
                            <td class="text-center">6</td>
                            <td>Arif Sutrimo, A.Md</td>
                            <td>556772673130073</td>
                            <td>Null</td>
                        </tr>
                        <tr>
                            <td class="text-center">7</td>
                            <td>Catur Apri Setianingsih, S.I.Pust</td>
                            <td>4761770671130140</td>
                            <td>Null</td>
                        </tr>
                        <tr>
                            <td class="text-center">8</td>
                            <td>Tarsono</td>
                            <td>240746649200063</td>
                            <td>Null</td>
                        </tr>
                        <tr>
                            <td class="text-center">9</td>
                            <td>Suyatno</td>
                            <td>9934753656200010</td>
                            <td>Null</td>
                        </tr>
                        <tr>
                            <td class="text-center">10</td>
                            <td>Darto Solehan</td>
                            <td>8262766668130120</td>
                            <td>Null</td>
                        </tr>
                        <tr>
                            <td class="text-center">11</td>
                            <td>Sugimin</td>
                            <td>3637761662130220</td>
                            <td>Null</td>
                        </tr>
                        <tr>
                            <td class="text-center">12</td>
                            <td>Jaenudin</td>
                            <td>8048745646130080</td>
                            <td>Null</td>
                        </tr>
                        <tr>
                            <td class="text-center">13</td>
                            <td>Heri Sujianto</td>
                            <td>1333763664130210</td>
                            <td>Null</td>
                        </tr>
                        <tr>
                            <td class="text-center">14</td>
                            <td>Rasman Mustakim</td>
                            <td>-</td>
                            <td>Null</td>
                        </tr>
                        <tr>
                            <td class="text-center">15</td>
                            <td>Anwari</td>
                            <td>449757658130102</td>
                            <td>Null</td>
                        </tr>
                        <tr>
                            <td class="text-center">16</td>
                            <td>Imam Gunadi</td>
                            <td>4155765666130190</td>
                            <td>Null</td>
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
