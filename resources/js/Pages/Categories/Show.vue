<template>
    <MainLayout>
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <!-- Breadcrumbs -->
            <Breadcrumbs :breadcrumbs="breadcrumbs" />

            <!-- Category Header -->
            <div class="mt-6 text-center">
                <h1 class="text-3xl font-bold text-gray-800">
                    {{ category.name }}
                </h1>
                <p class="text-lg text-gray-600 mt-2">
                    {{ category.description }}
                </p>
            </div>

            <!-- Product Grid -->
            <div
                class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 mt-10"
            >
                <div
                    v-for="product in category.products"
                    :key="product.id"
                    class="card group relative overflow-hidden bg-white shadow-lg rounded-lg transition-all duration-300 transform hover:scale-105 hover:shadow-2xl"
                >
                    <!-- Link for Navigation -->
                    <Link
                        :href="`/categories/${category.slug}/products/${product.slug}`"
                        class="block h-full"
                    >
                        <div class="overflow-hidden rounded-t-lg">
                            <img
                                :src="product.image"
                                :alt="product.name"
                                class="h-48 w-full object-cover transition-transform duration-300 transform group-hover:scale-110"
                            />
                        </div>
                        <div class="p-4">
                            <h3
                                class="text-lg font-semibold text-gray-800 group-hover:text-[#1D5166]"
                            >
                                {{ product.name }}
                            </h3>
                            <p class="text-gray-600 text-sm mt-2">
                                {{ product.description }}
                            </p>
                        </div>
                    </Link>
                </div>
            </div>
        </div>
    </MainLayout>
</template>

<script setup>
import { defineProps } from "vue";
import { Link } from "@inertiajs/inertia-vue3";
import MainLayout from "@/Layouts/MainLayout.vue";
import Breadcrumbs from "@/Components/Breadcrumbs.vue";

// Props dari server
defineProps(["category", "breadcrumbs"]);
</script>

<style scoped>
.card {
    transition: transform 0.3s ease-in-out, box-shadow 0.3s;
    cursor: pointer;
}
.card:hover {
    transform: scale(1.01);
    box-shadow: 0 5px 25px rgba(0, 0, 0, 0.2);
}
.card img {
    transition: transform 0.3s ease-in-out;
}
.card:hover img {
    transform: scale(1.01);
}
</style>
