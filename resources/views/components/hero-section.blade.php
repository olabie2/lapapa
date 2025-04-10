@props(['images' => []])

<section 
    x-data="heroSlider()" 
    x-init="start()" 
    class="relative w-full h-screen overflow-hidden text-white"
>
    <!-- Background images -->
    <template x-for="(image, index) in images" :key="index">
    <div 
        class="absolute inset-0 bg-cover bg-center transition-opacity duration-1000 ease-in-out"
        :class="{
            'opacity-100 z-0': currentIndex === index,
            'opacity-0 z-0': currentIndex !== index
        }"
        :style="`background-image: url('${image}')`"
    ></div>
</template>

    <!-- Overlay -->
    <div class="absolute inset-0 bg-gradient-to-b from-black/60 via-black/40 to-black/60 z-10"></div>

    <!-- Text Content -->
    <div class="relative z-20 flex flex-col items-center justify-center h-full px-4 text-center">
        <h1 
            class="font-bold leading-[1.5] text-4xl md:text-6xl lg:text-7xl mb-4 bg-clip-text text-transparent bg-gradient-to-r from-brand-dark-brown via-brand-light-brown to-brand-beige animate-text-gradient"
        >
            {{ __('hero-section.title') }}
        </h1>
        <p class="text-lg md:text-xl lg:text-2xl max-w-2xl text-brand-off-white">
            {{ __('hero-section.paragraph') }}
        </p>
    </div>
</section>

@push('scripts')
<script>
    function heroSlider() {
        return {
            images: @json($images),
            currentIndex: 0,
            start() {
                setInterval(() => {
                    this.currentIndex = (this.currentIndex + 1) % this.images.length;
                }, 5000);
            }
        }
    }
</script>
@endpush

<style>
    .animate-text-gradient {
        background-size: 200% auto;
        animation: gradientShift 5s ease infinite;
    }

    @keyframes gradientShift {
        0% { background-position: 0% center; }
        50% { background-position: 100% center; }
        100% { background-position: 0% center; }
    }
</style>
