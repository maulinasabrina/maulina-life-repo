import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        "./resources/views/**/*.blade.php",
        "./resources/js/**/*.js",
        "./resources/css/**/*.css",
    ],

    theme: {
    extend: {
      colors: {
        cream: '#F6F1EA',
        espresso: '#3A2F28',
        rose: '#C79C9C',
        wine: '#6B3A4C',
        graphite: '#C9C4BE'
      },
      fontFamily: {
        serif: ['Cormorant Garamond','serif'],
        ui: ['Inter','system-ui','sans-serif']
      }
    },
  },

    plugins: [forms],
};
