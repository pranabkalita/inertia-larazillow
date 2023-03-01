<script setup>
import { ref } from 'vue';
import { Link } from '@inertiajs/vue3';

const timer = ref(0)
setInterval(() => timer.value++, 1000)
</script>

<template>
    <Link href="/">Main Page</Link>
    <Link href="/hello">Show Page</Link>
    <div>The page with time: {{ timer }}</div>
    <slot></slot>
</template>
