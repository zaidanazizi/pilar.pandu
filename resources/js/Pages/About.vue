<template>
    <MainLayout>
        <!-- Hero Section -->
        <div class="relative isolate overflow-hidden bg-gray-900 py-24 sm:py-32">
            <img
                src="/images/about hero.png"
                alt="About Us"
                class="absolute inset-0 -z-10 h-full w-full object-cover opacity-25"
            />
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="mx-auto max-w-2xl lg:mx-0">
                    <h1 class="text-4xl font-bold tracking-tight text-white sm:text-6xl">About Us</h1>
                    <p class="mt-6 text-lg leading-8 text-gray-300">
                        Your trusted partner in heavy equipment solutions since 2024. We're committed to providing
                        quality machinery and exceptional service to support your business growth.
                    </p>
                </div>
            </div>
        </div>

        <!-- Company History -->
        <div class="bg-white py-24 sm:py-32">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2">
                    <div class="lg:pr-8 lg:pt-4">
                        <div class="lg:max-w-lg">
                            <h2 class="text-base font-semibold leading-7 text-indigo-600">Our History</h2>
                            <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">A Legacy of Excellence</p>
                            <p class="mt-6 text-lg leading-8 text-gray-600">
                                Founded in 2024, we've grown from a small equipment provider to one of the leading
                                heavy machinery suppliers in the region. Our journey is marked by continuous innovation
                                and unwavering commitment to customer satisfaction.
                            </p>
                            <div class="mt-10 max-w-xl space-y-8 text-base leading-7 text-gray-600">
                                <div v-for="(milestone, index) in milestones" :key="index">
                                    <h3 class="font-semibold text-gray-900">{{ milestone.year }}</h3>
                                    <p>{{ milestone.description }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <img
                        src="/images/about us history.jpg"
                        alt="Company History"
                        class="w-[48rem] max-w-none rounded-xl shadow-xl ring-1 ring-gray-400/10 sm:w-[40rem] md:-ml-4 lg:-ml-0"
                    />
                </div>
            </div>
        </div>

        <!-- Vision & Mission -->
        <div class="bg-gray-50 py-24 sm:py-32">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="mx-auto max-w-2xl lg:text-center">
                    <h2 class="text-base font-semibold leading-7 text-indigo-600">Our Vision & Mission</h2>
                    <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
                        Building Tomorrow Together
                    </p>
                </div>
                <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-none">
                    <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-16 lg:max-w-none lg:grid-cols-2">
                        <!-- Vision -->
                        <div class="flex flex-col">
                            <dt class="flex items-center gap-x-3 text-xl font-semibold leading-7 text-gray-900 ">
                                <EyeIcon class="h-5 w-5 flex-none text-indigo-600" aria-hidden="true" />
                                Our Vision
                            </dt>
                            <dd class="mt-4 flex flex-auto flex-col text-base leading-7 text-gray-600">
                                <p class="flex-auto">
                                    To be the leading provider of heavy equipment solutions, recognized for our
                                    commitment to quality, innovation, and customer success.
                                </p>
                            </dd>
                        </div>
                        <!-- Mission -->
                        <div class="flex flex-col">
                            <dt class="flex items-center gap-x-3 text-xl font-semibold leading-7 text-gray-900">
                                <FlagIcon class="h-5 w-5 flex-none text-indigo-600" aria-hidden="true" />
                                Our Mission
                            </dt>
                            <dd class="mt-4 flex flex-auto flex-col text-base leading-7 text-gray-600">
                                <p class="flex-auto">
                                    To provide superior heavy equipment solutions that empower our clients'
                                    success through reliable machinery, exceptional service, and continuous innovation.
                                </p>
                            </dd>
                        </div>
                    </dl>
                </div>
            </div>
        </div>
    </MainLayout>
</template>

<script setup>
import MainLayout from '@/Layouts/MainLayout.vue'
import { EyeIcon, FlagIcon } from '@heroicons/vue/24/outline'

const milestones = [
    {
        year: '2023',
        description: 'Company founded with a focus on construction equipment.',
    },
    {
        year: '2024',
        description: 'Expanded operations to include mining equipment.',
    },
    {
        year: '2025',
        description: 'Established comprehensive service and maintenance division.',
    },
    {
        year: 'Today',
        description: 'Leading provider of heavy equipment solutions with nationwide coverage.',
    },
]
</script>
