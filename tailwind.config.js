import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                orbitron: ['Orbitron', 'sans-serif'],
                inter: ['Inter','system-ui','-apple-system','Segoe UI','Roboto','Helvetica','Arial','Apple Color Emoji','Segoe UI Emoji','sans-serif',]
            },
            colors: {
                brand: {
                  50: '#eff6ff',
                  100: '#dbeafe',
                  200: '#bfdbfe',
                  300: '#93c5fd',
                  400: '#60a5fa',
                  500: '#3b82f6',
                  600: '#2563eb',
                  700: '#1d4ed8',
                  800: '#1e40af',
                  900: '#1e3a8a'
                }
              },
              boxShadow: {
                soft: '0 10px 30px -10px rgba(2, 6, 23, 0.25)'
              },
              backgroundImage: {
                grid: 'radial-gradient(circle at 1px 1px, rgba(0,0,0,.06) 1px, transparent 0)'
              }
        },
    },
    darkMode: 'class',
    plugins: [forms, typography],
};
