<li class="{{ $item->wrapper_class }} @if(! $item->children->isEmpty()) dropdown @endif">
    @if($item->children->isEmpty())
        <a
            target="{{ $item->target }}"
            class="nav-link block py-2 px-3 md:p-0 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-teal-700 md:dark:hover:text-teal-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 {{ $item->link_class }}"
            href="{{ $item->link }}"
        >
            {{ $item->name }}
        </a>
    @else
        <a
            class="nav-link dropdown-toggle block py-2 px-3 md:p-0 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-teal-700 md:dark:hover:text-teal-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 {{ $item->link_class }}"
            href="{{ $item->link }}"
            id="navbarDropdown"
            role="button"
            data-bs-toggle="dropdown"
            aria-expanded="false"
        >
            {{ $item->name }}
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            @foreach($item->children as $child)
                @include('filament-menu-builder::components.bootstrap5.menu-sub-item', ['item' => $child])
            @endforeach
        </ul>
    @endif
</li>
