<script setup>
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <p class="text-3xl">About Section</p>
    <Link :href="route('home')" class="hover:underline text-blue-600">Home</Link>
    <Link :href="route('logout')" class="hover:underline text-blue-600">Logout</Link>
</template>
