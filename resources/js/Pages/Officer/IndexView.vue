<script setup>
import { Link } from '@inertiajs/vue3';
import DataCard from "@/Pages/Components/DataCard.vue";

const props = defineProps({
    officers: Object
});
</script>

<template>
    <div>
        <div class="flex justify-between pb-4">
            <p class="text-3xl font-semibold">Officers</p>
            <Link :href="route('officers.create')"><button class="py-2 px-4 border rounded-lg bg-blue-500 text-white w-fit drop-shadow-lg active:drop-shadow-none">Add</button></Link>
        </div>
        <div class="flex flex-col gap-2">
            <DataCard v-for="officer in props.officers" :key="officer.id" :first-name="officer['first_name']" :last-name="officer['last_name']" route-name="officers" :parameter="officer.id"/>
        </div>
    </div>
</template>
