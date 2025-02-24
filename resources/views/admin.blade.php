<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Focus - Bootstrap Admin Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    <link rel="stylesheet" href="./vendor/owl-carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="./vendor/owl-carousel/css/owl.theme.default.min.css">
    <link href="./vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet">
</head>

<body>
    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        @include('header')
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        @include('sidebar')
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <x-app-layout>
            <x-slot name="header">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Admin Dashboard') }}
                </h2>
            </x-slot>

            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900">
                            <!-- Your admin dashboard specific content goes here -->
                            <div id="main-wrapper">
                                <!--**********************************
                                    Nav header start
                                ***********************************-->
                                @include('header')
                                <!--**********************************
                                    Header end ti-comment-alt
                                ***********************************-->

                                <!--**********************************
                                    Sidebar start
                                ***********************************-->
                                @include('sidebar')
                                <!--**********************************
                                    Sidebar end
                                ***********************************-->
                                    @include('maincontent')
                                <!--**********************************
                                    Footer start
                                ***********************************-->
                                @include('footer')
                                <!--**********************************
                                    Footer end
                                ***********************************-->
                            </div>

                            <!-- Include your scripts -->
                            <script src="{{ asset('vendor/global/global.min.js') }}"></script>
                            <script src="./js/quixnav-init.js"></script>
                            <script src="./js/custom.min.js"></script>
                            <!-- ... other scripts ... -->
                        </div>
                    </div>
                </div>
            </div>
        </x-app-layout>
        <!--**********************************
            Content body end
        ***********************************-->
