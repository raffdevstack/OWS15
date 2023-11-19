@include('partials.__header')

{{-- external script for reading the qr code --}}
<script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>

@include('partials.__admin_sidebar')

{{-- right side of sidebar --}}
<div class="md:ml-60 pb-4">

    {{-- reusable page header --}}
    @include('partials.__admin_pageheader')

    {{-- main white containter --}}
    <div class="p-4 m-4 shadow-lg bg-white border-gray-200 rounded-lg" style="min-height: 90vh">

        {{-- navigation container --}}
        <div class="flex items-center  mb-4 rounded ">
            {{-- breadcrumb nav container --}}
            <nav class="flex" aria-label="Breadcrumb">
                <ol class="inline-flex items space-x-1 md:space-x-3">
                    <li aria-current="page" class="inline-flex items-center">
                        <a href="#"
                            class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 ">
                            <span class="px-1 material-symbols-rounded" style="font-size:20px">qr_code_scanner</span>
                            QR Code Scanner
                        </a>
                    </li>
                </ol>
            </nav>
        </div>

        {{-- title + button container --}}
        <div class="flex items-center justify-center py-2 mb-4 rounded text-slate-800 ">
            <h2 class=" text-lg font-bold leading-none tracking-tight text-slate-800 md:text-xl ">
                Attendance Scanner
            </h2>
        </div>

        {{-- main content --}}
        <div class="flex items-center justify-center mt-2 mb-4 gap-4">
            {{-- left --}}
            <div class="min-h-full md:flex justify-center rounded-lg ">
                {{-- container for scanner preview --}}
                <div class="w-full border">
                    <video class="w-full max-h-96" id="preview"></video>
                </div>
            </div>


        </div>

        {{-- modal --}}
        <div id="popup-modal" tabindex="-1"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 max-h-full">
            <div class="relative flex items-center justify-center p-4 w-full  min-h-screen bg-opacity-50 bg-gray-900">
                <div class="relative bg-white max-w-md rounded-lg shadow ">
                    <button type="button"
                        class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center "
                        data-modal-hide="popup-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                    <div class="p-4 md:p-5 text-center">
                        <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 " aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        <h3 class="mb-5 text-lg font-normal text-gray-500 ">Are you sure you want to
                            delete this product?</h3>
                        <button data-modal-hide="popup-modal" type="button"
                            class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 ">No,
                            cancel
                        </button>
                        <button data-modal-hide="popup-modal" type="button"
                            class="text-white bg-green-600 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300  font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center me-2">
                            Yes, I'm sure
                        </button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


<script type="text/javascript">
    let scanner = new Instascan.Scanner({
        video: document.getElementById('preview')
    });

    Instascan.Camera.getCameras()
        .then(function(cameras) {
            if (cameras.length > 0) {
                scanner.start(cameras[0]);
            } else {
                alert('No cameras found');
            }
        })
        .catch(function(e) {
            console.error(e);
        });

    scanner.addListener('scan', function(c) {
        if (c) {
            showModal();
        }
    });
</script>

<!-- Add your JavaScript code to handle modal show/hide -->
<script>
    window.onload = function() {
        // showModal();
    };

    function showModal() {
        // Get the modal element
        var modal = document.getElementById('popup-modal');

        // Display the modal
        modal.classList.remove('hidden');
    }

    // Add a function to hide the modal
    function hideModal() {
        // Get the modal element
        var modal = document.getElementById('popup-modal');

        // Hide the modal
        modal.classList.add('hidden');
    }

    // Add a click event listener to the modal close button
    var closeButton = document.querySelector('[data-modal-hide="popup-modal"]');
    if (closeButton) {
        closeButton.addEventListener('click', hideModal);
    }
</script>

@include('partials.__footer')
