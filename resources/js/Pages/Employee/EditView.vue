<script setup>
import { useForm } from "@inertiajs/vue3";

const props = defineProps({
    employee: Object
})

const form = useForm({
    first_name: props.employee['first_name'],
    last_name: props.employee['last_name']
});
</script>

<template>
    <div class="flex justify-center">
        <div class="p-4 w-fit border rounded-md bg-white drop-shadow-lg">
            <p class="text-2xl font-semibold">Edit</p>
            <form @submit.prevent="form.put(route('employees.update', props.employee.id))">
                <div>
                    <div class="flex gap-2">
                        <div class="flex flex-col py-4">
                            <label class="opacity-75" for="firstName">First Name</label>
                            <input type="text" id="firstName" class="border-2 rounded px-2 py-1 focus:outline-blue-500" v-model="form.first_name"/>
                        </div>
                        <div class="flex flex-col py-4">
                            <label class="opacity-75" for="lastName">Last Name</label>
                            <input type="text" id="lastName" class="border-2 rounded px-2 py-1 focus:outline-blue-500" v-model="form.last_name"/>
                        </div>
                    </div>
                    <div>
                        <button type="submit" class="py-2 px-4 border rounded-lg bg-blue-500 text-white w-fit drop-shadow-lg active:drop-shadow-none">Edit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</template>
