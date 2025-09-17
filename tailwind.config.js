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
                "secondary": "#AE1679",
                "custom-gray" : "#424242",
                "custom-gray-10": "#FFFFFF",
                "custom-gray-40": "#E0E0E0",
                "custom-gray-50": "#C2C2C2",
                "custom-gray-70": "#757575",
                "custom-gray-80": "#616161",
                "custom-gray-90": "#424242",
                "custom-gray-100": "#0A0A0A",
                "danger-main": "#A82525",
            },
        },
    },
    plugins: [],
};
