const defaultTheme = require('tailwindcss/defaultTheme')


module.exports = {
    content: ["./**/*.php", "./src/**/*.js"],
    plugins: [
        require("@tailwindcss/typography"),
        function ({addUtilities}) {
            addUtilities({
                '.text-shadow-sm': {textShadow: '1px 1px 2px rgba(0, 0, 0, 0.5)'},
                '.text-shadow-md': {textShadow: '2px 2px 4px rgba(0, 0, 0, 0.5)'},
                '.text-shadow-lg': {textShadow: '3px 3px 6px rgba(0, 0, 0, 0.6)'},
            })
        }
    ],
    theme: {
        extend: {
            colors: {
                main_blue: "#002A59",
                mid_blue: "#003B7C",
                dark_blue: "#00345C",
                primary_yellow: "#F7941E",
            },
            fontFamily: {
                rajdhani: ["Rajdhani", "sans-serif"],
                inter: ["Inter", "sans-serif"],
                open_sans: ["Open Sans", "sans-serif"],
                alegraya_sans: ["Alegreya Sans", "sans-serif"],
            },
            textShadow: {
                sm: '1px 1px 2px rgba(0, 0, 0, 0.5)',
                md: '2px 2px 4px rgba(0, 0, 0, 0.5)',
                lg: '3px 3px 6px rgba(0, 0, 0, 0.6)',
            },
            backgroundImage: {
                // hero: "url('assets/images/hero-img.png')",
                hero: "url('/wp-content/themes/qualcomwstheme/src/assets/images/hero-img.png')",
                // pepe: "url('/wp-content/themes/temptheme/src/assets/images/hero-img.png')",
                // logo: "url('assets/images/library-hero.png')",
                logo_dark: "url('/wp-content/themes/qualcomwstheme/src/assets/images/logo_dark.svg')",
            },
        },
        container: {
            center: true,
            padding: {
                DEFAULT: "1rem",
                md: "2rem",
                lg: "3rem",
                xl: "5rem",
            },
        },
    },
}