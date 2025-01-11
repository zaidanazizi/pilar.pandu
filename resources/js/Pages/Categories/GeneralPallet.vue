<template>
    <MainLayout>
        <div class="container mx-auto py-8">
            <!-- Breadcrumb Navigation -->
            <Breadcrumbs :breadcrumbs="breadcrumbs" />

            <!-- Page Header -->
            <header class="mb-8">
                <h1 class="text-3xl font-bold mb-4">{{ category.name }}</h1>
                <p>{{ category.description }}</p>
            </header>

            <!-- Product Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div
                    v-for="product in products"
                    :key="product.id"
                    class="border rounded-lg overflow-hidden shadow-lg"
                >
                    <img :src="product.image" :alt="product.name" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="font-bold text-lg">{{ product.name }}</h3>
                        <p class="text-gray-600">{{ product.description }}</p>
                    </div>
                </div>
            </div>
        </div>
    </MainLayout>
</template>

<script setup>
import { defineProps } from "vue";
import MainLayout from "@/Layouts/MainLayout.vue";
import Breadcrumbs from "@/Components/Breadcrumbs.vue";

defineProps({
    breadcrumbs: Array,
    category: Object,
    products: Array,
});
</script>