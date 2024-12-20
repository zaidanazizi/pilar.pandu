const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],
    theme: {
        extend: {
            colors: {
                blue: {
                    800: '#1e3a8a',
                    400: '#60a5fa',
                },
            },
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },
    variants: {
        extend: {
            before: ['responsive', 'hover', 'focus'],
            after: ['responsive', 'hover', 'focus'],
        },
    },
    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
        function ({ addUtilities }) {
            addUtilities({
                '.gradien-container::before': {
                    content: '""',
                    position: 'absolute',
                    top: '0',
                    left: '0',
                    height: '100%',
                    width: '60px', /* Pastikan gradien proper di tepi */
                    background: 'linear-gradient(to right, white, transparent)',
                    zIndex: '10',
                    pointerEvents: 'none',
                },
                '.gradien-container::after': {
                    content: '""',
                    position: 'absolute',
                    top: '0',
                    right: '0',
                    height: '100%',
                    width: '60px', /* Pastikan gradien proper di tepi */
                    background: 'linear-gradient(to left, white, transparent)',
                    zIndex: '10',
                    pointerEvents: 'none',
                },
            });
        },
    ],
};
