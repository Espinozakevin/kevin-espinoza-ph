<section class="h-[750px]"
    style="background: url('{{ asset('storage/img/landscape-4547734_1920%201.jpg') }}') center center no-repeat; background-blend-mode: multiply; background-size: cover; background-color: rgba(0, 0, 0, 0.3);">
    <div class="mx-auto max-w-screen-xl flex flex-col text-center h-full pt-8 lg:pt-16">
        <div class="px-6 py-4 bg-white/50 dark:bg-neutral-500/50 rounded-full backdrop-filter backdrop-blur-sm">
            @include('components.header')
        </div>
        <div class="max-w-[900px] mx-auto text-center h-full flex flex-col justify-center my-auto space-y-8">
            <h1 class="text-7xl font-extrabold text-white">{{ __('Be different, Be original') }}</h1>
            <h2 class="text-4xl font-normal text-white">{{ __('Make an impact with modern, accessible and timeless
                galleries') }}</h2>
            <button type="button"
                class="text-white w-fit mx-auto bg-teal-700 hover:bg-teal-800 focus:ring-4 focus:outline-none focus:ring-teal-300 font-medium rounded-full text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-teal-600 dark:hover:bg-teal-700 dark:focus:ring-teal-800">
                Choose plan
                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 5h12m0 0L9 1m4 4L9 9" />
                </svg>
            </button>
        </div>

    </div>

</section>