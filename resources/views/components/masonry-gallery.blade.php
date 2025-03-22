<div class="max-w-screen-xl mx-auto p-4 flex flex-col justify-center space-y-8">
    <div class="flex flex-col justify-center space-y-8">
        <h3 class="text-center text-4xl uppercase">{{ __('A collection of my work') }}</h3>
        <hr class="w-40 h-1 bg-teal-700 mx-auto">
        <div x-data="{ activeFilter: 'all' }" class="flex flex-row space-x-4 justify-center">
            <button @click="activeFilter = 'all'">
                <span
                    :class="{ 'bg-teal-700 text-white': activeFilter === 'all', 'bg-gray-100 text-gray-800': activeFilter !== 'all' }"
                    class="hover:bg-teal-700 hover:text-white text-xs font-medium me-2 px-2.5 py-0.5 rounded-sm dark:bg-gray-700 dark:text-gray-300">
                    {{ __('All') }}
                </span>
            </button>
            <button @click="activeFilter = 'wedding'">
                <span
                    :class="{ 'bg-teal-700 text-white': activeFilter === 'wedding', 'bg-gray-100 text-gray-800': activeFilter !== 'wedding' }"
                    class="hover:bg-teal-700 hover:text-white text-xs font-medium me-2 px-2.5 py-0.5 rounded-sm dark:bg-gray-700 dark:text-gray-300">
                    {{ __('Wedding') }}
                </span>
            </button>
            <button @click="activeFilter = 'pairs'">
                <span
                    :class="{ 'bg-teal-700 text-white': activeFilter === 'pairs', 'bg-gray-100 text-gray-800': activeFilter !== 'pairs' }"
                    class="hover:bg-teal-700 hover:text-white text-xs font-medium me-2 px-2.5 py-0.5 rounded-sm dark:bg-gray-700 dark:text-gray-300">
                    {{ __('Pairs') }}
                </span>
            </button>
            <button @click="activeFilter = 'events'">
                <span
                    :class="{ 'bg-teal-700 text-white': activeFilter === 'events', 'bg-gray-100 text-gray-800': activeFilter !== 'events' }"
                    class="hover:bg-teal-700 hover:text-white text-xs font-medium me-2 px-2.5 py-0.5 rounded-sm dark:bg-gray-700 dark:text-gray-300">
                    {{ __('Events') }}
                </span>
            </button>
        </div>
    </div>

    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
        <div class="grid gap-4">
            <div>
                <img class="h-auto max-w-full rounded-lg"
                    src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image.jpg" alt="">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg"
                    src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-1.jpg" alt="">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg"
                    src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-2.jpg" alt="">
            </div>
        </div>
        <div class="grid gap-4">
            <div>
                <img class="h-auto max-w-full rounded-lg"
                    src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-3.jpg" alt="">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg"
                    src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-4.jpg" alt="">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg"
                    src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-5.jpg" alt="">
            </div>
        </div>
        <div class="grid gap-4">
            <div>
                <img class="h-auto max-w-full rounded-lg"
                    src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-6.jpg" alt="">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg"
                    src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-7.jpg" alt="">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg"
                    src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-8.jpg" alt="">
            </div>
        </div>
        <div class="grid gap-4">
            <div>
                <img class="h-auto max-w-full rounded-lg"
                    src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-9.jpg" alt="">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg"
                    src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-10.jpg" alt="">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg"
                    src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-11.jpg" alt="">
            </div>
        </div>
    </div>

</div>