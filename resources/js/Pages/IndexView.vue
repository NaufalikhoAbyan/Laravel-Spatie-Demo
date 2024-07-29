<script setup>
import { ref } from 'vue';
import { Link } from "@inertiajs/vue3";
const count = ref(0);
</script>

<template>
    <div class="m-4 w-fit flex flex-col gap-4">
        <p class="text-3xl">Count {{ count }}</p>
        <button @click="count++" class="py-2 px-4 border rounded-lg bg-blue-500 text-white w-fit drop-shadow-lg active:drop-shadow-none">Add</button>
    </div>
    <Link :href="route('about')" class="text-blue-600 hover:underline">About</Link>
</template>
