import glob from "glob"
import laravel, {refreshPaths} from "laravel-vite-plugin"
import path from "node:path"
import {fileURLToPath} from "node:url"
import {defineConfig} from "vite"

export default defineConfig({
                                plugins: [
                                    laravel({
                                                input  : {
                                                    "styles/app"     : "resources/css/app.css",
                                                    "styles/filament": "resources/css/filament.css",
                                                    ...Object.fromEntries(
                                                        glob.sync("resources/js/**/*.{ts,js}").map(file => [
                                                            // This remove `src/` as well as the file extension from
                                                            // each file, so e.g. src/nested/foo.js becomes nested/foo
                                                            path.relative(
                                                                "resources/js",
                                                                file.slice(0, file.length - path.extname(file).length),
                                                            ),
                                                            // This expands the relative paths to absolute paths, so
                                                            // e.g. src/nested/foo becomes /project/src/nested/foo.js
                                                            fileURLToPath(new URL(file, import.meta.url)),
                                                        ]),
                                                    ),
                                                },
                                                refresh: [
                                                    ...refreshPaths,
                                                    "app/Http/Livewire/**",
                                                    "app/Forms/Components/**",
                                                    "app/Tables/Columns/**",
                                                    "app/Filament/**",
                                                ],
                                            }),
                                ],
                                resolve: {
                                    alias: {
                                        "@/*": "/resources/js/**",
                                    },
                                },
                            })
