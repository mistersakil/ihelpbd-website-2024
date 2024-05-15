import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import path from "path";
export default defineConfig({
    plugins: [
        laravel({
            hotFile: "public/hot",
            buildDirectory: "build",
            input: ["resources/assets/backend/backend-js.js"],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            "@imgBack": path.resolve(
                __dirname,
                "resources/assets/backend/images"
            ),
        },
    },
});
