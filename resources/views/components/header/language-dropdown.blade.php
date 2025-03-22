<button type="button" data-dropdown-toggle="language-dropdown-menu" class="inline-flex items-center font-medium justify-center px-4 py-2 text-sm text-gray-900 dark:text-white rounded-lg cursor-pointer hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
    @php
      $currentLocale = app()->getLocale();
      $flagClass = $currentLocale === 'en' ? 'fi-us' : 'fi-' . $currentLocale;
    @endphp
    <div class="">
      <span class="fi {{ $flagClass }} fib w-8 h-8"></span>
    </div>
  </button>
  <!-- Dropdown -->
  <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow-sm dark:bg-gray-700" id="language-dropdown-menu">
    <ul class="py-2 font-medium" role="none">
      <li>
        <a href="{{ route('localized.home', ['locale' => 'en']) }}" class="block text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">
          <div class="">
            <span class="fi fi-us me-2"></span>              
            {{ __('English (US)') }}
          </div>
        </a>
      </li>
      <li>
        <a href="{{ route('localized.home', ['locale' => 'es']) }}" class="block text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">
          <div class="">
            <span class="fi fi-es me-2"></span>
            {{ __('Spanish') }}
          </div>
        </a>
      </li>
    </ul>
  </div>