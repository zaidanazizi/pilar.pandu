<template>
    <div>
        <h2 class="text-2xl font-bold">Generator Set</h2>
        <p>Genset berkualitas tinggi untuk suplai daya cadangan dan kebutuhan listrik berkelanjutan.</p>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mt-4">
            <div v-for="product in products" :key="product.id" class="border p-4 rounded shadow">
                <h3 class="font-bold">{{ product.name }}</h3>
                <p>{{ product.description }}</p>
            </div>
        </div>
    </div>
</template>

<script setup>
defineProps(['products']); // Receive props from Laravel
</script>