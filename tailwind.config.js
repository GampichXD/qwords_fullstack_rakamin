/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        extend: {
            backgroundImage: {
                "custom-pattern": "url('/public/img/pattern-bg.jpg')",
                "custom-background":
                    "url('https://www.qwords.com/wp-content/themes/qwords/assets/images/shapes/bantuan.png')",
                "Hero-background": "url('/public/img/hero-bg-1.jpg')",
            },
            animation: {
                "anim-promo":
                    "promo-link 4s cubic-bezier(0.68, -0.6, 0.32, 1.6) infinite",
                "promo-color":
                    "promo-color 4s cubic-bezier(0.68, -0.6, 0.32, 1.6) infinite",
                tilt: "tilt 3s cubic-bezier(0.68, -0.6, 0.32, 1.6) infinite",
            },
            keyframes: {
                "promo-link": {
                    "0%": {
                        content: "🎁 ",
                        opacity: 0,
                        transform: "translateX(0px)",
                    },
                    "50%": {
                        content: "🎁 ",
                        opacity: 1,
                        transform: "translateX(5px)",
                    },
                    "100%": {
                        content: "🎁 ",
                        opacity: 1,
                        transform: "translateX(0px)",
                    },
                },
                "promo-color": {
                    "0%": {
                        color: "black",
                        transform: "translateX(0px)",
                    },
                    "50%": {
                        color: "red",
                        transform: "translateX(5px)",
                    },
                    "100%": {
                        color: "black",
                        transform: "translateX(0px)",
                    },
                },
                tilt: {
                    "0%": {
                        transform: "rotate(0deg) scale(1) 55translateX(0px)",
                    },
                    "25%": {
                        transform: "rotate(0deg) scale(1) translateX(0px)",
                    },
                    "50%": {
                        transform: "rotate(15deg) scale(1.1) translateX(-30px)",
                    },
                    "55%": {
                        transform: "rotate(16deg) scale(1.1) translateX(-30px)",
                    },
                    "60%": {
                        transform: "rotate(14deg) scale(1.1) translateX(-30px)",
                    },
                    "65%": {
                        transform: "rotate(15deg) scale(1.1) translateX(-30px)",
                    },
                    "85%": {
                        transform: "rotate(0deg) scale(1) translateX(0px)",
                    },
                    100: {
                        transform: "rotate(0deg) scale(1) translateX(0px)",
                    },
                },
            },
            fontFamily: {
                poppins: ['Poppins', 'sans-serif'],
            },
        },
    },
    plugins: [require("flowbite/plugin")],
};