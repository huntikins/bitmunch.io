import { defineConfig } from "vite";
import { viteStaticCopy as copy } from "vite-plugin-static-copy";

export default defineConfig(({ command, mode }) => {
  return {
    build: {
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
            src: ["package.json", "src/*.hbs", "src/partials/"],
            dest: "./"
          },
          {
            src: ["src/components/**/*.hbs"],
            dest: "./partials",
            rename: (name, extension) => `component-${name}.${extension}`,
          },
        ],
      }),
    ],
  };
});
