@include('partials.__header', ['$title']) {{-- $title is for title about the browser tab --}}

@include('partials.__admin_sidebar')

{{-- right side of sidebar --}}
<div class="md:ml-60 pb-4">

    {{-- reusable page header --}}
    @include('partials.__admin_pageheader')

    {{-- main white containter --}}
    <div class="md:p-4 p-2 md:mx-4 mx-2 shadow-lg bg-white border-gray-200 rounded-lg " style="min-height: 85vh">

        {{-- navigation container --}}
        <div class="justify-between bg--400 flex items-center mb-4 rounded ">
            {{-- breadcrumb nav container --}}
            <nav class="flex" aria-label="Breadcrumb">
                <ol class="inline-flex items space-x-1">
                    <li class="inline-flex items-center">
                        <a href="{{ route('admin_dashboard') }}"
                            class="inline-flex items-center text-sm font-medium text-gray-400 hover:text-blue-600 ">
                            <span class="px-1 material-symbols-rounded" style="font-size:20px">school</span>
                            Scholarship
                        </a>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <svg class="w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                            <p class=" text-sm font-medium text-gray-700 hover:text-blue-600 ">
                                Create
                            </p>
                        </div>
                    </li>
                </ol>
            </nav>
            <div class="flex">
                <!-- Previous Button -->
                <a href=" {{ route('admin_scholarship') }}"
                    class="flex items-center justify-center px-3 h-8 md:mr-3 text-sm font-medium text-gray-500 bg-white  rounded-lg hover:bg-gray-100 hover:text-gray-700 ">
                    <svg class="w-3.5 h-3.5 me-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 5H1m0 0 4 4M1 5l4-4" />
                    </svg>
                    back
                </a>
            </div>
        </div>

        {{-- title + button container --}}
        <div class="flex flex-col items-center justify-center py-2 rounded text-slate-800 ">
            <h2 class=" text-lg font-bold leading-none tracking-tight text-slate-800 md:text-xl ">
                Scholarship Programs
            </h2>
        </div>

        {{-- main content --}}
        <div class="flex bg--600 flex-row mt-2 mb-4 gap-4 w-full relative">

            <form class="w-full bg--600 ">
                <div class="mb-5 bg--200">
                    <label for="base-input" class="block mb-1 text-sm font-medium text-gray-900 ">Scholarship
                        name</label>
                    <input type="text" id="base-input"
                        class="bg-gray-50 border  border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                </div>
                <div class="mb-5 bg--200">
                    <label for="base-input" class="block mb-1 text-sm font-medium text-gray-900 ">Scholarship
                        provider</label>
                    <input type="text" id="base-input"
                        class="bg-gray-50 border  border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                </div>
                <div class="mb-5 bg--400">
                    <label for="base-input" class="block mb-1 text-sm font-medium text-gray-900 ">Descripition</label>
                    <textarea id="base-input"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        rows="5"></textarea>
                </div>
                <div class="mb-5 bg--400">
                    <label for="base-input" class="block mb-1 text-sm font-medium text-gray-900 ">Requirements</label>
                    <textarea id="base-input"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        rows="5"></textarea>
                </div>
                <div class="mb-5 bg--400">
                    <label for="base-input" class="block mb-1 text-sm font-medium text-gray-900 ">Qualifications</label>
                    <textarea id="base-input"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        rows="5"></textarea>
                </div>
                <div class="mb-5 bg--400">
                    <label for="base-input" class="block mb-1 text-sm font-medium text-gray-900 ">Benefits</label>
                    <textarea id="base-input"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        rows="5"></textarea>
                </div>
            </form>

        </div>

    </div>
</div>


@include('partials.__footer')
