const defaultTheme = require("tailwindcss/defaultTheme")
const colors = require("tailwindcss/colors")

/** @type {import("tailwindcss").Config} */
module.exports = {
    content: [
        "./vendor/rappasoft/laravel-livewire-tables/resources/views/**/*.blade.php",
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./vendor/laravel/jetstream/**/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./app/Http/Livewire/**/*.php",
        "./modules/**/*.blade.php",
        "./vendor/filament/**/*.blade.php",
    ],

    darkMode: "class",

    theme: {
        extend: {
            colors    : {
                danger : colors.rose,
                primary: colors.amber,
                success: colors.green,
                warning: colors.amber,
            },
            fontFamily: {
                sans: ["DM Sans", ...defaultTheme.fontFamily.sans],
            },
            animation : {
                float: "float 5s linear infinite",
            },
            keyframes : {
                float: {
                    "0%, 100%": {transform: "translateY(0)"},
                    "50%"     : {transform: "translateY(.5rem)"},
                },
            },
        },
    },

    plugins: [
        require("@tailwindcss/forms"),
        require("@tailwindcss/typography"),
    ],
}
