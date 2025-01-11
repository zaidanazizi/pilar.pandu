<template>
    <div class="min-h-screen bg-gray-100">
        <!-- Navigation Bar -->
        <nav class="fixed top-0 left-0 right-0 z-10 bg-white text-gray-900">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between h-24">
                    <!-- Logo and Text -->
                    <div class="flex items-center space-x-1">
                        <img
                            src="/images/logo.png"
                            alt="Pilar Pandu Logo"
                            class="h-12 w-12"
                        />
                        <Link href="/" class="font-bold text-xl text-gray-600">
                            Pilar Pandu
                        </Link>
                    </div>

                    <!-- Navigation Links -->
                    <div class="hidden space-x-8 sm:flex sm:items-center">
                        <Link
                            v-for="item in navigation"
                            :key="item.name"
                            :href="item.href"
                            class="px-3 py-2 rounded-md text-sm font-bold text-gray-900"
                        >
                            {{ item.name }}
                        </Link>
                    </div>

                    <!-- Button Contact -->
                    <a
                        href="/contact"
                        class="px-4 py-2 h-10 rounded-lg text-white font-semibold bg-gradient-to-b from-[#062D3F] 50% via-[#1D5166] 80% via-[#39768C] to-[#579EB6] hover:opacity-90 shadow-md transition-shadow duration-300"
                    >
                        Contact
                    </a>

                    <!-- Mobile menu button -->
                    <div class="flex items-center sm:hidden">
                        <button
                            @click="mobileMenuOpen = !mobileMenuOpen"
                            class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100"
                        >
                            <span class="sr-only">Open main menu</span>
                            <Bars3Icon
                                v-if="!mobileMenuOpen"
                                class="block h-6 w-6"
                                aria-hidden="true"
                            />
                            <XMarkIcon
                                v-else
                                class="block h-6 w-6"
                                aria-hidden="true"
                            />
                        </button>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Breadcrumb Section -->
        <section
            v-if="breadcrumbs && breadcrumbs.length"
            class="bg-gray-100 py-6"
        >
            <div class="container mx-auto px-4">
                <nav class="flex items-center text-sm text-gray-500">
                    <template
                        v-for="(crumb, index) in breadcrumbs"
                        :key="index"
                    >
                        <a
                            v-if="crumb.url"
                            :href="crumb.url"
                            class="text-indigo-600 hover:underline"
                        >
                            {{ crumb.label }}
                        </a>
                        <span v-else>{{ crumb.label }}</span>
                        <span v-if="index < breadcrumbs.length - 1" class="mx-2"
                            >/</span
                        >
                    </template>
                </nav>
            </div>
        </section>
        <!-- Page Content -->
        <main>
            <slot />
        </main>

        <!-- Footer -->
        <footer class="bg-gray-800 text-white">
            <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
                <!-- Logo and Company Information -->
                <div
                    class="flex flex-col md:flex-row justify-between items-center md:items-start"
                >
                    <div class="mb-8 md:mb-0">
                        <img
                            src="/images/logo pilarpandu (white).png"
                            alt="Pilar Pandu Logo"
                            class="h-12 mb-4"
                        />
                        <p class="text-gray-400">
                            Pilar Pandu - Penyedia Alat Industrial
                        </p>
                        <p class="text-gray-400">
                            &copy; {{ new Date().getFullYear() }} Pilar Pandu.
                            All rights reserved.
                        </p>
                    </div>

                    <!-- Navigation Links -->
                    <div class="flex space-x-8">
                        <a href="/" class="text-gray-400 hover:text-white"
                            >Home</a
                        >
                        <a
                            href="/categories"
                            class="text-gray-400 hover:text-white"
                            >Categories</a
                        >
                        <a href="/about" class="text-gray-400 hover:text-white"
                            >About</a
                        >
                        <a
                            href="/contact"
                            class="text-gray-400 hover:text-white"
                            >Contact</a
                        >
                    </div>
                </div>

                <!-- Contact Info and Social Media -->
                <div
                    class="mt-8 border-t border-gray-700 pt-8 flex flex-col md:flex-row justify-between items-center"
                >
                    <div class="text-gray-400 text-sm text-center md:text-left">
                        <p>
                            Email:
                            <a
                                href="mailto:info@pilarpandu.com"
                                class="text-blue-400 hover:underline"
                                >info@pilarpandu.com</a
                            >
                        </p>
                        <p>
                            Telepon:
                            <a
                                href="tel:+6281234567890"
                                class="text-blue-400 hover:underline"
                                >+62 812-3456-7890</a
                            >
                        </p>
                    </div>
                    <div class="flex space-x-6 mt-4 md:mt-0">
                        <a
                            href="https://facebook.com"
                            target="_blank"
                            class="text-gray-400 hover:text-white"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor"
                                viewBox="0 0 24 24"
                                class="h-6 w-6"
                            >
                                <path
                                    d="M22 12C22 6.48 17.52 2 12 2S2 6.48 2 12c0 4.84 3.65 8.84 8.37 9.72v-6.89H7.9v-2.83h2.47V9.94c0-2.43 1.45-3.78 3.67-3.78 1.07 0 2.19.19 2.19.19v2.4h-1.23c-1.21 0-1.58.75-1.58 1.51v1.81h2.7l-.43 2.83h-2.27v6.89C18.35 20.84 22 16.84 22 12z"
                                />
                            </svg>
                        </a>
                        <a
                            href="https://instagram.com"
                            target="_blank"
                            class="text-gray-400 hover:text-white"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                class="h-6 w-6"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M7.5 2h9a5.5 5.5 0 015.5 5.5v9a5.5 5.5 0 01-5.5 5.5h-9A5.5 5.5 0 012 16.5v-9A5.5 5.5 0 017.5 2z"
                                />
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M16 11.37a4 4 0 11-7.37 2.63A4 4 0 0116 11.37z"
                                />
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M17.5 6.5h.01"
                                />
                            </svg>
                        </a>
                        <a
                            href="https://youtube.com"
                            target="_blank"
                            class="text-gray-400 hover:text-white"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor"
                                viewBox="0 0 24 24"
                                class="h-6 w-6"
                            >
                                <path
                                    d="M21.8 8.001s-.2-1.429-.819-2.058c-.781-.818-1.654-.822-2.056-.872C16.798 4.8 12 4.8 12 4.8h-.001S7.2 4.8 5.075 5.071c-.401.05-1.274.054-2.056.872C2.4 6.572 2.2 8.001 2.2 8.001S2 9.616 2 11.229v1.543c0 1.613.2 3.229.2 3.229s.2 1.429.819 2.058c.781.818 1.805.793 2.261.878 1.639.157 6.72.215 6.72.215s4.799-.002 6.924-.273c.401-.05 1.274-.054 2.056-.872.619-.629.819-2.058.819-2.058s.2-1.616.2-3.229V11.23c0-1.613-.2-3.229-.2-3.229zM9.545 15.568V8.432l6.364 3.568-6.364 3.568z"
                                />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</template>

<script setup>
import { ref } from "vue";
import { Link } from "@inertiajs/vue3";
import { Bars3Icon, XMarkIcon } from "@heroicons/vue/24/outline";

const mobileMenuOpen = ref(false);

defineProps({
    breadcrumbs: {
        type: Array,
        default: () => [],
    },
});

const navigation = [
    { name: "Home", href: "/", current: "home" },
    { name: "Categories", href: "/categories", current: "categories" },
    { name: "About", href: "/about", current: "about" },
];
</script>
