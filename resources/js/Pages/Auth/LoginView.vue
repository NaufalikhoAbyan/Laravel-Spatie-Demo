<script setup>
import { useForm } from "@inertiajs/vue3";

const form = useForm({
    email: null,
    password: null
});
</script>

<template>
    <div class="min-w-full min-h-screen flex justify-center items-center">
        <div class="p-4 border rounded-lg drop-shadow-lg bg-white">
            <p class="text-3xl font-bold text-center">Login</p>
            <form @submit.prevent="form.post(route('authenticate'))">
                <div class="flex flex-col py-4">
                    <label for="email">Email</label>
                    <input type="text" id="email" class="border rounded-md px-2 py-1 focus:outline-blue-500" v-model="form.email"/>
                </div>
                <div class="flex flex-col py-4">
                    <label for="password">Password</label>
                    <input type="password" id="password" class="border rounded-md px-2 py-1 focus:outline-blue-500" v-model="form.password"/>
                </div>
                <button type="submit" class="w-full border rounded-lg bg-blue-500 text-white drop-shadow-lg active:drop-shadow-none px-4 py-2">Login</button>
            </form>
        </div>
    </div>
</template>
