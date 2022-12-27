const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require("tailwindcss/colors");

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],

    theme: {
        fontFamily: {
            Primary: "Playfair Display",
            body: "Work Sans",
        },
        container: {
            padding: {
                    DEFAULT: "1rem",
                    lg: "3rem"
            },
        },
        extend: {
            colors: {
                "light-primary": "F1F1F6",
                "light-secondary": "E1CCEC",
                "light-purple-100": "C9B6E4",
                "light-purple-300": "BE9FE1",

                "dark-primary": "7858A6",
                "dark-secondary": "5B4B8A",
                "dark-purple-100": "4C3575",
                "dark-purple-300": "371B58",
                blue: colors.blue,
                red: colors.red,
                green: colors.green,
                indigo: colors.indigo,
                paragraph: "#878e99",
                accent: {
                    DEFAULT: "#ac6b34",
                    hover: "#925a2b",
                },
            },
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
