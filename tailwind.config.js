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
                sans: ['DM Sans', ...defaultTheme.fontFamily.sans],
                serif: ['Playfair Display', ...defaultTheme.fontFamily.serif],
            },
            colors: {
                forest: '#1a3a2a',
                leaf: '#2d6a4f',
                moss: '#40916c',
                mint: '#74c69d',
                pale: '#d8f3dc',
                cream: '#f8f5ee',
                bark: '#6b4226',
                stone: '#7c7c6e',
                gold: '#c9a84c',
            },
            boxShadow: {
                'custom': '0 4px 24px rgba(26,58,42,0.12)',
            },
        },
    },

    plugins: [forms],
};
