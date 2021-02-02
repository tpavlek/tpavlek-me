const colors = require('tailwindcss/colors')

module.exports = {
    purge: {
        content: [
            'source/**/*.html',
            'source/**/*.md',
            'source/**/*.js',
            'source/**/*.php',
            'source/**/*.vue',
            'config.php',
        ],
        options: {
            whitelist: [
                /language/,
                /hljs/,
                /mce/,
            ],
        },
    },
    theme: {
        extend: {
            colors: {
                'grey': colors.gray,
                'primary': '#325770',
                'secondary': '#2c3e4c',
                'secondary-light': '#465866',
                'tertiary': '#1d4561',
                'tertiary-dark': '#13354c',
                'gold': '#d0aa48',
                purple: {
                    '900': '#21183c'
                }
            },
            width: {
                'yt': "768px",
            },
            height: {
                'yt': "432px"
            },
            fontFamily: {
                sans: [
                    'Lato',
                    'Helvetica',
                    'sans-serif'
                ],
                mono: [
                    'monospace',
                ],
            },
            maxWidth: {
                none: 'none',
                '7xl': '80rem',
                '8xl': '88rem'
            },
            minHeight: {
                '40': '10rem',
            },
            spacing: {
                '7': '1.75rem',
                '9': '2.25rem'
            },
            boxShadow: {
                'lg': '0 -1px 27px 0 rgba(0, 0, 0, 0.04), 0 4px 15px 0 rgba(0, 0, 0, 0.08)',
            }
        },
        fontSize: {
            'xs': '.8rem',
            'sm': '.925rem',
            'base': '1rem',
            'lg': '1.125rem',
            'xl': '1.25rem',
            '2xl': '1.5rem',
            '3xl': '1.75rem',
            '4xl': '2.125rem',
            '5xl': '2.625rem',
            '6xl': '3rem',
        },
    },
    variants: {

        borderRadius: ['responsive', 'focus'],
        borderWidth: ['responsive', 'active', 'focus'],
        borderColor: [ 'hover' ],
        width: ['responsive', 'focus']
    },
    plugins: [
        function ({addUtilities}) {
            const newUtilities = {
                '.transition-fast': {
                    transition: 'all .2s ease-out',
                },
                '.transition': {
                    transition: 'all .5s ease-out',
                },
            }
            addUtilities(newUtilities)
        }
    ]
}
