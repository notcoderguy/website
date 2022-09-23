const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
    theme: {
        extend: {
            fontFamily: {
                sans: ['Inter var', ...defaultTheme.fontFamily.sans],
                poppin: ['Poppins', 'sans-serif'],
            },
            colors: {
                transparent: 'transparent',
                current: 'currentColor',
                primary: '#7289da',
                secondary: {
                    100: '#424549',
                    200: '#36393e',
                    300: '#282b30',
                    400: '#1e2124',
                },
            },
        },
    },
    darkMode: 'class',
    variants: {
        extend: {
            backgroundColor: ['active'],
        }
    },
    content: [
        './app/**/*.php',
        './resources/**/*.html',
        './resources/**/*.js',
        './resources/**/*.jsx',
        './resources/**/*.ts',
        './resources/**/*.tsx',
        './resources/**/*.php',
        './resources/**/*.vue',
        './resources/**/*.twig',
    ],
    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
    ],
}
