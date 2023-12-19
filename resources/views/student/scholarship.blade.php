<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Include Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0"/>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.js">
    @include('partials.__header')
    @include('partials.__student_sidebar')
    <title>Scholarship</title>
    <style>
        body {
            font-family: Inter, ui-sans-serif, system-ui, -apple-system, system-ui, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
        }
    </style>
</head>
<body>
{{-- right side section --}}
<div class="md:ml-60">
    {{-- reusable page header --}}
    @include('partials.__student_pageheader')

    {{-- main content --}}
    <div class="p-4 m-4 shadow-lg bg-white border-gray-200 rounded-lg " style="min-height: 90vh">
        {{-- navigation container --}}
        <div class="flex items-center mb-4 rounded">
            {{-- breadcrumb nav container --}}
            <nav class="flex" aria-label="Breadcrumb">
                <ol class="inline-flex items space-x-1 md:space-x-3">
                    <li aria-current="page" class="inline-flex items-center">
                        <a href="#"
                            class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 ">
                            <span class="px-1 material-symbols-rounded" style="font-size:20px">school</span>
                            Scholarship
                        </a>
                    </li>
                </ol>
            </nav>
        </div>
        <div class="flex items-center justify-center py-2 mb-4 rounded">
            <ol class="inline-flex items space-x-1 md:space-x-3">
                <li aria-current="page"
                    class="inline-flex items-center text-sm font-medium dark:text-gray-900">
                    <span class="flex-1 ml-3 whitespace-nowrap text-2xl">Scholarship</span>
                </li>
            </ol>
        </div>

        <div style="margin-left: 5%; margin-right: 5%;">
            <div class="mt-6 rounded">
                <div class="bg--100 relative flex justify-start border-box truncate w-auto mb-2 p-2 bg-white border border-gray-300 rounded-lg hover:shadow-lg shadow-lg">
                    <div class="w-full bg--100 md:items-left flex flex-col truncate">
                        <div class="h-full items-center flex">
                            <a href="#">
                                <h4 class="text-md text-gray-700 truncate">My Scholarship</h4>
                            </a>
                        </div>
                        <!-- status -->
                        <div class="bg-300 mt-2 mb-4 pl-3  lg:grid lg:grid-cols-3 md:grid md:grid-cols-2 gap-2">
                            <div class="bg-300 border text-gray-600 rounded-lg p-2 hover:shadow-md transition-all">
                                <div class="flex items-center gap-1">
                                    <h4 class="truncate font-medium">Ched Scholarship Program Grantee</h4>
                                </div>  
                                <div class="flex mt-2 font-medium justify-end gap-1">
                                    <button>
                                        <a href="#" class="bg-red-900 text-white text-sm p-2 flex items-center rounded-full hover:bg-red-700 transition-all">
                                            <span class="px-4 rounded-full">Status</span>
                                        </a>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!--  -->
                    </div>
                </div>
                <div class="mt-2 mb-4 gap-2 flex justify-end">
                    <span class="flex gap-1">
                        <select id="#" style="border: 1px solid black; border-radius: 30px;" class="bg-white rounded-lg  border-black-1 text-black text-sm  focus:ring-black focus:border-white block w-full p-1 md:p-2 dark:bg-white dark:border-white dark:placeholder-black dark:text-black dark:focus:ring-white dark:focus:border-white">
                            <option selected>All</option>
                            <option value="latest">Latest</option>
                            <option value="oldest">Oldest</option>
                        </select>
                    </span>
                </div>
                <!-- scholarship -->
                <div class="mb-4  ">
                    <div class="bg--100  relative flex justify-start border-box truncate w-full mb-2 p-2 bg-gray-200 border border-gray-300 rounded-lg hover:shadow-xl shadow-sm">
                        <div class="bg-300 mt-2 mb-4 lg:grid lg:grid-cols-3 md:grid md:grid-cols-2 gap-2 p-2">
                            <img class="rounded-xl" src="/images/ows_logo.png" alt="">  
                            <div class="p-3" >
                                <ul>
                                    <li> <h1 style="font-weight:bold;" class="text-lg">TDP Scholarship Program</h1></li>
                                    <li> <h2>Who may apply?</h2></li>
                                    <li class="list-disc ml-2 "><h3 class="text-justify">Scholarships are open to dedicated and  qualified individuals who aspire to pursue </h3>
                                    <h3>academic excellence, regardless of financial constraints.</h3></li>  
                                    <li class="list-disc ml-2"><h3>applicants include students at various levels of education, from <br> high school  graduates to postgraduate candidates</h3></li> 
                                </ul>
                            </div>
                            <div class="flex  font-medium justify-end gap-1 p-8 " style="margin-left: 10px; margin-top: 60px;">
                                <button>
                                    <a href="#" class="bg-red-900 text-white text-sm p-2 flex items-center rounded-full hover:shadow-lg transition-all"><span class="px-1 rounded-full">MORE DETAILS</span></a>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="bg--100 relative flex justify-start border-box truncate w-full mb-2 p-2 bg-gray-200  border border-gray-300 rounded-lg hover:shadow-lg shadow-sm">
                        <div class="bg-300 mt-2 mb-4 lg:grid lg:grid-cols-3 md:grid md:grid-cols-2 gap-2 p-2">
                            <img class="rounded-xl" src="/images/ows_logo.png" alt="">  
                            <div class="p-3">
                                <ul>
                                    <li> <h1 style="font-weight:bold;" class="text-lg">Prencess Sofia Scholarship</h1></li>
                                    <li> <h2>Who may apply?</h2></li>
                                    <li class="list-disc ml-2 "><h3 class="text-justify">Scholarships are open to dedicated and  qualified individuals who aspire to pursue </h3>
                                    <h3>academic excellence, regardless of financial constraints.</h3></li>  
                                    <li class="list-disc ml-2"><h3>applicants include students at various levels of education, from <br> high school  graduates to postgraduate candidates</h3></li> 
                                </ul>
                            </div>
                            <div class="flex  font-medium justify-end gap-1 p-8 " style="margin-left: 10px; margin-top: 60px;">
                                <button><a href="#" class="bg-red-900 text-white text-sm p-2 flex items-center rounded-full hover:shadow-lg transition-all"><span class="px-1 rounded-full">MORE DETAILS</span></a></button>
                            </div>
                        </div>
                    </div>
                    <div class="bg--100 relative flex justify-start border-box truncate w-full mb-2 p-2 bg-gray-200 border border-gray-300 rounded-lg hover:shadow-lg shadow-sm">
                        <div class="bg-300 mt-2 mb-4 lg:grid lg:grid-cols-3 md:grid md:grid-cols-2 gap-2 p-2">
                            <img class="rounded-xl" src="/images/ows_logo.png" alt="">  
                            <div class="p-3">
                                <ul>
                                    <li> <h1 style="font-weight:bold;" class="text-lg">Ched Scholarship Program</h1></li>
                                    <li> <h2>Who may apply?</h2></li>
                                    <li class="list-disc ml-2 "><h3 class="text-justify">Scholarships are open to dedicated and  qualified individuals who aspire to pursue </h3>
                                    <h3>academic excellence, regardless of financial constraints.</h3></li>  
                                    <li class="list-disc ml-2"><h3>applicants include students at various levels of education, from <br> high school  graduates to postgraduate candidates</h3></li> 
                                </ul>
                            </div>
                            <div class="flex  font-medium justify-end gap-1 p-8 " style="margin-left: 10px; margin-top: 60px;">
                                <button>
                                    <a href="#" class="bg-red-900 text-white text-sm p-2 flex items-center rounded-full hover:shadow-lg transition-all"><span class="px-1 rounded-full">MORE DETAILS</span></a>
                                </button>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('partials.__footer')
</body>
</html>
