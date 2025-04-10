<x-layout>
    <x-hero-section
        title="Welcome to My Site"
        paragraph="Explore the most amazing content with ease."
        :rtl="false"
        :bgImages="[
        asset('images/hero1.jpg'),
        asset('images/hero2.jpg'),
        asset('images/hero3.jpg'),
    ]" />
    <x-services-section />
    <x-why-us-section />
    <x-contact-section />
    <script src="//unpkg.com/alpinejs" defer></script>
    @stack('scripts')
</x-layout>