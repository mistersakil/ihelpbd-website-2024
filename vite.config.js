import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/frontend/app.css", "resources/frontend/app.js"],
            refresh: true,
        }),
    ],
});
