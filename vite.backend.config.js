import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            hotFile: "public/hot",
            buildDirectory: "public/build_backend",
            input: [
                "resources/backend/backendCss.css",
                "resources/backend/backendJs.js",
            ],
            refresh: true,
        }),
    ],
});
