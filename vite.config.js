/** @type {import('vite').UserConfig} */

import { defineConfig } from "vite";
import { viteStaticCopy as copy } from "vite-plugin-static-copy";

export default defineConfig(({ command, mode }) => {
  return {
    build: {
      outDir: 'dist',
      minify: true,
      rollupOptions: {
        input: {
          core: "src/lib/index.ts",
          main: "src/index.ts",
        },
        output: {
          format: "es",
          entryFileNames: "assets/js/[name].js",
          assetFileNames: "assets/css/[name].[ext]",
        },
      },
    },
    plugins: [
      copy({
        targets: [
          {
            src: ["src/theme/*"],
            dest: "./",
          },
          {
            src: ["src/components/**/*.php"],
            dest: "./components",
            rename: (name, extension) => `component-${name}.${extension}`,
          }
        ],
      }),
    ],
  };
});
