<ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 dark:border-gray-700">
    @foreach($menuItems as $menuItem)
        @include('filament-menu-builder::components.bootstrap5.menu-item', ['item' => $menuItem])
    @endforeach
</ul>
