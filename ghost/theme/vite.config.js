import { defineConfig } from "vite";
import copy from "rollup-plugin-copy-watch";
import FullReload from "vite-plugin-full-reload";

export default defineConfig(({ command, mode }) => {
  return {
    build: {
      minify: true,
      lib: {
        entry: "src/index.ts",
        formats: ["es"],
        name: "BitMunch.io",
      },
      rollupOptions: {
        output: {
          entryFileNames: `assets/bitmunch.js`,
          assetFileNames: `assets/bitmunch.[ext]`,
        },
      },
    },
    plugins: [
      copy({
        watch:
          mode === "development"
            ? ["package.json", "templates/**/*.hbs", "src/*.{.ts,.css}"]
            : [],
        targets: [
          {
            src: "package.json",
            dest: "dist",
          },
          {
            src: "templates/**/*.hbs",
            dest: "dist",
          },
        ],
        flatten: false,
        hook: mode === "development" ? "buildStart" : "writeBundle",
      }),
      FullReload(["package.json", "templates/**/*.hbs", "src/**/*.*"]),
    ],
  };
});
