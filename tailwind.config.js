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
            fontFamily: {
                kod: ["'Kodchasan'", ...defaultTheme.fontFamily.sans],
                inter: ["'Inter'", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                lightBlack: '#1E1E1E',
                grey: '#DADADA',
            },
        },
    },
    plugins: [],
};
