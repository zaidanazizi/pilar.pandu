<template>
    <MainLayout>
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <Breadcrumbs :breadcrumbs="breadcrumbs" />

            <div v-if="product" class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-10">
                <!-- Carousel -->
                <div>
                    <div class="relative">
                        <img
                            :src="product.gallery[currentImageIndex] || 'default-image.jpg'"
                            alt="Product Image"
                            class="w-full h-auto rounded-lg"
                        />
                        <button
                            v-if="product.gallery.length > 1"
                            @click="prevImage"
                            class="absolute top-1/2 left-0 transform -translate-y-1/2 bg-white p-2 rounded-full shadow-md"
                        >
                            &lt;
                        </button>
                        <button
                            v-if="product.gallery.length > 1"
                            @click="nextImage"
                            class="absolute top-1/2 right-0 transform -translate-y-1/2 bg-white p-2 rounded-full shadow-md"
                        >
                            &gt;
                        </button>
                    </div>
                </div>

                <!-- Product Details -->
                <div>
                    <h1 class="text-3xl font-bold text-gray-800">{{ product.name }}</h1>

                    <div v-if="product.specifications" class="mt-6">
                        <h2 class="text-2xl font-semibold text-gray-800">Spesifikasi</h2>
                        <ul class="list-disc ml-6 mt-4">
                            <li v-for="(value, key) in product.specifications" :key="key">
                                <strong>{{ key }}:</strong> {{ value }}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </MainLayout>
</template>

<script setup>
import { defineProps, ref } from "vue";
import MainLayout from "@/Layouts/MainLayout.vue";
import Breadcrumbs from "@/Components/Breadcrumbs.vue";

const props = defineProps({
    product: Object,
    category: Object,
});

const breadcrumbs = [
    { label: "Home", url: "/" },
    { label: "Categories", url: "/categories" },
    { label: props.category?.name, url: `/categories/${props.category?.slug}` },
    { label: props.product?.name, url: "#" },
];

const currentImageIndex = ref(0);
const prevImage = () => {
    currentImageIndex.value =
        (currentImageIndex.value - 1 + props.product.gallery.length) % props.product.gallery.length;
};
const nextImage = () => {
    currentImageIndex.value =
        (currentImageIndex.value + 1) % props.product.gallery.length;
};
</script>
