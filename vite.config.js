// import { defineConfig, loadEnv } from 'vite'
import { defineConfig } from 'vite'
import laravel, { refreshPaths } from 'laravel-vite-plugin';
// import fs from 'fs'
// import { resolve } from 'path'
// import { homedir } from 'os'
import { viteStaticCopy } from 'vite-plugin-static-copy'; // https://github.com/sapphi-red/vite-plugin-static-copy

export default defineConfig(({ command, mode }) => {
  // Load current .env-file
  // const env = loadEnv(mode, process.cwd(), '')

  // Set the host based on APP_URL
  // let host = new URL(env.APP_URL).host
  // let homeDir = homedir()
  // let serverConfig = {}

  // if (homeDir) {
  //   serverConfig = {
  //     // https: {
  //     //   key: fs.readFileSync(
  //     //     resolve(homeDir, `.config/valet/Certificates/${host}.key`),
  //     //   ),
  //     //   cert: fs.readFileSync(
  //     //     resolve(homeDir, `.config/valet/Certificates/${host}.crt`),
  //     //   ),
  //     // },
  //     hmr: {
  //       host
  //     },
  //     host
  //   }
  // }

  return {
    plugins: [
      laravel({
        input: [
          'resources/css/app.css',
          'resources/css/front.css',
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
            src: ['resources/js/sweetalert2.all.min.js','resources/all'], 
            dest: 'assets',
          }
        ]
      })
    ],
    // server: serverConfig
  }
});
