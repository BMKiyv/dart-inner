import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/sass/app.scss', 'resources/js/app.js','resources/js/bootstrap.bundle.min.js','resources/js/glightbox.min.js','resources/js/tiny-slider.js'],
            refresh: true,
        }),
    ],
});
