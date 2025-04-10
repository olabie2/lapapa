<x-layout>
<div class="container mt-[160px ]">
<div class="min-h-screen flex flex-col lg:flex-row space-y-4">


    <div class="flex w-full lg:w-2/2 items-center justify-center p-6 sm:p-12 bg-brand-off-white">
        <form method="POST" action="{{ route('login')}}" class="w-full max-w-md space-y-6" novalidate>
            @csrf

            <div>
                <h1 class="text-2xl font-bold text-brand-dark-brown">{{ __('login.title') }}</h1>
                <p class="text-brand-mid-brown mt-1">{{ __('login.subtitle') }}</p>
            </div>

            <div>
                <label for="email" class="block text-sm font-medium text-brand-dark-brown mb-1">
                    {{ __('login.email') }}
                </label>
                <input
                    id="email"
                    name="email"
                    type="email"
                    required
                    placeholder="{{ __('login.email') }}"
                    class="w-full px-4 py-2 border border-brand-light-brown rounded-md bg-white text-brand-dark-brown focus:ring-2 focus:ring-brand-light-brown outline-none transition"
                    aria-invalid="@error('email') true @enderror"
                >
                @error('email')
                    <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="password" class="block text-sm font-medium text-brand-dark-brown mb-1">
                    {{ __('login.password') }}
                </label>
                <input
                    id="password"
                    name="password"
                    type="password"
                    required
                    placeholder="{{ __('login.password') }}"
                    class="w-full px-4 py-2 border border-brand-light-brown rounded-md bg-white text-brand-dark-brown focus:ring-2 focus:ring-brand-light-brown outline-none transition"
                    aria-invalid="@error('password') true @enderror"
                >
                @error('password')
                    <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex items-center justify-between">
                <label class="inline-flex items-center text-sm text-brand-dark-brown">
                    <input type="checkbox" name="remember" class="form-checkbox text-brand-light-brown">
                    <span class="ml-2">{{ __('login.remember') }}</span>
                </label>
                <a href="" class="text-sm text-brand-mid-brown hover:underline">
                    {{ __('login.forgot_password') }}
                </a>
            </div>

            <button type="submit"
                class="w-full bg-brand-mid-brown text-white font-semibold px-4 py-2 rounded-md hover:bg-brand-light-brown transition">
                {{ __('login.login') }}
            </button>
        </form>
    </div>
</div>
</div>
</x-layout>