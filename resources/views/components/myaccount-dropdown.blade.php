<div class="relative">
    <!-- Dropdown Button -->
    <button id="dropdownButton" class="flex items-center space-x-2 bg-brand-mid-brown text-white px-4 py-2 rounded-md hover:bg-brand-dark-brown focus:outline-none">
        <span>{{ __('auth.my_account') }}</span>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
        </svg>
    </button>

    <!-- Dropdown Menu -->
    <div id="dropdownMenu" class="absolute right-0 mt-2 w-48 bg-white border border-brand-light-brown rounded-md shadow-lg hidden">
        <ul class="space-y-2 text-brand-dark-brown">
            <!-- Profile Link -->
            <li>
                <a href="{{ route('profile') }}" class="block px-4 py-2 text-sm">{{ __('auth.profile') }}</a>
            </li>
            <!-- Dashboard Link -->
            <li>
                <a href="{{ route('dashboard') }}" class="block px-4 py-2 text-sm">{{ __('auth.dashboard') }}</a>
            </li>
            <div class="border-t border-brand-light-brown my-2"></div> <!-- Divider -->
            <!-- Logout Link -->
            <li>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="block w-full text-left px-4 py-2 text-sm text-red-600 hover:bg-brand-light-brown">{{ __('auth.logout') }}</button>
                </form>
            </li>
        </ul>
    </div>
</div>

<!-- Toggle the dropdown visibility -->
<script>
    document.getElementById('dropdownButton').addEventListener('click', function() {
        const menu = document.getElementById('dropdownMenu');
        menu.classList.toggle('hidden');
    });

    window.addEventListener('click', function(event) {
        const menu = document.getElementById('dropdownMenu');
        if (!event.target.closest('#dropdownButton')) {
            menu.classList.add('hidden');
        }
    });
</script>
