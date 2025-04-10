<!-- resources/views/components/services-section.blade.php -->
<style>
    /* Skeleton Loading Styles */
    .skeleton {
        position: relative;
        overflow: hidden;
        background-color: #e2e8f0;
    }

    .skeleton::after {
        content: '';
        position: absolute;
        inset: 0;
        transform: translateX(-100%);
        background-image: linear-gradient(
            90deg,
            rgba(255, 255, 255, 0) 0,
            rgba(255, 255, 255, 0.2) 20%,
            rgba(255, 255, 255, 0.5) 60%,
            rgba(255, 255, 255, 0)
        );
        animation: shimmer 2s infinite;
    }

    @keyframes shimmer {
        100% {
            transform: translateX(100%);
        }
    }

    /* Optimized Animations */
    .reveal-on-scroll {
        opacity: 0;
        transform: translateY(20px);
        transition: opacity 0.6s cubic-bezier(0.16, 1, 0.3, 1), 
                    transform 0.6s cubic-bezier(0.16, 1, 0.3, 1);
    }

    .reveal-on-scroll.revealed {
        opacity: 1;
        transform: translateY(0);
    }

    .service-card-image {
        transition: transform 0.3s ease-out;
        transform-origin: center;
    }

    .service-card:hover .service-card-image {
        transform: scale(1.03);
    }
    
</style>

<section id="services" class="py-16 md:py-24 overflow-hidden">
    <div class="container mx-auto px-4">
        <!-- Section Header Skeleton -->
        <div class="text-center mb-12 md:mb-16 skeleton" style="height: 130px; display: none;" aria-hidden="true"></div>

        <!-- Actual Section Header -->
        <div class="text-center mb-12 md:mb-16 reveal-on-scroll">
            <h2 class="text-3xl md:text-4xl font-serif font-bold text-gray-800 mb-3">
                {{ __('services.section_title') }}
            </h2>
            <p class="text-lg md:text-xl text-gray-600 max-w-3xl mx-auto">
                {{ __('services.section_subtitle') }}
            </p>
        </div>

        <!-- Services Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 md:gap-10">
            @foreach([1, 2, 3] as $service)
                <!-- Skeleton Card -->
                <div class="skeleton-card bg-white rounded-lg shadow-md overflow-hidden" aria-hidden="true">
                    <div class="skeleton h-56 w-full"></div>
                    <div class="p-6">
                        <div class="skeleton h-6 w-3/4 mb-4"></div>
                        <div class="skeleton h-4 w-full mb-2"></div>
                        <div class="skeleton h-4 w-5/6"></div>
                    </div>
                </div>
            @endforeach

            <!-- Service Cards -->
            <!-- Card 1: Alterations -->
            <div class="service-card bg-white rounded-lg shadow-md overflow-hidden reveal-on-scroll">
                <div class="relative h-56 overflow-hidden">
                    <div class="skeleton absolute inset-0 z-10"></div>
                    <img 
                        src="{{Vite::asset('resources/images/tools2.webp')}}" 
                        alt="{{ __('services.alt_text_1') }}"
                        class="w-full h-full object-cover service-card-image"
                        loading="lazy"
                        decoding="async"
                        width="400"
                        height="300"
                        onload="this.parentElement.querySelector('.skeleton').remove()"
                    >
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
            <div class="service-card bg-white rounded-lg shadow-md overflow-hidden reveal-on-scroll">
                <div class="relative h-56 overflow-hidden">
                    <div class="skeleton absolute inset-0 z-10"></div>
                    <img 
                    src="{{Vite::asset('resources/images/threads1.webp')}}"  
                        alt="{{ __('services.alt_text_1') }}"
                        class="w-full h-full object-cover service-card-image"
                        loading="lazy"
                        decoding="async"
                        width="400"
                        height="300"
                        onload="this.parentElement.querySelector('.skeleton').remove()"
                    >
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
            <div class="service-card bg-white rounded-lg shadow-md overflow-hidden reveal-on-scroll">
                <div class="relative h-56 overflow-hidden">
                    <div class="skeleton absolute inset-0 z-10"></div>
                    <img 
                    src="{{Vite::asset('resources/images/dress4.webp')}}" 
                        alt="{{ __('services.alt_text_1') }}"
                        class="w-full h-full object-cover service-card-image"
                        loading="lazy"
                        decoding="async"
                        width="400"
                        height="300"
                        onload="this.parentElement.querySelector('.skeleton').remove()"
                    >
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
  
            <!-- Highlight Card -->
            <div class="md:col-span-2 lg:col-span-3 mt-8 reveal-on-scroll">
                <div class="bg-gradient-to-r from-blue-50 to-indigo-100 p-6 rounded-lg text-center md:text-left md:flex items-center gap-6">
                    <!-- Content with skeleton fallback -->
                    <div class="mb-4 md:mb-0 text-indigo-600 relative">
                        <div class="skeleton w-12 h-12 rounded-full absolute"></div>
                        <i class="bi bi-info-circle h-12 w-12 mx-auto md:mx-0 relative"></i>
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

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Remove skeleton elements
        const skeletons = document.querySelectorAll('[aria-hidden="true"]');
        skeletons.forEach(skeleton => skeleton.remove());

        // Intersection Observer for reveal animations
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('revealed');
                    observer.unobserve(entry.target);
                }
            });
        }, { 
            rootMargin: '0px 0px -50px 0px',
            threshold: 0.1
        });

        document.querySelectorAll('.reveal-on-scroll').forEach(el => observer.observe(el));
        
        // Preload important images
        const criticalImages = document.querySelectorAll('.service-card-image');
        criticalImages.forEach(img => {
            img.loading = 'eager';
            img.decode().catch(() => {});
        });
    });
</script>