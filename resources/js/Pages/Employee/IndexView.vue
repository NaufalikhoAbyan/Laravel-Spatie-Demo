<script setup>
import { Link } from '@inertiajs/vue3';
import DataCard from "@/Pages/Components/DataCard.vue";

const props = defineProps({
    employees: Object
});
</script>

<template>
    <div>
        <div class="flex justify-between pb-4">
            <p class="text-3xl font-semibold">Employees</p>
            <Link :href="route('employees.create')"><button class="py-2 px-4 border rounded-lg bg-blue-500 text-white w-fit drop-shadow-lg active:drop-shadow-none">Add</button></Link>
        </div>
        <div class="flex flex-col gap-2">
            <DataCard v-for="employee in props.employees" :key="employee.id" :first-name="employee['first_name']" :last-name="employee['last_name']" route-name="employees" :parameter="employee.id"/>
        </div>
    </div>
</template>
