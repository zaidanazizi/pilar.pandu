<template>
    <MainLayout>
        <!-- Header -->
        <div class="bg-white">
            <div class="relative isolate overflow-hidden bg-gradient-to-b from-indigo-100/20 pt-14">
                <div class="mx-auto max-w-7xl px-6 py-20 sm:py-32 lg:px-8">
                    <div class="mx-auto max-w-2xl text-center">
                        <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">
                            Our Equipment Categories
                        </h1>
                        <p class="mt-6 text-lg leading-8 text-gray-600">
                            Discover our comprehensive range of heavy equipment solutions
                            designed to meet your specific industry needs.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Categories Grid -->
        <div class="bg-white">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-16">
                <div class="grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-3 xl:gap-x-8">
                    <div v-for="category in categories" :key="category.id" class="group relative">
                        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200">
                            <img
                                :src="category.image"
                                :alt="category.name"
                                class="h-full w-full object-cover object-center group-hover:opacity-75"
                            />
                        </div>
                        <div class="mt-4 flex flex-col">
                            <h3 class="text-xl font-bold text-gray-900">{{ category.name }}</h3>
                            <p class="mt-1 text-sm text-gray-500">{{ category.description }}</p>
                            <div class="mt-4">
                                <Link
                                    :href="`/categories/${category.slug}`"
                                    class="inline-flex items-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
                                >
                                    View Products
                                    <ArrowRightIcon class="ml-2 h-4 w-4" />
                                </Link>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Features Section -->
        <div class="bg-gray-50 py-16 sm:py-24">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="mx-auto max-w-2xl lg:text-center">
                    <h2 class="text-base font-semibold leading-7 text-indigo-600">Why Choose Us</h2>
                    <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
                        Superior Equipment Solutions
                    </p>
                    <p class="mt-6 text-lg leading-8 text-gray-600">
                        We provide top-quality heavy equipment backed by comprehensive support and service
                    </p>
                </div>
                <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-none">
                    <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-16 lg:max-w-none lg:grid-cols-3">
                        <div v-for="feature in features" :key="feature.name" class="flex flex-col">
                            <dt class="flex items-center gap-x-3 text-base font-semibold leading-7 text-gray-900">
                                <component
                                    :is="feature.icon"
                                    class="h-5 w-5 flex-none text-indigo-600"
                                    aria-hidden="true"
                                />
                                {{ feature.name }}
                            </dt>
                            <dd class="mt-4 flex flex-auto flex-col text-base leading-7 text-gray-600">
                                <p class="flex-auto">{{ feature.description }}</p>
                            </dd>
                        </div>
                    </dl>
                </div>
            </div>
        </div>
    </MainLayout>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'
import MainLayout from '@/Layouts/MainLayout.vue'
import { ArrowRightIcon } from '@heroicons/vue/20/solid'
import {
    TruckIcon,
    WrenchScrewdriverIcon,
    CurrencyDollarIcon,
} from '@heroicons/vue/24/outline'

const categories = [
    {
        id: 1,
        name: 'General Pallet',
        slug: 'general pallet',
        image: '/images/general pallet.png',
    },
    {
        id: 2,
        name: 'Generator Set',
        slug: 'generator set',
        image: '/images/generator set.png',
    },
    {
        id: 3,
        name: 'Industrial Equipment Support',
        slug: 'industrial equipment support',
        image: '/images/industrial equipment support.png',
    },
    {
        id: 4,
        name: 'Material Handling',
        slug: 'material handling',
        description: 'Versatile wheel loaders for material handling',
        image: '/images/material handling.png',
    },
]

const features = [
    {
        name: 'Quality Equipment',
        description: 'All our equipment meets the highest industry standards and undergoes regular maintenance checks.',
        icon: TruckIcon,
    },
    {
        name: 'Technical Support',
        description: '24/7 technical support and maintenance services to keep your operations running smoothly.',
        icon: WrenchScrewdriverIcon,
    },
    {
        name: 'Competitive Pricing',
        description: 'We offer competitive pricing and flexible financing options to suit your budget.',
        icon: CurrencyDollarIcon,
    },
]
</script>
