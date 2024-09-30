/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        container: {
            center: true,
            padding: "16px",
        },
        extend: {
            colors: {
                primary: "#0ea5e9",
                dark: "#0f172a",
            },
            screen: {
                "2xl": "1320px",
            },
        },
    },
    plugins: [],
};
