import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Inter', ...defaultTheme.fontFamily.sans],
                heading: ['"Barlow Condensed"', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                semmi: {
                    DEFAULT: '#005a32', // Deep green
                    dark: '#003a20', // Dark green
                    light: '#e8f5e9', // Very light green for backgrounds
                }
            }
        },
    },

    plugins: [forms],
};
