<script setup>
import Button from "primevue/button";
import { router } from "@inertiajs/vue3";
</script>
<template>
    <Button label="Login" @click="router.visit(route('login'))" />
</template>
