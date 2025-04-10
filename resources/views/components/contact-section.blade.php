<!-- resources/views/components/contact-section.blade.php -->

{{-- Reuse or add to existing styles for animations and basic RTL --}}
<style>
    /* Ensure reveal-on-scroll styles are available */
    .reveal-on-scroll {
        opacity: 0;
        transform: translateY(30px);
        transition: opacity 0.6s ease-out, transform 0.6s ease-out;
    }

    .reveal-on-scroll.is-visible {
        opacity: 1;
        transform: translateY(0);
    }

    /* Adjust icon spacing */
</style>

<section id="contact-booking" class="py-16 md:py-24 bg-[#E2E1DE] overflow-hidden">
    {{-- Add dir="rtl" dynamically here or on <html> tag based on App::getLocale() if needed --}}
    <div class="container mx-auto px-4">

        {{-- Section Header --}}
        <div class="text-center mb-12 md:mb-16 reveal-on-scroll">
            <h2 class="text-3xl md:text-4xl font-serif font-bold text-[#3B2E2D] mb-3">
                {{ __('contact.section_title') }}
            </h2>
            <p class="text-lg md:text-xl text-[#795946] max-w-3xl mx-auto">
                {{ __('contact.section_subtitle') }}
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 md:gap-12">

            {{-- Column 1: Contact Info & Form --}}
            <div class="reveal-on-scroll" style="transition-delay: 0.1s;">
                <h3 class="text-2xl font-semibold font-serif text-[#3B2E2D] mb-6 text-left">
                    {{ __('contact.get_in_touch_title') }}
                </h3>

                {{-- Contact Details --}}
                <div class="space-y-4 mb-8 text-[#3B2E2D]">
                    {{-- Phone --}}
                    <div class="flex items-center space-x-3">
                        <svg class="h-6 w-6 text-[#795946]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                        </svg>
                        <a href="tel:+1234567890" class="text-lg hover:text-[#A57667] transition-colors">{{ __('contact.phone_label') }}: 0522516237</a> {{-- Replace with actual number --}}
                    </div>
                    {{-- WhatsApp --}}
                    <div class="flex items-center space-x-3">
                        <svg class="h-6 w-6 text-[#795946]" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232" />
                        </svg>
                        <a href="https://wa.me/1234567890" target="_blank" rel="noopener noreferrer" class="text-lg hover:text-[#A57667] transition-colors">{{ __('contact.whatsapp_label') }}: 0522516237</a> {{-- Replace with actual number/link --}}
                    </div>
                    {{-- Hours --}}
                    <div class="flex items-start space-x-3"> {{-- Use items-start for multi-line alignment --}}
                        <svg class="h-6 w-6 text-[#795946] flex-shrink-0 mt-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <div>
                            <span class="text-lg font-medium">{{ __('contact.hours_label') }}:</span>
                            <ul class="list-none text-base text-[#795946] mt-1">
                                <li>{{ __('contact.hours_line1') }}</li> {{-- e.g., Mon - Fri: 9:00 AM - 6:00 PM --}}
                                <li>{{ __('contact.hours_line2') }}</li> {{-- e.g., Sat: 10:00 AM - 4:00 PM --}}
                                <li>{{ __('contact.hours_line3') }}</li> {{-- e.g., Sun: Closed --}}
                            </ul>
                        </div>
                    </div>
                </div>

                {{-- Contact Form --}}
                {{-- IMPORTANT: This form needs a backend (Laravel route + controller) to handle submission --}}
                <form action="/contact" method="POST" enctype="multipart/form-data" class="space-y-4">
                    @csrf {{-- Laravel CSRF Protection --}}

                    <div>
                        <label for="name" class="sr-only">{{ __('contact.form_name') }}</label>
                        <input type="text" name="name" id="name" required placeholder="{{ __('contact.form_name') }}"
                            class="w-full px-4 py-2 border border-[#A57667] rounded-md bg-white text-[#3B2E2D] focus:ring-2 focus:ring-[#A57667] focus:border-transparent outline-none transition">
                    </div>
                    <div>
                        <label for="name" class="sr-only">{{ __('contact.form_phone') }}</label>
                        <input type="text" name="name" id="name" required placeholder="{{ __('contact.form_phone') }}"
                            class="w-full px-4 py-2 border border-[#A57667] rounded-md bg-white text-[#3B2E2D] focus:ring-2 focus:ring-[#A57667] focus:border-transparent outline-none transition">
                    </div>
                    <div>
                        <label for="email" class="sr-only">{{ __('contact.form_email') }}</label>
                        <input type="email" name="email" id="email" required placeholder="{{ __('contact.form_email') }}"
                            class="w-full px-4 py-2 border border-[#A57667] rounded-md bg-white text-[#3B2E2D] focus:ring-2 focus:ring-[#A57667] focus:border-transparent outline-none transition">
                    </div>
                    <div>
                        <label for="message" class="sr-only">{{ __('contact.form_message') }}</label>
                        <textarea name="message" id="message" rows="4" required placeholder="{{ __('contact.form_message') }}"
                            class="w-full px-4 py-2 border border-[#A57667] rounded-md bg-white text-[#3B2E2D] focus:ring-2 focus:ring-[#A57667] focus:border-transparent outline-none transition"></textarea>
                    </div>
                    <div>
    <label for="photos" class="block text-sm font-medium text-[#3B2E2D] mb-1">{{ __('contact.form_photo_label') }}</label>
    <input type="file" name="photos[]" id="photos" accept="image/*" multiple
        class="w-full text-sm text-[#795946]
               file:mr-4 file:py-2 file:px-4
               file:rounded-md file:border-0
               file:text-sm file:font-semibold
               file:bg-[#F0E1C7] file:text-[#3B2E2D]
               hover:file:bg-[#e2d5be] transition file:cursor-pointer">
    <p class="text-xs text-[#795946] mt-1">{{ __('contact.form_photo_helper') }} {{__('contact.form_photos_max')}}</p>
</div>


                    <div class="text-left"> {{-- Ensure button aligns left in LTR --}}
                        <button type="submit"
                            class="inline-block bg-[#795946] text-white font-semibold px-6 py-2.5 rounded-md hover:bg-[#A57667] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#A57667] focus:ring-offset-[#E2E1DE] transition duration-300 ease-in-out">
                            {{ __('contact.cta_button') }}
                        </button>
                    </div>
                </form>
            </div>

            {{-- Column 2: Map --}}
            <div class="reveal-on-scroll" style="transition-delay: 0.2s;">
                <h3 class="text-2xl font-semibold font-serif text-[#3B2E2D] mb-6 text-left">
                    {{ __('contact.location_title') }}
                </h3>
                <div class="aspect-w-16 aspect-h-9 lg:aspect-h-11 rounded-lg overflow-hidden shadow-md h-64 md:h-80 lg:h-full">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3357.720470161535!2d35.37045687627595!3d32.69347798824948!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151c4f6bc641841f%3A0xfb17d0dfa70b0ace!2sMarah%20al-Saris%2C%20Daburiyya!5e0!3m2!1sen!2sil!4v1744225779923!5m2!1sen!2sil" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <p class="text-base text-[#795946] mt-4 text-left">{{ __('contact.address_line') }}</p> {{-- Add your address here --}}
            </div>

        </div>
    </div>
</section>

{{-- Ensure Intersection Observer JS is loaded (ideally once globally) --}}

{{-- Add JS for Intersection Observer (more robust animation trigger) --}}
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
</script>