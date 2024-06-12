import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/appSty.css',
                'resources/js/appJS.js',
            ],
            refresh: true,
        }),
    ],
    server: {
        proxy: {
          '/': 'http://localhost:5173',
        },
      },
});
