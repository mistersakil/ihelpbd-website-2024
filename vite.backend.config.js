import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            hotFile: "public/hot",
            buildDirectory: "build_backend",
            input: ["resources/backend/backend.js"],
            refresh: true,
        }),
    ],
});
