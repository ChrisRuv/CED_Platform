import type { Config } from "tailwindcss";

const config: Config = {
    content: [
        "./src/pages *.{js,ts,jsx,tsx,mdx}",
        "./src/components *.{js,ts,jsx,tsx,mdx}",
        "./src/app *.{js,ts,jsx,tsx,mdx}",
    ],
    theme: {
        extend: {
            backgroundImage: {
                "gradient-radial": "radial-gradient(var(--tw-gradient-stops))",
                "gradient-conic":
                    "conic-gradient(from 180deg at 50% 50%, var(--tw-gradient-stops))",
            },
            colors: {
                brand: {
                    50: '#f0f7ff',
                    100: '#e0effe',
                    200: '#bae0fd',
                    300: '#7cc7fb',
                    400: '#38a9f8',
                    500: '#0e8de9',
                    600: '#026fc7',
                    700: '#0358a1',
                    800: '#074b84',
                    900: '#0c3f6e',
                    950: '#082849',
                },
                'ced-blue': '#1e3a8a',
                'ced-accent': '#0ea5e9',
                'ced-gray': '#0f172a',
                'ced-light': '#3b82f6',
            }
        },
    },
    plugins: [],
};
export default config;
