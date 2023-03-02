<script setup>
import { ref, computed } from 'vue';
import { Link, usePage } from '@inertiajs/vue3';

const flashMessage = computed(() => usePage().props.flash.success)
</script>

<template>
    <header class="w-full border-b border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-900">
        <div class="container mx-auto">
            <nav class="p-4 flex items-center justify-between">
                <div class="text-lg font-medium">
                    <Link :href="route('listings.index')">Listings</Link>
                </div>

                <div class="text-xl text-indigo-600 dark:text-indigo-600 font-bold text-center">
                    <Link :href="route('listings.index')">LaraZillow</Link>
                </div>

                <div class="btn-primary">
                    <Link :href="route('listings.create')">+ New Listings</Link>
                </div>
            </nav>
        </div>
    </header>

    <div class="container mx-auto p-4">
        <div v-if="flashMessage"
            class="p-2 mb-4 border rounded-md border-green-200 dark:border-green-800 bg-green-50 dark:bg-green-900">
            {{ flashMessage }}
        </div>

        <slot></slot>
    </div>
</template>
