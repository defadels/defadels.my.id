import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                // css
                'resources/scss/style.scss',
                'node_modules/bootstrap/dist/css/bootstrap.min.css',
                'node_modules/swiper/swiper-bundle.min.css',
                
                // Javascript
                'resources/js/counter.js',
                'resources/js/filter.js',
                'resources/js/plugins.init.js',
                'resources/js/swiper.js',
                'resources/js/app.js'
                            
            ],
            refresh: true,
        }),
    ],
});
