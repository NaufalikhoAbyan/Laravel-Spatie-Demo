<script setup>
import { Link } from '@inertiajs/vue3';
const props = defineProps({
    employee: Object
});
</script>

<template>
    <div class="flex flex-col gap-2 w-fit border p-4 rounded-md bg-white drop-shadow-lg">
        <Link :href="route('employees.index')" class="text-blue-600 cursor-pointer hover:underline">Back</Link>
        <p>First Name: {{ props.employee['first_name'] }}</p>
        <p>Last Name: {{ props.employee['last_name'] }}</p>
    </div>
</template>
