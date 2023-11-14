@include('partials.__header')

@include('partials.__student_sidebar')

{{-- right side section --}}
<div class="md:ml-60">

    {{-- reusable page header --}}
    @include('partials.__student_pageheader')

    {{-- main content --}}
    <div class="p-4 m-4 shadow-lg bg-white border-gray-200 rounded-lg " style="min-height: 90vh">
        {{-- navigation container --}}
        <div class="flex items-center  mb-4 rounded ">
            {{-- breadcrumb nav container --}}
            <nav class="flex" aria-label="Breadcrumb">
                <ol class="inline-flex items space-x-1 md:space-x-3">
                    <li aria-current="page" class="inline-flex items-center">
                        <a href="#"
                            class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 ">
                            <span class="px-1 material-symbols-rounded" style="font-size:20px">dashboard</span>
                            Dashboard
                        </a>
                    </li>
                </ol>
            </nav>
        </div>

        {{-- main content --}}
        <div class="md:grid grid-cols-3 gap-4 mb-4 md:p-4 p-2 border rounded-lg">
            <div class="p-4 justify-center align-middle flex flex-col">
                <p class="text-gray-500 text-md">
                    School Year: 2023-2024
                </p>
                <p class="text-gray-500 text-md">
                    Semester: 2nd
                </p>
            </div>
            <div class="p-4 items-center flex-column items-center justify-center text-center rounded-lg border-4 border-yellow-200">
                <div class="w-full justify-center flex">
                    <img class="h-20 rounded-full border-4"
                        @if (Auth::user()->student_picture) src="{{ Auth::user()->student_picture }}"
                    @else src="https://api.dicebear.com/7.x/initials/svg?seed=" @endif />
                </div>

                <div class="text-slate-700">
                    @if (Auth::check())
                        <span class="block text-lg font-bold  ">{{ Auth::user()->student_fname }}
                            {{ Auth::user()->student_lname }}</span>
                        <span class="block text-md truncate ">{{ Auth::user()->email }}</span>
                    @else
                        <p>You are not logged in.</p>
                    @endif
                    <p class="text-sm">Bachelor of Science in Information Technology </p>
                </div>
            </div>
            <div class="p-4 justify-center items-center flex flex-col">
                <button type="button"
                    class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 ">
                    Create QR CODE
                </button>
            </div>
        </div>

    </div>
</div>
</div>

@include('partials.__footer')
