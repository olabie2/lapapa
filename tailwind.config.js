/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                'brand-black': 'black',           // Already a default, but can be explicit
                'brand-dark-brown': '#3b2e2d',
                'brand-mid-brown': '#795946',
                'brand-light-brown': '#a57667',
                'brand-beige': '#f0e1c7',
                'brand-off-white': '#e2e1de',
            },
            fontFamily: {
                'display': ['"Playfair Display"', 'serif'],
                'mont': ['Montserrat', 'sans-serif'],
            },
        },
    },
    plugins: [],
};