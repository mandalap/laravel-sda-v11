/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
    ],
    theme: {
        extend: {
            colors: {
                "ngekos-black": "#070707",
                "ngekos-grey": "#5E6F76",
                "ngekos-orange": "#FF801A",
                "cancel": "#FF0000",
                "primary": "#D81D76",
            },
        },
    },
    plugins: [],
};
