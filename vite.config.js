import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
            ],
            refresh: true,
            https: {
                enabled: true,
                rewrite: {
                    from: 'http://www.barberialaravel.ovh',
                    to: 'https://www.barberialaravel.ovh',
                },
            },
        }),
    ]
});
