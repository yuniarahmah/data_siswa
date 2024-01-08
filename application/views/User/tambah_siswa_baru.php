<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sewa Ruang</title>
    <script src="https://cdn.tailwindcss.com"></script>


    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>


    <script src="https://cdn.jsdelivr.net/npm/heroicons@2.3.0/dist/heroicons.min.js" defer></script>
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@12.11.5/dist/sweetalert2.min.css">
    <!--Replace with your tailwind.css once created-->

    <!-- fontawesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--Regular Datatables CSS-->
    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
    <!--Responsive Extension Datatables CSS-->
    <link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet">

    <style>
        @import url("https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap");

        :root {
            --main-color: #4F709C;
            --main-color-opacity: 126, 86, 255;
            --main-gradient: linear-gradient(to right, #2878EB, #F129C9);
            --heading-color: #002147;
        }

        body {
            font-family: "DM Sans", sans-serif;
            background-color: #f1f1f1;
            min-height: screen;
            position: relative;
            overflow: hidden;
        }

        @media (min-width: 1200px) {

            .container,
            .container-lg,
            .container-md,
            .container-sm,
            .container-xl,
            .container-xxl {
                max-width: 1170px;
            }
        }


        .btn {
            height: 50px;
            line-height: 50px;
            padding: 0 32px;
            overflow: hidden;
            position: relative;
            border: 0;
            transition: all 0.5s ease 0s;
            font-weight: 700;
            display: inline-block;
            transform: perspective(1px) translateZ(0);
            border-radius: 5px;
        }

        .btn:focus,
        .btn:active {
            outline: 0;
            box-shadow: none;
        }

        .btn:after {
            content: "";
            background: var(--main-color);
            position: absolute;
            transition: all 0.9s ease 0s;
            z-index: -1;
            height: 100%;
            left: -35%;
            top: 0;
            transform: skew(30deg);
            transform-origin: top left;
            width: 0;
        }

        .btn:hover {
            color: #fff;
        }

        .btn:hover:after {
            height: 100%;
            width: 135%;
        }

        .btn-base {
            color: var(--heading-color);
            border: 0;
            background: var(--main-color);
        }

        .btn-base:after {
            background: #fff;
        }

        .btn-base:hover::after {
            background: var(--main-color);
        }

        .btn-border {
            color: var(--main-color);
            border: 1px solid var(--main-color);
            background: transparent;
        }

        .btn-border:hover {
            color: #fff;
        }

        .btn-border-white {
            color: #fff;
            border: 1px solid #fff;
            background: transparent;
        }

        .btn-border-white:hover {
            background: #fff;
            opacity: 1;
            color: var(--heading-color);
        }

        .btn-border-white:hover::after {
            background: #fff;
        }

        .btn-white {
            color: var(--heading-color);
            border: 0;
            background: #fff;
            font-size: 14px;
            transition: all 0.3s ease 0s;
        }

        .btn-white:hover {
            color: var(--heading-color);
        }

        .btn-white:hover:after {
            background: #fff;
        }

        .btn-area {
            margin-top: 25px;
        }

        .btn-area .btn {
            margin-right: 7px;
        }



        .header-item {
            display: block;
        }

        .header-item .thumb {
            position: relative;
            display: block;
        }

        .header-item .thumb:after {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.7);
            visibility: hidden;
            opacity: 0;
            transition: 0.4s;
            border-radius: 5px;
        }

        .header-item .thumb img {
            transition: 0.4s;
            border-radius: 5px;
        }

        .header-item:hover .thumb img {
            transform: scale(1.05);
        }

        .header-item:hover .thumb:after {
            visibility: visible;
            opacity: 1;
            transform: scale(1.05);
        }

        .cm-soon-title {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
        }

        .inner-item:hover .cm-soon-title {
            color: #fff;
        }

        .inner-item .btn {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            font-size: 16px;
            color: #fff;
            margin-top: -22px;
            visibility: hidden;
            opacity: 0;
            transition: 0.4s;
            color: var(--heading-color);
        }

        .inner-item:hover .btn {
            visibility: visible;
            opacity: 1;
        }


        .section-title {
            margin-bottom: 60px;
        }

        .section-title h5 {
            font-weight: 600;
            color: var(--main-color);
            margin-bottom: 6px;
        }

        .section-title h2 {
            font-size: 42px;
            font-weight: 700;
            color: var(--heading-color);
        }

        .section-title p {
            font-size: 22px;
            font-weight: 500;
            color: rgba(0, 0, 0, 0.4);
        }

        @media all and (max-width: 767px) {
            .nav-right-part ul li .btn {
                display: none;
            }

            .nav-right-part-mobile ul li .cart {
                display: block;
            }

            .nav-right-part-desktop {
                margin-left: 0px;
            }

            .banner-inner h1 {
                line-height: 46px;
                font-size: 33px;
                margin-bottom: 15px;
            }

            .banner-inner p {
                font-size: 18px;
                line-height: inherit;
                letter-spacing: 0;
            }

            .banner-inner p span {
                font-size: 20px;
            }

            .banner-area {
                padding: 180px 0px 100px;
            }

            .section-title h2 {
                font-size: 30px;
            }

            .btn-area {
                margin-top: 45px;
            }

            .btn {
                padding: 0 21px;
            }

            .main-logo img {
                width: 160px;
            }
        }

        @media all and (max-width: 320px) {
            .main-logo img {
                width: 110px;
            }

            .nav-right-part ul li {
                font-size: 15px;
            }

            .nav-right-part ul li a {
                padding: 0 7px;
            }
        }

        .featured-item {
            box-shadow: 0 0 40px rgb(82 85 90 / 10%);
            text-align: center;
            margin-bottom: 30px;
            padding: 40px 20px 35px 20px;
            background: #fff;
            border-radius: 5px;
            color: #1d1d1d;
            font-size: 22px;
        }

        .featured-item img {
            display: block;
            margin: 0 auto 20px;
            box-shadow: 0 0 40px rgb(82 85 90 / 20%);
            border-radius: 5px;
        }

        h1 {
            font-size: 62px;
            line-height: 1.2333333333;
        }

        h2 {
            font-size: 46px;
            line-height: 1.3380952381;
        }

        h3 {
            font-size: 30px;
            line-height: 1.3833333333;
        }

        h4 {
            font-size: 24px;
            line-height: 1.3380952381;
        }

        h5 {
            font-size: 20px;
            line-height: 1.3380952381;
        }

        h6 {
            font-size: 16px;
            line-height: 1.3830952381;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            color: var(--heading-color);
            font-weight: 700;
        }

        p {
            color: var(--paragraph-color);
            -webkit-hyphens: auto;
            hyphens: auto;
            margin-bottom: 10px;
        }

        a {
            color: inherit;
            text-decoration: none;
            transition: 0.4s;
        }

        a,
        a:hover,
        a:focus,
        a:active {
            text-decoration: none;
            outline: none;
            color: inherit;
        }

        a:hover {
            color: var(--main-color);
        }


        .btn {
            height: 55px;
            line-height: 55px;
            padding: 0 36px;
            border-radius: 0;
            overflow: hidden;
            position: relative;
            border: 0;
            font-size: 15px;
            transition: all 0.5s ease;
            font-weight: 500;
            border-radius: 4px;
            z-index: 0;
        }

        .btn:focus,
        .btn:active {
            outline: 0;
            box-shadow: none;
        }

        .btn:after {
            content: "";
            background: #EEBD05;
            position: absolute;
            transition: all 0.3s ease-in;
            z-index: -1;
            height: 100%;
            left: -35%;
            top: 0;
            transform: skew(30deg);
            transition-duration: 0.6s;
            transform-origin: top left;
            width: 0;
        }

        .btn:hover:after {
            height: 100%;
            width: 135%;
        }

        .btn-radius {
            border-radius: 30px;
        }

        .btn-base {
            color: var(--heading-color);
            background: var(--main-color);
        }

        .btn-base:hover {
            color: var(--heading-color);
        }

        .btn-border-white {
            color: #fff;
            border: 2px solid rgba(255, 255, 255, 0.2);
            line-height: 52px;
        }

        .btn-border-white:hover,
        .btn-border-white:focus {
            color: #fff;
            background: var(--main-color);
            border: 2px solid var(--main-color);
        }

        .btn-border-black {
            color: var(--heading-color);
            border: 2px solid rgba(0, 33, 71, 0.2);
            line-height: 52px;
        }

        .btn-border-black:hover,
        .btn-border-black:focus {
            color: var(--heading-color);
            background: var(--main-color);
            border: 2px solid var(--main-color);
        }

        .btn-black {
            color: #fff;
            background: var(--heading-color);
        }

        .btn-black:hover {
            color: #fff;
        }

        .btn-counter {
            display: inline-flex;
            padding: 15px 30px;
            border-radius: 4px;
        }

        .btn-counter .left-val {
            margin-bottom: 0;
        }

        .btn-counter .right-val {
            line-height: 1.2;
            font-size: 15px;
            font-weight: 500;
            color: var(--heading-color);
            margin-left: 12px;
        }


        .section-title {
            margin-bottom: 45px;
            position: relative;
        }

        .section-title .sub-title {
            font-weight: 500;
            position: relative;
            display: inline-block;
            margin-bottom: 0;
        }

        .section-title .sub-title.left-line:before {
            content: "";
            position: absolute;
            left: -50px;
            top: 9px;
            height: 1px;
            width: 40px;
            background: var(--heading-color);
        }

        .section-title .sub-title.right-line:after {
            content: "";
            position: absolute;
            right: -50px;
            top: 9px;
            height: 1px;
            width: 40px;
            background: var(--heading-color);
        }

        .section-title .sub-title.double-line:before {
            content: "";
            position: absolute;
            left: -50px;
            top: 10px;
            height: 1px;
            width: 40px;
            background: var(--heading-color);
        }

        .section-title .sub-title.double-line:after {
            content: "";
            position: absolute;
            right: -50px;
            top: 10px;
            height: 1px;
            width: 40px;
            background: var(--heading-color);
        }

        .section-title .sub-title.style-btn {
            height: 36px;
            line-height: 36px;
            background: rgba(29, 194, 149, 0.1);
            border-radius: 30px;
            padding: 0 25px;
            color: var(--main-color);
            margin-bottom: 6px;
        }

        .section-title .title {
            margin-bottom: 0;
            margin-top: 3px;
        }

        .section-title .content {
            margin-top: 17px;
            margin-bottom: 0;
        }

        .section-title .single-list-wrap {
            margin-top: 35px;
        }

        .section-title .btn {
            margin-top: 40px;
        }


        .responsive-mobile-menu button:focus {
            outline: none;
            border: none;
        }

        .sopen {
            display: block;
        }

        .toggle-btn {
            left: auto;
            right: -10px;
            position: absolute;
            top: 12px;
            width: 40px;
            height: 40px;
            transition-duration: 0.5s;
            border: 0;
            background: transparent;
        }

        .toggle-btn .icon-left {
            transition-duration: 0.5s;
            position: absolute;
            height: 2px;
            width: 11px;
            top: 18px;
            background-color: #fff;
            left: 7px;
        }

        .toggle-btn .icon-left:before {
            transition-duration: 0.5s;
            position: absolute;
            width: 11px;
            height: 2px;
            background-color: #fff;
            content: "";
            top: -7px;
            left: 0;
        }

        .toggle-btn .icon-left:after {
            transition-duration: 0.5s;
            position: absolute;
            width: 11px;
            height: 2px;
            background-color: #fff;
            content: "";
            top: 7px;
            left: 0;
        }

        .toggle-btn .icon-left:hover {
            cursor: pointer;
        }

        .toggle-btn .icon-right {
            transition-duration: 0.5s;
            position: absolute;
            height: 2px;
            width: 11px;
            top: 18px;
            background-color: #fff;
            left: 18px;
        }

        .toggle-btn .icon-right:before {
            transition-duration: 0.5s;
            position: absolute;
            width: 11px;
            height: 2px;
            background-color: #fff;
            content: "";
            top: -7px;
            left: 0;
        }

        .toggle-btn .icon-right:after {
            transition-duration: 0.5s;
            position: absolute;
            width: 11px;
            height: 2px;
            background-color: #fff;
            content: "";
            top: 7px;
            left: 0;
        }

        .toggle-btn .icon-right:hover {
            cursor: pointer;
        }

        .toggle-btn.open .icon-left {
            transition-duration: 0.5s;
            background: transparent;
        }

        .toggle-btn.open .icon-left:before {
            transform: rotateZ(45deg) scaleX(1.4) translate(2px, 1px);
        }

        .toggle-btn.open .icon-left:after {
            transform: rotateZ(-45deg) scaleX(1.4) translate(2px, -1px);
        }

        .toggle-btn.open .icon-right {
            transition-duration: 0.5s;
            background: transparent;
        }

        .toggle-btn.open .icon-right:before {
            transform: rotateZ(-45deg) scaleX(1.4) translate(-2px, 1px);
        }

        .toggle-btn.open .icon-right:after {
            transform: rotateZ(45deg) scaleX(1.4) translate(-2px, -1px);
        }

        .toggle-btn:hover {
            cursor: pointer;
        }


        @media only screen and (max-width: 767px) {
            .logo-wrapper.mobile-logo {
                display: block;
                width: 100%;
            }

            .responsive-mobile-menu {
                display: block;
                width: 100%;
                position: relative;
            }

            .responsive-mobile-menu .navbar-toggler {
                position: absolute;
                left: calc(100% - 130px);
                top: 10px;
            }

            .table-responsive {
                display: block !important;
            }

            .btn-custom-default,
            .btn-custom-white {
                font-size: 14PX;
                line-height: 33px;
                padding: 6px 20px;
            }

            .navbar-area .logo {
                padding-top: 0px !important;
            }
        }




        .dataTables_wrapper select,
        .dataTables_wrapper .dataTables_filter input {
            color: #4F709C;
            padding-left: 1rem;
            padding-right: 1rem;
            padding-top: .5rem;
            padding-bottom: .5rem;
            line-height: 1.25;
            border-width: 2px;
            border-radius: .25rem;
            border-color: #F5F7F8;
            background-color: #F5F7F8;
            margin: 10px 0;
        }

        .dataTables_wrapper .dataTables_filter input {
            margin-left: 9px;
        }

        /* Row Hover */
        table.dataTable.hover tbody tr:hover,
        table.dataTable.display tbody tr:hover {
            background-color: #ebf4ff;
        }

        /* Pagination Buttons */
        .dataTables_wrapper .dataTables_paginate .paginate_button {
            font-weight: 400;
            border-radius: .25rem;
            border: 1px solid transparent;
            height: 37px;
            padding-top: 5px;
        }


        .dataTables_wrapper .dataTables_paginate .paginate_button.current {
            color: white !important;
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
            font-weight: 400;
            border-radius: .25rem;
            background: #4F709C !important;
            border: 1px solid transparent;
        }

        /*Pagination Buttons - Hover */
        .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
            color: white !important;
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
            font-weight: 400;
            border-radius: .25rem;
            background: #4F709C !important;
            border: 1px solid transparent;
        }

        table.dataTable.no-footer {
            border-bottom: 1px solid #e2e8f0;
            margin-top: 0.75em;
            margin-bottom: 0.75em;
        }

        table.dataTable.dtr-inline.collapsed>tbody>tr>td:first-child:before,
        table.dataTable.dtr-inline.collapsed>tbody>tr>th:first-child:before {
            background-color: #4F709C !important;

        }


        /* code responsive table */
        @media (max-width: 600px) {
            table {
                width: 4.5rem;
            }

            .btn-style {
                font-size: 12px;
                width: 8rem;
                height: 2rem;
            }
        }

        .inner-section {
            padding: 4%;
        }

        table {
            width: 12rem;
        }

        .container-table {
            box-shadow: 0 25px 50px -12px rgb(0 0 0 / 0.25);
            padding: 20px 10px 10px 10px;
        }

        .contain-all {
            overflow-y: scroll;
            /* height: 50%; */
        }

        .btn-style {
            width: 6rem;
            padding: 7px 1px;
        }

        .pgayu {
            max-height: 590px;
        }

        @media (max-width: 768px) {
            .pgayu {
                max-height: max-content;
                margin-bottom: 50px;
            }
        }

        .table-wrapper {
            width: 100%;
            overflow-x: auto;
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        .table-wrapper::-webkit-scrollbar {
            display: none;
        }
    </style>
    <!-- script modal -->
    <script>
        function toggleModal() {
            document.getElementById('modal').classList.toggle('hidden')
        }
    </script>
</head>

<body>
    <?php $this->load->view('sidebar'); ?>
    <main class="contain-all max-h-screen overflow-y-auto">
        <div class="pgayu">
            <section id="widget" class="p-10 widget-section pd-top-120">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 text-center">
                            <div class="section-title">
                                <h2 class="title"></h2>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-table row justify-content-center">

                    <div class="col-lg-12">
                        <div class="header-item">
                            <div class="relative">

                                <div class="flex md:gap-2">

                                    <button onclick="toggleModal()" class="btn-style bg-yellow-500 md:ml-auto hover:bg-yellow-700 text-white font-bold  rounded">
                                        <span class="">
                                            <i class="fas fa-file-import"></i>
                                        </span>
                                        Impor
                                    </button>
                                    <a href="javascript:void(0);" onclick="exportData()" class="btn-style ml-2 pl-2 bg-green-500 hover:bg-green-700 text-white font-bold  rounded">
                                        <span class="">
                                            <i class="fas fa-file-export"></i>
                                        </span>
                                        Ekspor
                                    </a>

                                    <a href="tambah_item_tambahan" class="btn-style ml-2 pl-1 bg-blue-500 hover:bg-blue-700 font-bold text-white rounded">
                                        <span class="">
                                            <i class="fas fa-plus"></i>
                                        </span>
                                        Tambah
                                    </a>
                                </div>

                                <div class="table-wrapper">
                                    <table id="example_data" class="bak w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                        <thead class=" text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                            <tr>
                                                <th data-priority="1" scope="col" class="text-center px-3 py-3">
                                                    No
                                                </th>
                                                <th data-priority="2" scope="col" class="text-center px-3 py-3">
                                                    Nama Item
                                                </th>
                                                <th data-priority="3" scope="col" class="text-center px-3 py-3">
                                                    Deskripsi
                                                </th>
                                                <th data-priority="4" scope="col" class="text-center px-3 py-3">
                                                    Jenis
                                                </th>
                                                <th data-priority="6" scope="col" class="text-center px-3 py-3">
                                                    Satuan
                                                </th>

                                                <th data-priority="7" scope="col" class="text-center px-3 py-3">
                                                    Aksi
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 0;
                                            foreach ($tambahan as $row) :
                                                $no++ ?>
                                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                                    <td data-cell="No " scope="row" class="text-center px-3 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                        <?php echo $no ?>
                                                    </td>
                                                    <td data-cell="Nama " class="text-center w-32 px-3 py-4">
                                                        <?php echo $row->nama ?>
                                                    </td>
                                                    <td data-cell="Deskripsi " class="text-center w-36 px-3 py-4">
                                                        <?php echo $row->deskripsi ?>
                                                    </td>
                                                    <td data-cell="Jenis " class="text-center w-36 px-3 py-4">
                                                        <?php echo $row->jenis ?>
                                                    </td>
                                                    <td data-cell="Jenis " class="text-center w-36 px-3 py-4">
                                                        <?php echo $row->satuan ?>
                                                    </td>
                                                    <td data-cell="Aksi" class="justify-content-center px-3 py-4 flex">
                                                        <a href="<?php echo base_url('operator/edit_tambahan/') . $row->id ?>" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-3 rounded">
                                                            <span class="">
                                                                <i class="fas fa-edit"></i>
                                                            </span>
                                                        </a>
                                                        <button onclick="hapus(<?php echo $row->id ?>)" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-3 rounded ml-3">
                                                            <span class="">
                                                                <i class="fas fa-trash-alt"></i>
                                                            </span>

                                                        </button>
                                                    </td>
                                                </tr>
                                            <?php endforeach ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
    <div class="fixed z-10 overflow-y-auto top-0 w-full left-0 hidden" id="modal">
        <div class="flex items-center justify-center min-height-100vh pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 transition-opacity">
                <div class="absolute inset-0 bg-gray-900 opacity-75">
                </div>
                <span class="hidden sm:inline-block sm:align-middle sm:h-screen">&#8203;</span>
                <div class="inline-block align-center bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">

                </div>
            </div>
        </div>
        <!-- </main> -->

        <!-- jQuery -->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

        <!--Datatables -->
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
        <script>
            function exportData() {
                Swal.fire({
                    title: 'Ekspor Tambahan Peminjaman?',
                    text: 'Data akan di ekspor.',
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya'
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Tambahkan logika ekspor Anda di sini
                        // Misalnya, Anda dapat memicu fungsionalitas ekspor
                        // atau mengirim permintaan ke server untuk mengekspor data

                        // Simulasikan pengiriman permintaan ekspor (gantilah dengan logika sesuai kebutuhan)
                        setTimeout(function() {
                            Swal.fire({
                                title: 'Berhasil!',
                                text: 'Data Anda telah diekspor.',
                                icon: 'success',
                                timer: 1500, // Durasi pesan berhasil ditampilkan (dalam milidetik)
                                showConfirmButton: false,
                            });

                            // Redirect setelah berhasil mengekspor
                            setTimeout(function() {
                                window.location.href = 'export_tambahan';
                            }, 500); // Penundaan 0.5 detik sebelum redirect (sesuaikan dengan kebutuhan Anda)
                        }, 100); // Contoh penundaan 0.1 detik sebelum menampilkan pesan
                    }
                });
            };

            function template() {
                Swal.fire({
                    title: 'Unduh Templat Data Tambahan!',
                    text: "Anda akan mengunduh templat data tambahan",
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    cancelButtonText: 'Batal',
                    confirmButtonText: 'Unduh'
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Lakukan proses ekspor data di sini
                        window.location.href = "<?php echo base_url('operator/template_tambahan') ?>";

                        Swal.fire({
                            icon: 'success',
                            title: 'Data berhasil di unduh',
                            showConfirmButton: false,
                            timer: 2500,
                        });
                    }
                });
            }
        </script>
        <script>
            $(document).ready(function() {

                var table = $('#example_data').DataTable({
                        responsive: false
                    })
                    .columns.adjust()
                    .responsive.recalc();
            });

            function hapus(id) {
                Swal.fire({
                    title: 'Apakah Mau Dihapus?',
                    text: "data ini tidak bisa dikembalikan lagi!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    cancelButtonText: 'Batal',
                    confirmButtonText: 'Hapus'
                }).then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Berhasil Menghapus',
                            showConfirmButton: false,
                            timer: 1500,
                        }).then(function() {
                            window.location.href = "<?php echo base_url('operator/hapus_tambahan/') ?>" + id;
                        });
                    }
                });
            }

            var tableInitialStyle = {}; // Menyimpan gaya awal tabel sebelum diubah

            window.addEventListener('resize', function() {
                if (window.innerWidth > 600) {
                    // Mengembalikan tabel ke ukuran semula ketika layar lebih dari 600px
                    var table = document.querySelector('table');
                    if (table) {
                        for (var style in tableInitialStyle) {
                            table.style[style] = tableInitialStyle[style];
                        }
                    }
                }
            });

            function adjustTableStyle() {
                var table = document.querySelector('table');
                if (table) {
                    if (window.innerWidth <= 600) {
                        // Menyimpan gaya awal tabel sebelum diubah jika lebar layar <= 600px
                        for (var i = 0; i < table.style.length; i++) {
                            var style = table.style[i];
                            tableInitialStyle[style] = table.style[style];
                        }
                        // Menyesuaikan lebar tabel saat mode responsif
                        table.style.width = '100%';
                        // Tambahkan penyesuaian gaya lain jika diperlukan
                    } else {
                        // Kembalikan ke lebar normal jika layar > 600px
                        table.style.width = '';
                        // Kembalikan gaya lain ke nilai default jika diperlukan
                    }
                }
            }

            window.addEventListener('resize', adjustTableStyle);
            adjustTableStyle(); // Panggil fungsi saat halaman dimuat untuk mengatur gaya awal
        </script>
        <script>
            function impor() {
                // Get the form by its ID
                var form = document.getElementById('importForm');

                // Check if the file input is empty
                var fileInput = form.querySelector('[name="file"]');
                if (!fileInput.files.length) {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Peringatan!',
                        text: 'Pilih file untuk diimpor',
                    });
                    return;
                }

                // If the file input is not empty, proceed with the confirmation dialog
                Swal.fire({
                    title: 'Import Data Tambahan Peminjaman?',
                    text: 'Anda akan mengimpor data tambahan',
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    cancelButtonText: 'Batal',
                    confirmButtonText: 'Impor'
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Log the form action for debugging purposes
                        console.log('Form action:', form.action);

                        // Submit the form
                        form.submit();

                        Swal.fire({
                            icon: 'success',
                            title: 'Data berhasil di impor',
                            showConfirmButton: false,
                            timer: 2500,
                        });
                    }
                });
            }
            const setup = () => {
                const getTheme = () => {
                    if (window.localStorage.getItem('dark')) {
                        return JSON.parse(window.localStorage.getItem('dark'))
                    }
                    return !!window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches
                }

                const setTheme = (value) => {
                    window.localStorage.setItem('dark', value)
                }

                return {
                    loading: true,
                    isDark: getTheme(),
                    toggleTheme() {
                        this.isDark = !this.isDark
                        setTheme(this.isDark)
                    },
                }
            }

            function updatePaginationInfo(start, end, total) {
                document.getElementById('pagination-info').innerText = `Showing ${start}-${end} of ${total}`;
            }
        </script>

</body>

</html>