<!-- Header Component -->
<header
    class="w-full bg-white text-[#3B2E2D] shadow-md z-100 top-0 sticky"
    x-data="{ open: false }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-[80px]">
            <!-- Logo -->
            <div class="flex-shrink-0 text-xl font-bold text-[#795946] w-[90px]">
                <a href="">
                    <img src="{{Vite::asset('resources/images/logo2.webp')}}" alt="">
                </a>
            </div>

            <!-- Links (hidden on mobile) -->
            <nav class="hidden md:flex space-x-4 rtl:space-x-reverse">
                <a href="#" class="px-3 py-2 rounded-md text-sm font-medium hover:bg-[#F0E1C7] hover:text-[#3B2E2D]">@lang('header.home')</a>
                <a href="#" class="px-3 py-2 rounded-md text-sm font-medium hover:bg-[#F0E1C7] hover:text-[#3B2E2D]">@lang('header.about')</a>
                <a href="#" class="px-3 py-2 rounded-md text-sm font-medium hover:bg-[#F0E1C7] hover:text-[#3B2E2D]">@lang('header.contact us')</a>
                <!-- <a href="#" class="px-3 py-2 rounded-md text-sm font-medium hover:bg-[#F0E1C7] hover:text-[#3B2E2D]">@lang('header.home')</a> -->
            </nav>

            <!-- Buttons -->
            <div class="hidden md:flex items-center gap-3" :class="{'flex-row-reverse': document.dir === 'rtl'}">
                <!-- <button class="bg-[#A57667] hover:bg-[#795946] text-white px-4 py-2 rounded-lg text-sm">@lang('auth.login')</button> -->
                <!-- <button class="border border-[#A57667] text-[#A57667] hover:bg-[#E2E1DE] px-4 py-2 rounded-lg text-sm">@lang('auth.register')</button> -->
                 @auth 
                 <x-myaccount-dropdown/>
                 @endauth
                <x-language-switcher />
            </div>


            <!-- Mobile Toggle Button -->
            <div class="md:hidden flex items-center">
                <button @click="open = !open" class="text-[#3B2E2D] focus:outline-none">
                    <svg x-show="!open" class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg x-show="open" class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div class="md:hidden" x-show="open" x-transition @click.outside="open = false">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
            <a href="#" class="block px-3 py-2 rounded-md text-base font-medium hover:bg-[#F0E1C7] hover:text-[#3B2E2D]">@lang('header.home')</a>
            <a href="#" class="block px-3 py-2 rounded-md text-base font-medium hover:bg-[#F0E1C7] hover:text-[#3B2E2D]">@lang('header.about')</a>
            <a href="#" class="block px-3 py-2 rounded-md text-base font-medium hover:bg-[#F0E1C7] hover:text-[#3B2E2D]">@lang('header.services')</a>
            <a href="#" class="block px-3 py-2 rounded-md text-base font-medium hover:bg-[#F0E1C7] hover:text-[#3B2E2D]">@lang('header.contact us')</a>
            <div class="pt-3 border-t border-[#E2E1DE] space-y-4 ">
                <button class="w-full mb-2 bg-[#A57667] hover:bg-[#795946] text-white px-4 py-2 rounded-lg text-sm">@lang('auth.login')</button>
                <button class="w-full border border-[#A57667] text-[#A57667] hover:bg-[#E2E1DE] px-4 py-2 rounded-lg text-sm">@lang('auth.register')</button>
                <x-language-switcher />
            </div>
        </div>
    </div>

</header>

