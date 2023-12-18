@include('partials.__header')

<div class="min-h-screen min-w-full flex flex-col md:flex-row  ">
    <!--left-->
    <div class="bg-white ouryellowbg shadow-lg rounded-lg md:w-1/2 sm:w-full min-h-full m-5 md:mr-0  ">
        <div class="m-3 p-3 md:p-8 md:pb-2 rounded-lg flex flex-col relative"style=" height:96%; ">
            <div class="mb-6">
                <h1 class="text-3xl font-bold text-white">Welcome back to OSAS Web Services</h1>
                <p class="mt-4 text-white text-xl">
                    Log in to access your personalized student services—a seamless experience tailored just for you.
                </p>
            </div>
            <div class="hidden w-full mt-4 align-bottom md:block flex items-center justify-center">
                <!-- Image at the very center -->
                <img src="/images/student/welcome_vector.png" alt="" class="m-auto w-96 ">
            </div>
            <div class="flex items-center  w-full relative justify-center mt-auto">
                <div class="w-12 h-12 rounded-full ouryellowbg flex items-center justify-center">
                    <i class='bx bxl-facebook-square' style='color:#ffffff; font-size: 30px;'></i>
                </div>
                <div class="w-12 h-12 rounded-full ouryellowbg flex items-center justify-center ml-4">
                    <i class='bx bx-world' style="color:#ffffff; font-size: 30px;"></i>
                </div>
                <div class="w-12 h-12 rounded-full ouryellowbg flex items-center justify-center ml-4">
                    <i class='bx bxl-gmail' style='color:#ffffff; font-size: 30px;'></i>
                </div>
            </div>
        </div>
    </div>
    <!--right-->
    <div
        class="shadow-lg p-8 bg-white rounded-lg min-h-full m-5 mt-0 md:w-1/2 min-h-full flex flex-col sm:w-full md:mt-5">
        <div>
            <h1 class="text-2xl font-bold text-gray-800 text-center">Student Login</h1>
            <img src="/images/student/login_image.png" alt="" class="m-auto w-96 ">
            <div class=" my-6 flex flex-col">
                    <h2 class="my-2">Login using your USeP email</h2>
                    {{-- google_redirect --}}
                    {{--  --}}
                    <a class="block" href="{{ route('google_redirect') }}">
                        <button type="button"
                            class="text-white w-full flex justify-center bg-[#4285F4] hover:bg-[#4285F4]/90 focus:ring-4 focus:outline-none focus:ring-[#4285F4]/50 font-medium rounded-full text-sm px-4 py-2.5 text-center inline-flex items-center dark:focus:ring-[#4285F4]/55 mr-2 mb-2">
                            <svg class="w-4 h-4 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 18 19">
                                <path fill-rule="evenodd"
                                    d="M8.842 18.083a8.8 8.8 0 0 1-8.65-8.948 8.841 8.841 0 0 1 8.8-8.652h.153a8.464 8.464 0 0 1 5.7 2.257l-2.193 2.038A5.27 5.27 0 0 0 9.09 3.4a5.882 5.882 0 0 0-.2 11.76h.124a5.091 5.091 0 0 0 5.248-4.057L14.3 11H9V8h8.34c.066.543.095 1.09.088 1.636-.086 5.053-3.463 8.449-8.4 8.449l-.186-.002Z"
                                    clip-rule="evenodd"/>
                            </svg>
                            Continue with Google
                        </button>
                    </a>
            </div>
        </div>

        {{-- terms and conditions and privacy policy --}}

        <div class="lg:mt-auto mt-4 text-gray-700 text-base">
            <p>By signing up, you agree to our <a href="{{ route('terms_conditions') }}" target="_blank"
                    class="ouryellow font-bold">Terms of Service</a> and <a href="{{ route('data_privacy') }}"
                    target="_blank" class="ouryellow font-bold">Privacy Policy</a>.</p>
        </div>
    </div>
</div>


@include('partials.__footer')
