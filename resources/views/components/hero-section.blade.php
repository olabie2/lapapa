@props([
// Static content for the hero section
'title' => 'Your Hero Title',
'paragraph' => 'Your captivating description goes here and stays in place as the background images transition smoothly.',
// Set to true to enable RTL layout
'rtl' => false,
// List your background images. Ensure these images are available in public/images.
'bgImages' => [
asset('images/slide1.jpg'),
asset('images/slide2.jpg'),
asset('images/slide3.jpg'),
],
])
<section class="relative overflow-hidden"
    x-data="{ activeIndex: 0, images: @js($bgImages) }"
    x-init="setInterval(() => { activeIndex = (activeIndex + 1) % images.length }, 5000)">
    <!-- Background Image Carousel -->
    <template x-for="(image, index) in images" :key="index">
        <div
            x-show="activeIndex === index"
            x-transition:enter="transition-opacity duration-1000"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="transition-opacity duration-1000"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            class="absolute inset-0 w-full h-full bg-cover bg-center"
            :style="'background-image: url(' + image + ');'">
        </div>
    </template>

    <!-- Overlay to improve text readability -->
    <div class="absolute inset-0 bg-black opacity-50"></div>

    <!-- Hero Content (Title & Paragraph) -->
    <div class=" h-[100vh] w-[100vw] tx-large font-bold space-y-6  relative z-10 flex flex-col items-center justify-center text-center px-4">
        <h1 class="text-7xl  leading-[1.4]
         font-extrabold bg-gradient-to-r from-[#a57667] via-[#f0e1c7] to-[#e2e1de] text-transparent bg-clip-text
        ">@lang('hero-section.title')</h1>
        <p class="mt-4 text-lg text-brand-off-white">@lang('hero-section.paragraph')</p>
    </div>
</section>