<!-- resources/views/components/footer.blade.php -->

{{-- Reuse or add to existing styles for animations and basic RTL --}}
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
</style>

<footer class="bg-[#3B2E2D] text-[#E2E1DE] pt-16 pb-8 overflow-hidden">
    {{-- Add dir="rtl" dynamically here or on <html> tag based on App::getLocale() if needed --}}
    <div class="container mx-auto px-4 reveal-on-scroll">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-8">

            {{-- Column 1: Brand & Description --}}
            <div class="md:col-span-2 lg:col-span-1">
                <h3 class="text-2xl font-serif font-semibold text-white mb-3">
                    {{-- Option 1: Text Logo --}}
                    {{ config('app.name', 'Your Tailor Shop') }} {{-- Use app name or hardcode --}}
                    {{-- Option 2: Image Logo (replace text above with img tag)
                    <img src="/path/to/your/footer-logo-light.svg" alt="{{ config('app.name') }} Logo" class="h-10">
                    --}}
                </h3>
                <p class="text-sm text-[#E2E1DE] mb-4">
                    {{ __('footer.description') }}
                </p>
                {{-- Optional Address --}}
                <p class="text-sm text-[#F0E1C7]">
                    {{ __('footer.address_line') }} <br>
                    {{-- City, Postal Code --}}
                </p>
            </div>

            {{-- Column 2: Quick Links --}}
            <div>
                <h4 class="text-lg font-semibold font-serif text-white mb-3">{{ __('footer.quick_links_title') }}</h4>
                <ul class="space-y-2 text-sm">
                    <li><a href="/#services" class="text-[#F0E1C7] hover:text-white transition-colors">{{ __('footer.nav_services') }}</a></li>
                    <li><a href="/#why-choose-us" class="text-[#F0E1C7] hover:text-white transition-colors">{{ __('footer.nav_why_us') }}</a></li>
                    <li><a href="/#contact-booking" class="text-[#F0E1C7] hover:text-white transition-colors">{{ __('footer.nav_contact') }}</a></li>
                    {{-- Add other relevant links like Gallery, Blog etc. if they exist --}}
                    {{-- <li><a href="/gallery" class="text-[#F0E1C7] hover:text-white transition-colors">{{ __('footer.nav_gallery') }}</a></li> --}}
                </ul>
            </div>

            {{-- Column 3: Legal/Info Links --}}
            <div>
                <h4 class="text-lg font-semibold font-serif text-white mb-3">{{ __('footer.info_title') }}</h4>
                <ul class="space-y-2 text-sm">
                    <li><a href="/privacy-policy" class="text-[#F0E1C7] hover:text-white transition-colors">{{ __('footer.nav_privacy') }}</a></li> {{-- Create these pages --}}
                    <li><a href="/terms-of-service" class="text-[#F0E1C7] hover:text-white transition-colors">{{ __('footer.nav_terms') }}</a></li> {{-- Create these pages --}}
                    <li><a href="/faq" class="text-[#F0E1C7] hover:text-white transition-colors">{{ __('footer.nav_faq') }}</a></li> {{-- Optional: Create FAQ page --}}
                </ul>
            </div>

            {{-- Column 4: Contact & Social --}}
            <div>
                <h4 class="text-lg font-semibold font-serif text-white mb-3">{{ __('footer.connect_title') }}</h4>
                <div class="space-y-2 text-sm mb-4">
                    <p><a href="tel:+1234567890" class="text-[#F0E1C7] hover:text-white transition-colors">{{ __('footer.phone') }}: +1 (234) 567-890</a></p> {{-- Replace --}}
                    <p><a href="mailto:info@yourtailorshop.com" class="text-[#F0E1C7] hover:text-white transition-colors">{{ __('footer.email') }}: info@yourtailorshop.com</a></p> {{-- Replace --}}
                </div>
                {{-- Social Media Icons --}}
                <div class="flex space-x-4">
                    <a href="https://facebook.com/yourpage" target="_blank" rel="noopener noreferrer" aria-label="{{ __('footer.social_facebook') }}" class="text-[#E2E1DE] hover:text-white transition-colors">
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
                        </svg>
                    </a>
                    <a href="https://instagram.com/yourpage" target="_blank" rel="noopener noreferrer" aria-label="{{ __('footer.social_instagram') }}" class="text-[#E2E1DE] hover:text-white transition-colors">
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.024.06 1.378.06 3.808s-.012 2.784-.06 3.808c-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.024.048-1.378.06-3.808.06s-2.784-.012-3.808-.06c-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.048-1.024-.06-1.378-.06-3.808s.012-2.784.06-3.808c.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.023.047 1.351.058 3.807.058h.468c2.456 0 2.784-.011 3.807-.058.975-.045 1.504-.207 1.857-.344.467-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.047-1.023.058-1.351.058-3.807v-.468c0-2.456-.011-2.784-.058-3.807-.045-.975-.207-1.504-.344-1.857-.182-.467-.399-.8-.748-1.15-.35-.35-.683-.566-1.15-.748-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 11-2.4 0 1.2 1.2 0 012.4 0z" clip-rule="evenodd" />
                        </svg>
                    </a>
                    {{-- Add other relevant social icons (Twitter/X, Pinterest, WhatsApp etc.) --}}
                    {{-- <a href="https://twitter.com/yourpage" ... > ... Twitter SVG ... </a> --}}
                </div>
            </div>

        </div>

        {{-- Bottom Bar: Copyright --}}
        <div class="border-t border-[#795946] pt-6 mt-8 text-center text-sm text-[#A57667]">
            <p>
                © {{ date('Y') }} {{ config('app.name', 'Your Tailor Shop') }}. {{ __('footer.copyright') }}
            </p>
        </div>
    </div>
</footer>

{{-- Ensure Intersection Observer JS is loaded (ideally once globally) --}}