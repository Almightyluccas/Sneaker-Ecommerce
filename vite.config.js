import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/js/theme-switcher.js',
                'resources/js/shop.js',
                'resources/js/product-page.js',
                'resources/js/cart.js',
                'resources/js/navbar.js',
            ],

            refresh: true,
        }),
        tailwindcss(),
    ],
});
