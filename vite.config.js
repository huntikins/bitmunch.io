/** @type {import('vite').UserConfig} */

import { defineConfig } from "vite";
import { viteStaticCopy as copy } from "vite-plugin-static-copy";

export default defineConfig(({ command, mode }) => {
  return {
    mode: "production",
    appType: "custom",
    build: {
      outDir: "dist",
      rollupOptions: {
        input: {
          core: "src/lib/index.ts",
          main: "src/index.ts",
        },
        output: {
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
            src: ["src/components/*/*.php"],
            dest: "./components/",
            rename: (name, extension) => `${name}/main.${extension}`,
          },
          {
            src: ["src/components/*/partials/*.php"],
            dest: "./components/",
            rename: (name, extension, path) => {
              const dirNames = path.split("/");

              const i = dirNames.findIndex(
                (dirName) => dirName === "components"
              );

              return `${dirNames[i + 1]}/partials/${name}.${extension}`;
            },
          },
        ],
      }),
    ],
  };
});
