const { backgroundImage } = require('tailwindcss/defaultTheme');
const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Montserrat', 'sans-serif'],
            },

            colors: {
                'pinkLDV': '#FF5064',
                'blackLDV': '#141414',
                'blueLDV': '#0C0037',
                'greyLDV': '#C1C1C1'
            },

            screens: {
                sm: '480px',
                md: '768px',
                lg: '976px',
                xl: '1440px',
            },
    
            fontSize: {
                px: '1px',
                h1: '70px',
                h2: '30px',
                h3: '25px',
                h4: '20px',
                'button-size': '20px',
                'little-title' : '20px',
                paragraphe : '15px',
            },
            backgroundImage: theme => ({
                'valorant': "url('/public/img/valorant.png')",
                'csgo': "url('/public/img/csgo.jpg')",
                'fortnite': "url('/public/img/fortnite.JPG')",
                'hearthstone.png': "url('/public/img/hearthstone.png')",
                'lol': "url('/public/imglol.jpg')",
                'overwatch': "url('/public/img'overwatch.jpg)",
                'pokemon': "url('/public/img/pokemon.png')",
                'rainbowsix': "url('/public/img/rainbowsix.jpg')",
                'rocket-league': "url('/public/img/rocket-league.jpg')",
                'ssbu': "url('/public/img/ssbu.jpg')",
                'tft': "url('/public/img/tft.jpg')",
                'trackmania': "url('/public/img/'trackmania.jpg)",

            })
        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
