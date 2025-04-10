<x-layout>
    <x-hero-section :images="[
    asset('images/hero2.webp'),
    asset('images/hero3.webp'),
        ]"/>
    <x-services-section/>


    <x-why-us-section/>
    <x-contact-section/>
    <script src="//unpkg.com/alpinejs" defer></script>
    @stack('scripts')
</x-layout>