import { defineConfig } from 'vite';
import laravel, { refreshPaths } from 'laravel-vite-plugin';
import { viteStaticCopy } from 'vite-plugin-static-copy'; // https://github.com/sapphi-red/vite-plugin-static-copy

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',                                
                
            ],
            refresh: [
                ...refreshPaths,
                'app/Http/Livewire/**',
            ],
        }),
        viteStaticCopy({
      targets: [
        {
          src: 'resources/js/sweetalert2.all.min.js', 
          dest: 'assets',
        }
      ]
    })
    ],
    
});
