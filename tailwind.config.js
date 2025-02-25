import { plugin } from 'postcss';
import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            container: {
                center: true, // Center the container
                padding: {
                    DEFAULT: '1rem',
                    sm: '0rem',
                    md: '1rem',
                    xl: '1rem',       
                    xxl: '0rem',
                    '2xl': '1rem',
                },
            },
            screens: {
                'sm': '640px',
                'md': '768px',
                'lg': '1024px',
                'xl': '1280px',
                'xxl': '1300px',
                '2xl': '1440px',
                '3xl': '1536px',
            },
            fontFamily: {
                kod: ["'Kodchasan'", ...defaultTheme.fontFamily.sans],
                inter: ["'Inter'", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                lightBlack: '#1E1E1E',
                grey: '#DADADA',
                greyLight: '#D9D9D9',
            },
        },
    },
    plugins: ['flowbite/plugin'],
};
