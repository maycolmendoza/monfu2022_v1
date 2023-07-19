import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js','resource/css/style.css','resources/css/animate.min.css','resources/css/bootstrap.min.css','resources/css/font-awesome.min.css','resources/css/jquery.fancybox.min.css','resources/css/responsive.css','resources/css/core.css','resources/css/owl.theme.default.min.css','resources/css/owl.carousel.min.css','resources/css/revolution/css/settings.css','resources/css/responsive.css'],
            refresh: true,
        }),
    ],
});
