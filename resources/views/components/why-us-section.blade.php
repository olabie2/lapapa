<!-- resources/views/components/why-choose-us.blade.php -->

{{-- Reuse or add to existing styles for animations --}}
<style>
    /* Ensure reveal-on-scroll styles are available */
    /* .reveal-on-scroll {
        opacity: 0;
        transform: translateY(30px);
        transition: opacity 0.6s ease-out, transform 0.6s ease-out;
    }

    .reveal-on-scroll.is-visible {
        opacity: 1;
        transform: translateY(0);
    } */

    /* Subtle hover effect for feature cards */
    /* .feature-card {
        transition: transform 0.3s ease-out, box-shadow 0.3s ease-out;
    }

    .feature-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.07), 0 4px 6px -4px rgba(0, 0, 0, 0.07);

    } */
</style>

<section id="why-choose-us" class="py-16 md:py-24  overflow-hidden">
    {{-- Add dir="rtl" dynamically here or on <html> tag based on App::getLocale() if needed --}}
    <div class="container mx-auto px-4">

        {{-- Section Header --}}
        <div class="text-center mb-12 md:mb-16 reveal-on-scroll">
            <h2 class="text-3xl md:text-4xl font-serif font-bold text-[#3B2E2D] mb-3">
                {{ __('why_choose_us.section_title') }}
            </h2>
            <p class="text-lg md:text-xl text-[#795946] max-w-3xl mx-auto">
                {{ __('why_choose_us.section_subtitle') }}
            </p>
        </div>

        {{-- Features Grid --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 md:gap-10">

            {{-- Feature 1: Experience --}}
            <div class="feature-card bg-white p-6 rounded-lg shadow-md flex flex-col items-center text-center lg:flex-row lg:items-start lg:text-left reveal-on-scroll" style="transition-delay: 0.1s;">
                {{-- Icon --}}
                <div class="flex-shrink-0 mb-4 lg:mb-0 lg:pr-4">
                    <svg class="h-12 w-12 text-[#A57667]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /> {{-- Simple Checkmark/Badge Icon --}}
                        {{-- Alternative: Award/Ribbon Icon --}}
                        {{-- <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" /> --}}
                    </svg>
                </div>
                <div>
                    <h3 class="text-xl font-semibold font-serif text-[#3B2E2D] mb-2">
                        {{ __('why_choose_us.feature1_title') }}
                    </h3>
                    <p class="text-[#795946] text-base">
                        {{ __('why_choose_us.feature1_desc') }}
                    </p>
                </div>
            </div>

            {{-- Feature 2: Craftsmanship & Quality --}}
            <div class="feature-card bg-white p-6 rounded-lg shadow-md flex flex-col items-center text-center lg:flex-row lg:items-start lg:text-left reveal-on-scroll" style="transition-delay: 0.2s;">
                {{-- Icon --}}
                <div class="flex-shrink-0 mb-4 lg:mb-0 lg:pr-4">
                    <svg class="h-12 w-12 text-[#A57667]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M7.875 14.25l1.214 1.942a2.25 2.25 0 003.822 0l1.214-1.942M4.5 10.5h15M9 4.5v6m6-6v6m-6-6h.008v.008H9V4.5zm6 0h.008v.008H15V4.5z" /> {{-- Abstract Quality/Needle Icon --}}
                        {{-- Alternative: Scissors Icon --}}
                        {{-- <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 7.5h-.75A2.25 2.25 0 004.5 9.75v7.5a2.25 2.25 0 002.25 2.25h7.5a2.25 2.25 0 002.25-2.25v-7.5a2.25 2.25 0 00-2.25-2.25h-.75m-6 3.75l3 3m0 0l3-3m-3 3V6.75m0 0a2.625 2.625 0 10-5.25 0 2.625 2.625 0 005.25 0zm0 0a2.625 2.625 0 115.25 0 2.625 2.625 0 01-5.25 0z" /> --}}
                    </svg>
                </div>
                <div>
                    <h3 class="text-xl font-semibold font-serif text-[#3B2E2D] mb-2">
                        {{ __('why_choose_us.feature2_title') }}
                    </h3>
                    <p class="text-[#795946] text-base">
                        {{ __('why_choose_us.feature2_desc') }}
                    </p>
                </div>
            </div>

            {{-- Feature 3: Personalized Service & Fabric Care --}}
            <div class="feature-card bg-white p-6 rounded-lg shadow-md flex flex-col items-center text-center lg:flex-row lg:items-start lg:text-left reveal-on-scroll" style="transition-delay: 0.3s;">
                {{-- Icon --}}
                <div class="flex-shrink-0 mb-4 lg:mb-0 lg:pr-4">
                    <svg class="h-12 w-12 text-[#A57667]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" /> {{-- Book/Swatches Icon --}}
                        {{-- Alternative: Person/Dialogue Icon --}}
                        {{-- <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" /> --}}
                    </svg>
                </div>
                <div>
                    <h3 class="text-xl font-semibold font-serif text-[#3B2E2D] mb-2">
                        {{ __('why_choose_us.feature3_title') }}
                    </h3>
                    <p class="text-[#795946] text-base">
                        {{ __('why_choose_us.feature3_desc') }}
                    </p>
                </div>
            </div>

        </div>

    </div>
</section>

{{-- Add JS for Intersection Observer (more robust animation trigger) --}}
{{-- This JS doesn't contain translatable text --}}
<!-- <script>
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