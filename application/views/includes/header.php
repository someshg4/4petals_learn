<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4_petals</title>
    <!-- link style sheet -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
    <!-- flaticon -->
    <link rel="stylesheet" href="<?php echo base_url();?>css/flaticon-uicons/css/all/all.css">
    <!-- tailwind -css -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- bootstrap 5 cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <!-- Nav section -->
    <section id="nav_sec" class=" shadow-sm">

        <div class="container border-gray-200">
            <div class="nav_section p-2 flex justify-between items-center" style="border-bottom: 1px solid #e7e7e7;">
                <div class="nav_logo">
                    <a href="index.php"> <img src="assets/logo.png" alt="">
                    </a>
                </div>

                <div class="nav_search">
                    <div class="hidden md:block lg:block">
                        <div class="search_bar flex gap-2 items-center w-96 justify-between">
                            <input type="search" placeholder="Search Course recommended Online Courses"
                                class="bg-transparent w-100">
                            <i class="fi fi-rr-search"></i>
                        </div>

                    </div>
                </div>


                <div class="nav_buttons grid justify-items-center">
                    <img src="assets/svg-icons/user.svg" alt="" class="w-9">
                    <a href="<?= base_url(). "register" ?>" class="text-sm text-gray-500">
                        <p class="text-sm mt-1 hover:text-black font-medium">Register</p>
                    </a>
                </div>
            </div>
            <div class="sticky top-0">
                <div class="nav-items hidden md:block ">

                    <div class="flex justify-center gap-3">
                        <a href="index.php" class="p-3 hover:bg-red-700 hover:text-white text-sm hover:font-medium">Home
                        </a>
                        <div class="relative dropdown">
                            <a
                                class="flex items-center gap-1 p-3  hover:bg-red-700 hover:text-white text-sm hover:font-medium">Explore
                                Courses <i class="fi fi-ss-angle-small-down"></i>

                            </a>
                            <div
                                class="dropdown_list absolute rounded-md shadow-lg grid grid-cols-1 lg:grid-cols-2  overflow-y-scroll">
                                <ul class="grid grid-rows-4">
                                    <li><i class="fi fi-br-angle-small-right"></i><a href=""
                                            class="hover:text-red-800  font-medium ">
                                            Beauty Service</a>
                                        <p class="text-xs text-gray-500 mt-1">Lorem ipsum dolor sit amet, consectetur
                                            adipisicing elit. Distinctio
                                            similique </p>
                                    </li>
                                    <li><i class="fi fi-br-angle-small-right"></i><a href=""
                                            class="hover:text-red-800  font-medium ">
                                            Beauty Service</a>
                                        <p class="text-xs text-gray-500 mt-1">Lorem ipsum dolor sit amet, consectetur
                                            adipisicing elit. Distinctio
                                            similique </p>
                                    </li>
                                    <li><i class="fi fi-br-angle-small-right"></i><a href=""
                                            class="hover:text-red-800  font-medium ">
                                            Beauty Service</a>
                                        <p class="text-xs text-gray-500 mt-1">Lorem ipsum dolor sit amet, consectetur
                                            adipisicing elit. Distinctio
                                            similique </p>
                                    </li>
                                    <li><i class="fi fi-br-angle-small-right"></i><a href=""
                                            class="hover:text-red-800  font-medium ">
                                            Beauty Service</a>
                                        <p class="text-xs text-gray-500 mt-1">Lorem ipsum dolor sit amet, consectetur
                                            adipisicing elit. Distinctio
                                            similique </p>
                                    </li>

                                </ul>
                                <ul class="grid grid-rows-4">
                                    <li><i class="fi fi-br-angle-small-right"></i><a href=""
                                            class="hover:text-red-800  font-medium ">
                                            Beauty Service</a>
                                        <p class="text-xs text-gray-500 mt-1">Lorem ipsum dolor sit amet, consectetur
                                            adipisicing elit. Distinctio
                                            similique </p>
                                    </li>
                                    <li><i class="fi fi-br-angle-small-right"></i><a href=""
                                            class="hover:text-red-800  font-medium ">
                                            Beauty Service</a>
                                        <p class="text-xs text-gray-500 mt-1">Lorem ipsum dolor sit amet, consectetur
                                            adipisicing elit. Distinctio
                                            similique </p>
                                    </li>
                                    <li><i class="fi fi-br-angle-small-right"></i><a href=""
                                            class="hover:text-red-800  font-medium ">
                                            Beauty Service</a>
                                        <p class="text-xs text-gray-500 mt-1">Lorem ipsum dolor sit amet, consectetur
                                            adipisicing elit. Distinctio
                                            similique </p>
                                    </li>
                                    <li><i class="fi fi-br-angle-small-right"></i><a href=""
                                            class="hover:text-red-800  font-medium ">
                                            Beauty Service</a>
                                        <p class="text-xs text-gray-500 mt-1">Lorem ipsum dolor sit amet, consectetur
                                            adipisicing elit. Distinctio
                                            similique </p>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <a href="" class="p-3  hover:bg-red-700 hover:text-white text-sm hover:font-medium">About Us
                        </a>
                        <a href="" class="p-3  hover:bg-red-700 hover:text-white text-sm hover:font-medium">Contact </a>
                    </div>

                </div>
                <div class="block md:hidden p-2 text-end">
                    <i class="fi fi-rr-menu-burger text-lg"></i>
                </div>
            </div>



        </div>

    </section>



