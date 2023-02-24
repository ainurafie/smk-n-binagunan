<!DOCTYPE html>
<html lang="en" class="antialiased">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DataTables </title>
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
    </style>



</head>

<body class="bg-gray-100 text-gray-900 tracking-wider leading-normal">


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
                        <td>XII TKR 2</td>
                        
                    </tr>

                    <!-- Rest of your data (refer to https://datatables.net/examples/server_side/ for server side processing)-->
                    <tr>
                        <td class="text-center">2</td>
                        <td>193868</td>
                        <td>AZKA HANIF FAJURRAHMAN</td>
                        <td>Laki-laki</td>
                        <td>XI TKR 2</td>
                    </tr>
                    <tr>
                        <td class="text-center">3</td>
                        <td>193868</td>
                        <td>ADI SEPTIO TRI PAMUNGKAS</td>
                        <td>Laki-laki</td>
                        <td>XI TKR 2</td>
                    </tr>
                    <tr>
                        <td class="text-center">2</td>
                        <td>193868</td>
                        <td>AZKA HANIF FAJURRAHMAN</td>
                        <td>Laki-laki</td>
                        <td>XI TKR 2</td>
                    </tr>
                    <tr>
                        <td class="text-center">2</td>
                        <td>193868</td>
                        <td>AZKA HANIF FAJURRAHMAN</td>
                        <td>Laki-laki</td>
                        <td>XI TKR 2</td>
                    </tr>
                    <tr>
                        <td class="text-center">2</td>
                        <td>193868</td>
                        <td>AZKA HANIF FAJURRAHMAN</td>
                        <td>Laki-laki</td>
                        <td>XI TKR 2</td>
                    </tr>
                    <tr>
                        <td class="text-center">2</td>
                        <td>193868</td>
                        <td>AZKA HANIF FAJURRAHMAN</td>
                        <td>Laki-laki</td>
                        <td>XI TKR 2</td>
                    </tr>
                    <tr>
                        <td class="text-center">2</td>
                        <td>193868</td>
                        <td>AZKA HANIF FAJURRAHMAN</td>
                        <td>Laki-laki</td>
                        <td>XI TKR 2</td>
                    </tr>
                    <tr>
                        <td class="text-center">2</td>
                        <td>193868</td>
                        <td>AZKA HANIF FAJURRAHMAN</td>
                        <td>Laki-laki</td>
                        <td>XI TKR 2</td>
                    </tr>
                    <tr>
                        <td class="text-center">2</td>
                        <td>193868</td>
                        <td>AZKA HANIF FAJURRAHMAN</td>
                        <td>Laki-laki</td>
                        <td>XI TKR 2</td>
                    </tr>
                    <tr>
                        <td class="text-center">2</td>
                        <td>193868</td>
                        <td>AZKA HANIF FAJURRAHMAN</td>
                        <td>Laki-laki</td>
                        <td>XI TKR 2</td>
                    </tr>

                </tbody>

            </table>


        </div>
        <!--/Card-->


    </div>
    <!--/container-->





    <!-- jQuery -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

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
