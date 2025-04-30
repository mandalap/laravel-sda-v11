/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                "ngekos-black": "#070707",
                "ngekos-grey": "#5E6F76",
                "ngekos-orange": "#FF801A",
                "cancel": "#FF0000",
            },
        },
    },
    plugins: [],
};
