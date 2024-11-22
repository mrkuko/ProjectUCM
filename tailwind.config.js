import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

// const colors = require('tailwindcss/colors')

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
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                libre: ['"Nunito"', ...defaultTheme.fontFamily.sans]
            },
            colors: {
                'my-blue01': '#14ADD6',
                'my-blue02': '#324A5E',
                'my-bg01': '#F8F9FD',
                primary: {"50":"#eff6ff","100":"#dbeafe","200":"#bfdbfe","300":"#93c5fd","400":"#60a5fa","500":"#3b82f6","600":"#2563eb","700":"#1d4ed8","800":"#1e40af","900":"#1e3a8a","950":"#172554"}
            }
        },
    },

    plugins: [require('@tailwindcss/forms'), forms],
    darkMode: 'false',
    // media, false
};
