@include('partials.__header', ['$title']) {{-- $title is for title about the browser tab --}}

@include('partials.__admin_sidebar')

{{-- right side of sidebar --}}
<div class=" md:ml-64 pb-4">

    {{-- reusable page header --}}
    @include('partials.__admin_pageheader')

    {{-- main white containter --}}
    <div class="p-4 mx-4 shadow-lg bg-white border-gray-200 rounded-lg " style="min-height: 85vh">

        {{-- navigation container --}}
        <div class="justify-between flex items-center  mb-4 rounded  ">
            {{-- breadcrumb nav container --}}
            <nav class="flex" aria-label="Breadcrumb">
                <ol class="inline-flex items space-x-1">
                    <li class="inline-flex items-center">
                        <a href="{{ route('admin_dashboard') }}"
                            class="inline-flex items-center text-sm font-medium text-gray-400 hover:text-blue-600 ">
                            <span class="px-1 material-symbols-rounded" style="font-size:20px">dashboard</span>
                            Dashboard
                        </a>
                    </li>

                    <li aria-current="page">
                        <div class="flex items-center">
                            <svg class="w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                            <p class=" text-sm font-medium text-gray-400 hover:text-blue-600 ">
                                Admins
                            </p>
                        </div>
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
                <a href=" {{ route('admin_manage') }}"
                    class="flex items-center justify-center px-3 h-8 me-3 text-sm font-medium text-gray-500 bg-white  rounded-lg hover:bg-gray-100 hover:text-gray-700 ">
                    <svg class="w-3.5 h-3.5 me-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 5H1m0 0 4 4M1 5l4-4" />
                    </svg>
                    back
                </a>
            </div>
        </div>

        {{-- main content --}}
        <div class="flex flex-row mt-2 mb-4 gap-4">

            {{-- left --}}
            <div class="w-1/3 hidden min-h-full md:flex items-center justify-center rounded-lg bg-gray-50 ">
                <img src="{{ asset('images/admin/create.png') }}" class="h-max" />
            </div>

            {{-- right - create new admin form --}}
            <div
                class="md:w-2/3 w-full px-6 py-6 lg:px-8 relative bg-white rounded-lg overflow-y-auto border border-yellow-500 ">
                <form action="{{ route('admin_store_create') }}" method="POST" class=" flex flex-col m-0"
                    enctype="multipart/form-data">
                    @csrf
                    <h2 class=" text-lg font-bold leading-none tracking-tight text-slate-800 md:text-xl ">
                        Create New Admin
                    </h2>
                    <div class="flex mt-4 gap-4">
                        <span class=" text-red-500 text-xs font-small py-0.5 rounded-full ">
                            * Required
                        </span>
                        <span class=" text-gray-500 text-xs font-small py-0.5 rounded-full ">
                            Put N/A to Not Applicable fields
                        </span>
                    </div>
                    {{-- create account inputs --}}
                    <div class="lg:grid grid-cols-2 mt-4 gap-6 ">
                        {{-- first column --}}
                        <div class="col">
                            {{-- Input Lastname --}}
                            <div class="">
                                <label for="admin_lname" class="block text-gray-600 font-bold text-sm">Last
                                    Name <span class="text-red-500">*</span></label>
                                <input type="text" name="admin_lname" id="admin_lname" required
                                    class="mt-1 h-10 px-4 py-2 w-full rounded-full border border-gray-300 focus:outline-none focus:border-yellow-400"
                                    value="{{ old('admin_lname') }}">
                                @include('partials.__input_error', ['fieldName' => 'admin_lname'])
                            </div>
                            {{-- Input firstname --}}
                            <div class="mt-4">
                                <label for="admin_fname" class="block text-gray-600 font-bold text-sm">First
                                    Name <span class="text-red-500">*</span></label>
                                <input type="text" name="admin_fname" id="admin_fname" required
                                    class=" mt-1 h-10 px-4 py-2 w-full rounded-full border
                    border-gray-300 focus:outline-none focus:border-yellow-400"
                                    value="{{ old('admin_fname') }}">
                                @include('partials.__input_error', ['fieldName' => 'admin_fname'])
                            </div>
                            {{-- Input MI --}}
                            <div class="mt-4">
                                <label for="admin_mi" class="block text-gray-600 font-bold text-sm">Middle
                                    Initial <span class="text-red-500">*</span></label>
                                <input type="text" name="admin_mi" id="admin_mi" required
                                    class="mt-1 h-10 px-4 py-2 w-full rounded-full border
                    border-gray-300 focus:outline-none focus:border-yellow-400"
                                    value="{{ old('admin_mi') }}">
                                @include('partials.__input_error', ['fieldName' => 'admin_mi'])
                            </div>
                            {{-- input email --}}
                            <div class="mt-4">
                                <label for="email" class="block text-gray-600 font-bold text-sm">Email
                                    <span class="text-red-500">*</span>
                                </label>
                                <input type="email" name="email" id="email" required
                                    class="h-10 mt-1 px-4 py-2 w-full rounded-full border border-gray-300 focus:outline-none focus:border-yellow-400"
                                    value="{{ old('email') }}">
                                @include('partials.__input_error', ['fieldName' => 'email'])
                            </div>
                            {{-- input photo --}}
                            <div class="mt-4">
                                <label for="admin_image" class="block text-gray-600 font-bold text-sm">
                                    Image Profile
                                </label>
                                <input type="file" name="admin_image" id="admin_image"
                                    class="block w-full text-sm text-slate-500
                                    file:mr-4 file:py-2 file:px-4 mt-1
                                    rounded-full border border-gray-300
                                    file:text-sm file:font-semibold
                                      file:bg-yellow-400 file:border-none file:text-slate-700
                                value="{{ old('admin_image') }}" />
                                @include('partials.__input_error', ['fieldName' => 'admin_image'])
                            </div>
                        </div>
                        {{-- second column --}}
                        <div class="col">
                            <div class="">
                                <label for="employee_id" class="block text-gray-600 font-bold text-sm">Employee
                                    ID <span class="text-red-500">*</span></label>
                                <input type="text" name="employee_id" id="employee_id" required
                                    class="text-base h-10 mt-1 px-4 py-2 w-full rounded-full border border-gray-300 focus:outline-none focus:border-yellow-400"
                                    value="{{ old('employee_id') }}">
                                @include('partials.__input_error', ['fieldName' => 'employee_id'])
                            </div>
                            <div class="mt-4">
                                <label for="admin_contact" class="block text-gray-600 font-bold text-sm">Contact
                                    Number</label>
                                <input type="text" name="admin_contact" id="admin_contact"
                                    class="text-base h-10 mt-1 px-4 py-2 w-full rounded-full border border-gray-300 focus:outline-none focus:border-yellow-400"
                                    value="{{ old('admin_contact') }}">
                                @include('partials.__input_error', ['fieldName' => 'admin_contact'])
                            </div>
                            {{-- input office --}}
                            <div class="mt-4">
                                <label for="office_id" class="block text-gray-600 font-bold text-sm">
                                    Office <span class="text-red-500">*</span></label>
                                <select name="office_id" id="office_id" required
                                    class="text-base  h-10 mt-1 px-4 py-2 w-full rounded-full border border-gray-300 focus:outline-none focus:border-yellow-400">
                                    <option value="" selected>Select an Office</option>
                                    @foreach ($offices as $office)
                                        <option value="{{ $office->office_id }}"
                                            @if (old('office_id') == $office->office_id) selected @endif>
                                            {{ $office->office_name }}</option>
                                    @endforeach
                                </select>
                                @include('partials.__input_error', ['fieldName' => 'office_id'])
                            </div>
                            {{-- input admin types --}}
                            <div class="mt-4">
                                <label for="admintype_id" class="block text-gray-600 font-bold text-sm">Admin
                                    Type <span class="text-red-500">*</span></label>
                                <select name="admintype_id" id="admintype_id" required
                                    class="text-base h-10 mt-1 px-4 py-2 w-full rounded-full border border-gray-300 focus:outline-none focus:border-yellow-400">
                                    <option value="" selected>Select Admin Type</option>
                                    @foreach ($admin_types as $admin_type)
                                        @if ($admin_type->admintype_id != 1)
                                            <option value="{{ $admin_type->admintype_id }}"
                                                @if (old('admintype_id') == $admin_type->admintype_id) selected @endif>
                                                {{ $admin_type->admintype_name }}
                                            </option>
                                        @endif
                                    @endforeach
                                </select>
                                @include('partials.__input_error', ['fieldName' => 'admintype_id'])
                            </div>
                        </div>
                    </div>
                    {{-- Password Prompts --}}
                    <div id="password-error"
                        class="hidden text-xs mt-4 bg-red-200 max-w-content text-red-600 px-2 py-1 rounded">
                        Password must be at least 8 characters long and contain one uppercase letter, one
                        lowercase letter, one special character, and one number.
                    </div>

                    {{-- submit button --}}
                    <div class="mt-6">
                        <input type="submit"
                            class="block w-full h-10 hover:bg-red-900 text-white font-medium py-2 rounded-full text-center transition duration-300 ourmaroonbg"
                            value="Create Admin Account">
                    </div>
                </form>
            </div>

        </div>


    </div>

</div>

@include('partials.__footer')
