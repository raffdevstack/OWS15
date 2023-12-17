@include('partials.__header')

@include('partials.__student_sidebar')

{{-- right side section --}}
<div class="md:ml-60">

    {{-- reusable page header --}}
    {{-- @include('partials.__student_pageheader') --}}

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
                            <span class="px-1 material-symbols-rounded" style="font-size:20px">clear_all</span>
                            Clearance
                        </a>
                    </li>
                </ol>
            </nav>
        </div>
        <br>
        <div>
            {{-- <a class="btn btn-success" href="{{ route('uploadPage') }}">Upload Page</a> --}}
        </div>

        <div>
            <form action="{{route('uploadproduct')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <input class="border border-gray-900" type="text" name="name" placeholder="Product Name">
                <input class="border border-gray-900" type="text" name="description" placeholder="Product Description">
                <input class="border border-gray-900" type="file" name="file">
                <input class="border border-gray-900" type="submit">
            </form>
        </div>
    </div>
</div>
</div>

@include('partials.__footer')
