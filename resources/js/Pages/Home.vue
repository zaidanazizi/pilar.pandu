<template>
    <MainLayout>
        <!-- Hero Section -->
        <div
            class="relative h-auto py-16 flex flex-col items-center justify-center bg-white"
        >
            <!-- Teks Hero -->
            <div class="text-center z-[1] relative">
                <h1
                    class="text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl lg:text-6xl mt-32 px-64"
                >
                    Solusi Peralatan Industri Terbaik untuk Kesuksesan Bisnis
                    Anda
                </h1>
                <p class="mt-12 text-xl text-gray-600 max-w-3xl mx-auto">
                    Your trusted partner in heavy equipment solutions. We
                    provide quality machinery for construction, mining, and
                    industrial needs.
                </p>

                <div class="mt-10">
                    <a
                        href="/categories"
                        class="px-4 py-4 h-10 rounded-lg text-white font-semibold bg-gradient-to-b from-[#062D3F] to-[#579EB6] hover:opacity-90 shadow-md transition-shadow duration-300"
                    >
                        View Our Products
                    </a>
                </div>
            </div>

            <!-- Container untuk gambar overlay dan infinite scroll -->
            <div class="relative w-full mt-96 flex flex-col items-center">
                <!-- Gambar Besar Overlay -->
                <div
                    class="absolute bottom-0 z-[1] flex justify-center pointer-events-none"
                >
                    <img
                        src="/images/main-photo.jpg"
                        alt="Large Product"
                        class="h-80 w-auto object-contain cornered-top"
                    />
                </div>

                <!-- Animasi Infinite Scroll -->
                <div
                    class="gradien-container absolute bottom-0 z-[0] w-full overflow-hidden px-4 sm:px-6 lg:px-20 mask-fade infinite-scroll-cornered"
                >
                    <!-- Scroll Wrapper -->
                    <div class="flex items-center scroll-wrapper">
                        <!-- Gambar digandakan untuk seamless scrolling -->
                        <div class="scroll-content">
                            <img
                                v-for="(image, index) in infiniteScrollImages"
                                :key="`image-original-${index}`"
                                :src="image"
                                alt="Scroll Image Original"
                                class="h-64 w-auto object-contain"
                            />
                            <img
                                v-for="(image, index) in infiniteScrollImages"
                                :key="`image-duplicate-${index}`"
                                :src="image"
                                alt="Scroll Image Duplicate"
                                class="h-64 w-auto object-contain"
                            />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Core Values Section -->
        <div class="py-24 bg-white sm:py-32">
            <div class="max-w-7xl mx-auto px-6 lg:px-8">
                <div class="mx-auto max-w-2xl lg:text-center">
                    <h2
                        class="text-base font-semibold leading-7 text-indigo-600"
                    >
                        Our Values
                    </h2>
                    <p
                        class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl"
                    >
                        Everything you need for your heavy equipment needs
                    </p>
                </div>
                <div
                    class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-none"
                >
                    <dl
                        class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-16 lg:max-w-none lg:grid-cols-3"
                    >
                        <div
                            v-for="(value, index) in coreValues"
                            :key="index"
                            class="flex flex-col"
                        >
                            <dt class="font-semibold leading-7 text-gray-900">
                                <div
                                    class="mb-6 flex h-10 w-10 items-center justify-center rounded-lg bg-gradient-to-b from-[#062D3F] 50% via-[#1D5166] 80% via-[#39768C] to-[#579EB6]"
                                >
                                    <component
                                        :is="value.icon"
                                        class="h-6 w-6 text-white"
                                        aria-hidden="true"
                                    />
                                </div>
                                {{ value.name }}
                            </dt>
                            <dd
                                class="mt-4 flex flex-auto flex-col text-base leading-7 text-gray-600"
                            >
                                {{ value.description }}
                            </dd>
                        </div>
                    </dl>
                </div>
            </div>
        </div>

        <!-- Categories Preview Section -->
        <div id="categories" class="bg-gray-100 py-24 sm:py-32">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="mx-auto max-w-2xl text-center">
                    <h2
                        class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl"
                    >
                        Our Product Categories
                    </h2>
                    <p class="mt-4 text-lg leading-8 text-gray-600">
                        Explore our wide range of heavy equipment categories
                    </p>
                </div>
                <div
                    class="mx-auto mt-16 grid max-w-2xl auto-rows-fr grid-cols-1 gap-8 sm:mt-20 lg:mx-0 lg:max-w-none lg:grid-cols-3"
                >
                    <article
                        v-for="category in categories"
                        :key="category.id"
                        class="relative isolate flex flex-col justify-end overflow-hidden rounded-2xl bg-gray-900 px-8 pb-8 pt-80 sm:pt-48 lg:pt-80"
                    >
                        <img
                            :src="category.image"
                            :alt="category.name"
                            class="absolute inset-0 -z-10 h-full w-full object-cover"
                        />
                        <div
                            class="absolute inset-0 -z-10 bg-gradient-to-t from-gray-900 via-gray-900/40"
                        />
                        <h3
                            class="mt-3 text-lg font-semibold leading-6 text-white"
                        >
                            <Link :href="'/categories/' + category.slug">
                                <span class="absolute inset-0" />
                                {{ category.name }}
                            </Link>
                        </h3>
                    </article>
                </div>
            </div>
        </div>
    </MainLayout>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";
import MainLayout from "@/Layouts/MainLayout.vue";
import {
    ShieldCheckIcon,
    TruckIcon,
    WrenchIcon,
} from "@heroicons/vue/24/outline";

const infiniteScrollImages = [
    "/images/product1.png",
    "/images/product2.png",
    "/images/product3.png",
    "/images/product4.png",
    "/images/product5.png",
];

const coreValues = [
    {
        name: "Reliability",
        description:
            "We provide only the most reliable and tested equipment for your needs.",
        icon: ShieldCheckIcon,
    },
    {
        name: "Efficiency",
        description:
            "Our equipment is selected to maximize your productivity and minimize costs.",
        icon: TruckIcon,
    },
    {
        name: "Service",
        description: "We offer comprehensive support and maintenance services.",
        icon: WrenchIcon,
    },
];

const categories = [
    {
        id: 1,
        name: "General Pallet",
        slug: "general pallet",
        image: "/images/GeneralPallet.png",
    },
    {
        id: 2,
        name: "Generator Set",
        slug: "generator set",
        image: "/images/GeneratorSet.png",
    },
    {
        id: 3,
        name: "Industrial Equipment Support",
        slug: "industrial equipment support",
        image: "/images/IndustrialEquipmentSupport.png",
    },
];
</script>

<style>
:root {
    --fade-gradient: linear-gradient(
        to right,
        rgba(255, 255, 255, 0) 5%,
        rgba(255, 255, 255, 0.5) 10%,
        rgba(255, 255, 255, 1) 40%,
        rgba(255, 255, 255, 1) 60%,
        rgba(255, 255, 255, 0.5) 90%,
        rgba(255, 255, 255, 0) 100%
    );
    --fade-gradient-reverse: linear-gradient(
        to left,
        rgba(255, 255, 255, 0) 5%,
        rgba(255, 255, 255, 0.5) 10%,
        rgba(255, 255, 255, 1) 40%,
        rgba(255, 255, 255, 1) 60%,
        rgba(255, 255, 255, 0.5) 90%,
        rgba(255, 255, 255, 0) 100%
    );
}

.mask-fade {
    mask-image: var(--fade-gradient);
    -webkit-mask-image: var(--fade-gradient);
}

.mask-fade-reverse {
    mask-image: var(--fade-gradient-reverse);
    -webkit-mask-image: var(--fade-gradient-reverse);
}

/* Wrapper untuk animasi scroll */
.scroll-wrapper {
    position: relative;
    display: flex;
    overflow: hidden;
    width: 100%;
    height: 100%;
    background-color: transparent; /* Menghapus background hitam */
}

.scroll-content,
.scroll-content-reverse {
    display: flex;
    animation: scroll 200s linear infinite;
}

.scroll-content img {
    margin-right: 1rem; /* Sesuaikan nilai untuk jarak antar gambar */
}

.scroll-content-reverse {
    animation: scroll-reverse 160s linear infinite;
}

.cornered-top {
    border-top-left-radius: 1rem; /* Sesuaikan nilai untuk keinginan */
    border-top-right-radius: 1rem; /* Sesuaikan nilai untuk keinginan */
    overflow: hidden; /* Hilangkan bagian yang melampaui radius */
}

.infinite-scroll-cornered {
    border-top-left-radius: 1rem; /* Sesuaikan sesuai kebutuhan */
    border-top-right-radius: 1rem; /* Sesuaikan sesuai kebutuhan */
    overflow: hidden; /* Agar konten tidak keluar dari radius sudut */
}

/* Animasi Infinite Scroll */
@keyframes scroll {
    0% {
        transform: translateX(0);
    }
    100% {
        transform: translateX(-100%);
    }
}

@keyframes scroll-reverse {
    0% {
        transform: translateX(-100%);
    }
    100% {
        transform: translateX(0);
    }
}

/* Efek zoom pada gambar */
.scroll-content img,
.scroll-content-reverse img {
    transition: transform 0.3s ease;
}

.scroll-content img:hover,
.scroll-content-reverse img:hover {
    transform: scale(1.1);
}
</style>
