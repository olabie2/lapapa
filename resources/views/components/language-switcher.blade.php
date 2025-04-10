<!-- language switcher -->
<div x-data="{ open: false, currentLanguage: '{{ LaravelLocalization::getCurrentLocaleNative() }}' }" class="relative">
    <button
        @click="open = !open"
        class="w-full border border-[#A57667] text-[#A57667] hover:bg-[#E2E1DE] px-4 py-2 rounded-lg text-sm flex items-center justify-between">
        <div class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-4.037M12 21a9.004 9.004 0 01-8.716-4.037M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a3.001 3.001 0 00-3 3m0 0a3.001 3.001 0 013 3m0 0a3.001 3.001 0 003 3m0 0a3.001 3.001 0 01-3 3" />
            </svg>
            <span x-text="currentLanguage"></span>
        </div>
        <svg
            xmlns="http://www.w3.org/2000/svg"
            class="w-5 h-5 transition-transform"
            :class="{ 'rotate-180': open }"
            viewBox="0 0 20 20"
            fill="currentColor">
            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
        </svg>
    </button>

    <div
        x-show="open"
        @click.away="open = false"
        class="absolute z-10 w-full mt-2 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none"
        role="menu"
        aria-orientation="vertical"
        aria-labelledby="menu-button"
        tabindex="-1">
        <div class="py-1" role="none">
            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
            <a
                href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"
                class="block px-4 py-2 text-sm text-[#A57667] hover:bg-[#E2E1DE] hover:text-[#A57667]"
                role="menuitem"
                tabindex="-1"
                @click="currentLanguage = '{{ $properties['native'] }}'; open = false;">
                {{ $properties['native'] }}
            </a>
            @endforeach
        </div>
    </div>
</div>
<!-- End language switcher -->