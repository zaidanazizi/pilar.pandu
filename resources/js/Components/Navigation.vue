<template>
  <nav class="bg-white border-b border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between h-16">
        <div class="flex">
          <!-- Logo -->
          <div class="shrink-0 flex items-center">
            <Link :href="route('home')">
              <ApplicationLogo class="block h-9 w-auto fill-current text-gray-800" />
            </Link>
          </div>

          <!-- Navigation Links -->
          <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
            <NavLink :href="route('home')" :active="route().current('home')">
              Beranda
            </NavLink>
            <NavLink :href="route('categories')" :active="route().current('categories')">
              Kategori
            </NavLink>
            <NavLink :href="route('about')" :active="route().current('about')">
              Tentang Kami
            </NavLink>
          </div>
        </div>
      </div>
    </div>
  </nav>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import NavLink from '@/Components/NavLink.vue';
</script>
