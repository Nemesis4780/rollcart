/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './resources/**/*.antlers.html',
        './resources/**/*.antlers.php',
        './resources/**/*.blade.php',
        './resources/**/*.vue',
        './content/**/*.md',
        // './config/classify.php'
    ],
    options: {
        safelist: {
            standard: [
                'text-2xl',
                'text-3xl',
                'text-4xl',
                'text-5xl',
                'text-6xl',
                'sm:text-2xl',
                'sm:text-3xl',
                'sm:text-4xl',
                'sm:text-5xl',
                'sm:text-6xl',
                'md:text-2xl',
                'md:text-3xl',
                'md:text-4xl',
                'md:text-5xl',
                'md:text-6xl',
                'lg:text-2xl',
                'lg:text-3xl',
                'lg:text-4xl',
                'lg:text-5xl',
                'lg:text-6xl',
            ],
        },
    },
    safelist: [
        'invert',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['"Ubuntu"', 'sans-serif']
            },
            colors: {
                transparent: 'transparent',
                current: 'currentColor',

                primary: {
                    standard: 'var(--color-primary-500)',
                    100: 'var(--color-primary-100)',
                    200: 'var(--color-primary-200)',
                    300: 'var(--color-primary-300)',
                    400: 'var(--color-primary-400)',
                    500: 'var(--color-primary-500)',
                    600: 'var(--color-primary-600)',
                    700: 'var(--color-primary-700)',
                    800: 'var(--color-primary-800)',
                    900: 'var(--color-primary-900)',
                },
                secondary: {
                    standard:  'var(--color-secondary-500)',
                    0: 'var(--color-secondary-0)',
                    100: 'var(--color-secondary-100)',
                    200: 'var(--color-secondary-200)',
                    400: 'var(--color-secondary-200)',
                    600: 'var(--color-secondary-600)',
                    700: 'var(--color-secondary-700)',
                    800: 'var(--color-secondary-700)',
                    900: 'var(--color-secondary-700)',
                },
                success: {
                    standard: 'var(--color-success-500)',
                    100: 'var(--color-success-100)',
                    200: 'var(--color-success-200)',
                    300: 'var(--color-success-300)',
                    400: 'var(--color-success-400)',
                    500: 'var(--color-success-500)',
                    600: 'var(--color-success-600)',
                    700: 'var(--color-success-700)',
                    800: 'var(--color-success-800)',
                    900: 'var(--color-success-900)',
                },
                warning: {
                    standard: 'var(--color-warning-500)',
                    100: 'var(--color-warning-100)',
                    200: 'var(--color-warning-200)',
                    300: 'var(--color-warning-300)',
                    400: 'var(--color-warning-400)',
                    500: 'var(--color-warning-500)',
                    600: 'var(--color-warning-600)',
                    700: 'var(--color-warning-700)',
                    800: 'var(--color-warning-800)',
                    900: 'var(--color-warning-900)',
                },
                danger: {
                    standard: 'var(--color-danger-500)',
                    100: 'var(--color-danger-100)',
                    200: 'var(--color-danger-200)',
                    300: 'var(--color-danger-300)',
                    400: 'var(--color-danger-400)',
                    500: 'var(--color-danger-500)',
                    600: 'var(--color-danger-600)',
                    700: 'var(--color-danger-700)',
                    800: 'var(--color-danger-800)',
                    900: 'var(--color-danger-900)',
                },
                info: {
                    standard: 'var(--color-info-500)',
                    100: 'var(--color-info-100)',
                    200: 'var(--color-info-200)',
                    300: 'var(--color-info-300)',
                    400: 'var(--color-info-400)',
                    500: 'var(--color-info-500)',
                    600: 'var(--color-info-600)',
                    700: 'var(--color-info-700)',
                    800: 'var(--color-info-800)',
                    900: 'var(--color-info-900)',
                },
            }
        },

        fontSize: {
            'xs': '.75rem',
            'sm': '.875rem',
            'base': '1rem',
            'lg': '1.125rem',
            'xl': '1.25rem',
            '2xl': '1.5rem',
            '3xl': '1.875rem',
            '4xl': '2.25rem',
            '5xl': '3rem',
            '6xl': '4rem',
        },
    },

    plugins: [
        require('@tailwindcss/typography'),
    ],
};