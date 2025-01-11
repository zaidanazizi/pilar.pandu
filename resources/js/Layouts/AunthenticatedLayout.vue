<template>
    <div>
        <header>
            <nav>
                <!-- Tambahkan navigasi atau header di sini -->
                <slot name="navigation"></slot>
            </nav>
        </header>

        <main>
            <!-- Tempat untuk konten utama -->
            <slot />
        </main>

        <footer>
            <!-- Tambahkan footer di sini -->
            <slot name="footer"></slot>
        </footer>
    </div>
</template>

<script>
export default {
    name: "AuthenticatedLayout",
};
</script>

<style scoped>
/* Tambahkan style untuk layout utama di sini */
header {
    background-color: #f4f4f4;
    padding: 1rem;
}
footer {
    background-color: #f4f4f4;
    padding: 1rem;
    text-align: center;
}
</style>
