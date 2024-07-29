<script setup>
import { Link, router as inertiaRouter } from '@inertiajs/vue3';
const props = defineProps({
    firstName: String,
    lastName: String,
    routeName: String,
    parameter: String
})
</script>

<template>
    <div class="flex justify-between gap-2 border rounded-md p-4 bg-white drop-shadow-lg">
        <p>{{ props.firstName }} {{props.lastName}}</p>
        <div class="flex gap-2">
            <Link :href="route(`${props.routeName}.show`, props.parameter)"><p class="text-blue-600 cursor-pointer hover:underline">Show</p></Link>
            <Link :href="route(`${props.routeName}.edit`, props.parameter)"><p class="text-blue-600 cursor-pointer hover:underline">Update</p></Link>
            <p @click="inertiaRouter.delete(route(`${props.routeName}.destroy`, props.parameter))" class="text-blue-600 cursor-pointer hover:underline">Delete</p>
        </div>
    </div>
</template>
