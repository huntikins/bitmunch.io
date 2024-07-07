import { defineConfig } from "vite";
import copy from "rollup-plugin-copy-watch";
import FullReload from "vite-plugin-full-reload";

export default defineConfig(({ command, mode }) => {
  return {
    build: {
      minify: true,
      rollupOptions: {
        input: {
          core: 'src/lib/index.ts',
          main: 'src/index.ts'
        },
        output: {
          format: 'es',
          entryFileNames: 'assets/js/[name].js',
          assetFileNames: 'assets/css/[name].[ext]'
        }
      },
    },
    plugins: [
      copy({
        targets: [
          {
            src: ["package.json", "src/partials", "src/index.hbs", "src/post.hbs", "src/default.hbs"],
            dest: "dist",
          },
          {
            src: ["src/public"],
            dest: 'dist'
          }
        ],
      }),
    ],
  };
});
