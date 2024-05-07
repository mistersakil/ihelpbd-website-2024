import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import path from "path";

export default defineConfig({
    plugins: [
        laravel({
            buildDirectory: "build",
            input: ["resources/assets/web/web-js.js"],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            "@imgWeb": path.resolve(__dirname, "resources/assets/web/images"),
        },
    },
});
