const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
                poppins: ['Poppins', 'sans-serif'],
                montserrat: ["Montserrat", "sans-serif"],
            },
            colors: {
                orange: '#FF5045',
                yellow: '#FFD88B',
                black: '#1B1B1B',
                white: '#FFFAF6',
                transparent: "transparent",
                current: "currentColor",
                customWhite: "#FFFAF6",
                customBlack: "#1B1B1B",
                customOrange: "#FF5045",
                customYellow: "#FFD88B",
            }
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
