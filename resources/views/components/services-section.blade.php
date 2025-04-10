<!-- resources/views/components/services-section.blade.php -->

{{-- Add CSS for animations and styling (Tailwind example below, adapt as needed) --}}
{{-- You might put this in your main CSS file or a component-specific CSS --}}
{{-- IMPORTANT: Ensure your CSS setup handles RTL (Right-to-Left) for Arabic/Hebrew if needed --}}
<style>
    /* .service-card-image {
        transition: transform 0.3s ease-out;
    }

    .service-card:hover .service-card-image {
        transform: scale(1.05);
    } */

    /* Simple fade-in animation (using Intersection Observer API is better for performance) */
    /* .reveal-on-scroll {
        opacity: 0;
        transform: translateY(30px);
        transition: opacity 0.6s ease-out, transform 0.6s ease-out;
    }

    .reveal-on-scroll.is-visible {
        opacity: 1;
        transform: translateY(0);
    } */

    /* Fix icon position potentially */
</style>

<section id="services" class="py-16 md:py-24 overflow-hidden">
    {{-- Add dir="rtl" dynamically here or on <html> tag based on App::getLocale() if needed --}}
    <div class="container mx-auto px-4">

        {{-- Section Header --}}
        <div class="text-center mb-12 md:mb-16 reveal-on-scroll">
            <h2 class="text-3xl md:text-4xl font-serif font-bold text-gray-800 mb-3">
                {{ __('services.section_title') }}
            </h2>
            <p class="text-lg md:text-xl text-gray-600 max-w-3xl mx-auto">
                {{ __('services.section_subtitle') }}
            </p>
        </div>

        {{-- Services Grid --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 md:gap-10">

            {{-- Service Card 1: Alterations --}}
            <div class="service-card bg-white rounded-lg shadow-md overflow-hidden reveal-on-scroll" style="transition-delay: 0.1s;">
                <div class="overflow-hidden h-56">
                    <img src="{{asset('images/tools2.jpg')}}"
                        alt="{{ __('services.alt_text_1') }}" {{-- Use translation key for alt text --}}
                        class="w-full h-full object-cover service-card-image">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold font-serif text-gray-800 mb-2">
                        {{ __('services.card1_title') }}
                    </h3>
                    <p class="text-gray-600 text-base">
                        {{ __('services.card1_desc') }}
                    </p>
                </div>
            </div>

            {{-- Service Card 2: Household Textiles --}}
            <div class="service-card bg-white rounded-lg shadow-md overflow-hidden reveal-on-scroll" style="transition-delay: 0.2s;">
                <div class="overflow-hidden h-56">
                    <img src="{{asset('images/dress4.jpg')}}"
                        alt="{{ __('services.alt_text_2') }}" {{-- Use translation key for alt text --}}
                        class="w-full h-full object-cover service-card-image">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold font-serif text-gray-800 mb-2">
                        {{ __('services.card2_title') }}
                    </h3>
                    <p class="text-gray-600 text-base">
                        {{ __('services.card2_desc') }}
                    </p>
                </div>
            </div>

            {{-- Service Card 3: Ironing --}}
            <div class="service-card bg-white rounded-lg shadow-md overflow-hidden reveal-on-scroll" style="transition-delay: 0.3s;">
                <div class="overflow-hidden h-56">
                    <img src="{{asset('images/iron2.jpg')}}"
                        alt="{{ __('services.alt_text_3') }}" {{-- Use translation key for alt text --}}
                        class="w-full h-full object-cover service-card-image">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold font-serif text-gray-800 mb-2">
                        {{ __('services.card3_title') }}
                    </h3>
                    <p class="text-gray-600 text-base">
                        {{ __('services.card3_desc') }}
                    </p>
                </div>
            </div>

            {{-- Optional Highlight Card/Section --}}
            {{-- Note: The md:text-left and md:flex might need RTL adjustments in your CSS --}}
            <div class="md:col-span-2 lg:col-span-3 mt-8 reveal-on-scroll" style="transition-delay: 0.4s;">
                <div class="bg-gradient-to-r from-blue-50 to-indigo-100 p-6 rounded-lg text-center md:text-left md:flex items-center gap-6">
                    {{-- Optional Icon (Assuming icon itself doesn't need translation, but its position might need RTL adjustment via CSS) --}}
                    <div class="mb-4 md:mb-0 text-indigo-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto md:mx-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L1.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L24.99 5.25l-.813 2.846a4.5 4.5 0 00-3.09 3.09L18.25 12zm-9.75 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 24l-2.846-.813a4.5 4.5 0 00-3.09-3.09L8.51 17.25zM18.25 12a6 6 0 11-12 0 6 6 0 0112 0z" />
                        </svg>
                    </div>
                    <div>
                        <h4 class="text-xl font-semibold font-serif text-gray-800 mb-1">
                            {{ __('services.highlight_title') }}
                        </h4>
                        <p class="text-gray-700">
                            {{ __('services.highlight_desc') }}
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- {{-- Add JS for Intersection Observer (more robust animation trigger) --}}
{{-- This JS doesn't contain translatable text --}}
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    // Optional: Unobserve after animation to save resources
                    // observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.1 // Trigger when 10% of the element is visible
        });

        const elementsToReveal = document.querySelectorAll('.reveal-on-scroll');
        elementsToReveal.forEach(el => {
            observer.observe(el);
        });
    });
</script> -->