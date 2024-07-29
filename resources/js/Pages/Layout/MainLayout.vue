<script setup>
import { Link } from "@inertiajs/vue3";
</script>

<template>
    <div>
        <div class="flex justify-between items-center p-8 border-b bg-white drop-shadow-lg">
            <Link :href="route('home')"><p class="text-3xl font-bold">Spatie Permission Demo</p></Link>
            <div class="flex gap-4 cursor-default select-none">
                <Link :href="route('employees.index')" class="hover:underline hover:text-blue-600">Employee</Link>
                <Link :href="route('officers.index')" class="hover:underline hover:text-blue-600">Officer</Link>
                <Link :href="`#`" class="hover:underline hover:text-blue-600">Permissions</Link>
                <p>|</p>
                <Link :href="route('logout')" class="hover:underline hover:text-blue-600">Logout</Link>
            </div>
        </div>
        <div class="p-8">
            <slot/>
        </div>
    </div>
</template>
