<script setup>
import { Head, router } from "@inertiajs/vue3";
import Button from "primevue/button";
</script>

<template>
    <Head title="Welcome" />
    <Button label="Login" @click="router.visit(route('login'))" />
    <Button
        label="Register"
        @click="router.visit(route('register'))"
        icon="pi pi-check"
    />
</template>
