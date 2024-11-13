import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './src/**/*.{js, jsx}'
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                bebasNeue: ["Bebas Neue", 'sans-serif'],
            },
            animation: {
                'typing': 'typing 2s steps(10) forwards, blink .75s step-end infinite',
                'erase': 'erase 1s steps(10) forwards, blink .75s step-end infinite',
            },
            keyframes: {
                typing: {
                  '0%': { width: '0' },
                  '100%': { width: '100%' },
                },
                erase: {
                  '0%': { width: '100%' },
                  '100%': { width: '0' },
                },
                blink: {
                  '50%': { borderColor: 'transparent' },
                },
            },
            colors: {
                'grey': '#BFBFBF',
                'mint': '#95F238',
                'green': '#AAF23D',
                'olive': '#87BF34',
                'black-portfolio': '#0D0D0D',
                'indigo': '#413659',
                'white-indigo': '#524373'
            },
        },
    },

    plugins: [forms],
};
