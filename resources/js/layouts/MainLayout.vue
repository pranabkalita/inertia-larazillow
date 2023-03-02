<script setup>
import { ref, computed } from 'vue';
import { Link, usePage } from '@inertiajs/vue3';

const timer = ref(0)
setInterval(() => timer.value++, 1000)

const flashMessage = computed(() => usePage().props.flash.success)
</script>

<template>
    <Link href="/listings">Listings</Link>
    <Link href="/listings/create">New Listing</Link>
    <div v-if="flashMessage" class="success">
        {{ flashMessage }}
    </div>
    <!-- <div>The page with time: {{ timer }}</div> -->
    <slot></slot>
</template>

<style scoped>
.success {
    background-color: green;
    color: white;
}
</style>
