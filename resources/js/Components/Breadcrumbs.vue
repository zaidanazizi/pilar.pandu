<template>
    <MainLayout>
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-10">
            <nav
                v-if="breadcrumbs && breadcrumbs.length"
                class="text-sm mb-4 mt-4"
            >
                <ol class="flex space-x-2">
                    <li
                        v-for="(breadcrumb, index) in breadcrumbs"
                        :key="index"
                        class="flex items-center"
                    >
                        <Link
                            v-if="index < breadcrumbs.length - 1"
                            :href="breadcrumb.url"
                            class="text-gray-600 font-bold hover:text-blue-900"
                        >
                            {{ breadcrumb.label }}
                        </Link>
                        <span v-else class="text-gray-800 font-normal">
                            {{ breadcrumb.label }}
                        </span>
                        <span
                            v-if="index < breadcrumbs.length - 1"
                            class="mx-2 text-gray-800"
                        >
                            >
                        </span>
                    </li>
                </ol>
            </nav>

            <!-- Konten lainnya -->
        </div>
    </MainLayout>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";
defineProps(["breadcrumbs"]);
</script>
